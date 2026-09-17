import os
import qrcode
from PIL import Image
from reportlab.lib.pagesizes import letter
from reportlab.lib import colors
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, Image as RLImage, PageBreak
from reportlab.pdfgen import canvas

# Base directory
BASE_DIR = "e:/Xampp/htdocs/packingwebsite"
os.makedirs(f"{BASE_DIR}/pdf", exist_ok=True)
os.makedirs(f"{BASE_DIR}/images", exist_ok=True)

pdf_path = f"{BASE_DIR}/pdf/Mirai_Packaging_Master_Catalogue.pdf"
qr_path = f"{BASE_DIR}/images/catalogue_qr_code.png"

# 1. Generate High-Res QR Code
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_H,
    box_size=10,
    border=2,
)
catalogue_url = "https://raw.githubusercontent.com/vededoply-cpu/project/main/pdf/Mirai_Packaging_Master_Catalogue.pdf"
qr.add_data(catalogue_url)
qr.make(fit=True)

qr_img = qr.make_image(fill_color="#071e3d", back_color="#ffffff")
qr_img.save(qr_path)
print(f"QR Code generated at: {qr_path}")

# Helper function to safely get RLImage with aspect ratio preservation
def get_safe_image(img_rel_path, max_w=200, max_h=130):
    full_path = os.path.join(BASE_DIR, img_rel_path)
    if not os.path.exists(full_path):
        print(f"Warning: Image file not found: {full_path}")
        return None
    try:
        with Image.open(full_path) as im:
            orig_w, orig_h = im.size
            ratio = min(max_w / float(orig_w), max_h / float(orig_h))
            w = orig_w * ratio
            h = orig_h * ratio
            return RLImage(full_path, width=w, height=h)
    except Exception as e:
        print(f"Error loading image {full_path}: {e}")
        return None

# 2. Numbered Canvas Class for Header & Footer
class NumberedCanvas(canvas.Canvas):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self._saved_page_states = []

    def showPage(self):
        self._saved_page_states.append(dict(self.__dict__))
        self._startPage()

    def save(self):
        num_pages = len(self._saved_page_states)
        for state in self._saved_page_states:
            self.__dict__.update(state)
            self.draw_header_footer(num_pages)
            super().showPage()
        super().save()

    def draw_header_footer(self, page_count):
        self.saveState()
        
        # Running header on pages > 1
        if self._pageNumber > 1:
            self.setFont("Helvetica-Bold", 8)
            self.setFillColor(colors.HexColor("#071e3d"))
            self.drawString(36, 762, "MIRAI PACKAGING LLP  |  MASTER PRODUCT CATALOGUE")
            self.setFont("Helvetica", 8)
            self.setFillColor(colors.HexColor("#64748b"))
            self.drawRightString(576, 762, "ISO 9001:2015 CERTIFIED")

        # Running footer on all pages
        self.setFont("Helvetica", 8)
        self.setFillColor(colors.HexColor("#64748b"))
        self.drawString(36, 28, "sales@miraiflexipack.in  |  +91-9044129477  |  GSTIN: 29AAUFM9272M1Z2")
        
        page_str = f"Page {self._pageNumber} of {page_count}"
        self.drawRightString(576, 28, page_str)
        self.restoreState()

# 3. Build Document
doc = SimpleDocTemplate(
    pdf_path,
    pagesize=letter,
    leftMargin=36,
    rightMargin=36,
    topMargin=54,
    bottomMargin=54
)

styles = getSampleStyleSheet()

# Custom Colors
navy_dark = colors.HexColor("#071e3d")
orange_brand = colors.HexColor("#eb5e28")
slate_gray = colors.HexColor("#334155")
light_bg = colors.HexColor("#f8fafc")

# Typography Styles
title_style = ParagraphStyle(
    'CoverTitle',
    fontName='Helvetica-Bold',
    fontSize=24,
    leading=28,
    textColor=navy_dark,
    spaceAfter=6
)

subtitle_style = ParagraphStyle(
    'CoverSubtitle',
    fontName='Helvetica-Bold',
    fontSize=12,
    leading=16,
    textColor=orange_brand,
    spaceAfter=14
)

h1_style = ParagraphStyle(
    'H1Heading',
    fontName='Helvetica-Bold',
    fontSize=14,
    leading=18,
    textColor=navy_dark,
    spaceBefore=10,
    spaceAfter=6
)

h2_style = ParagraphStyle(
    'H2Heading',
    fontName='Helvetica-Bold',
    fontSize=11,
    leading=15,
    textColor=orange_brand,
    spaceBefore=8,
    spaceAfter=4
)

body_style = ParagraphStyle(
    'BodyTextCustom',
    fontName='Helvetica',
    fontSize=9,
    leading=13,
    textColor=slate_gray,
    spaceAfter=6
)

caption_style = ParagraphStyle(
    'ImageCaption',
    fontName='Helvetica-Oblique',
    fontSize=8,
    leading=11,
    textColor=colors.HexColor("#475569"),
    alignment=1, # Centered
    spaceBefore=4,
    spaceAfter=6
)

table_header_style = ParagraphStyle(
    'TableHeader',
    fontName='Helvetica-Bold',
    fontSize=8.5,
    leading=11,
    textColor=colors.white
)

table_cell_style = ParagraphStyle(
    'TableCell',
    fontName='Helvetica',
    fontSize=8,
    leading=10.5,
    textColor=slate_gray
)

table_cell_bold = ParagraphStyle(
    'TableCellBold',
    fontName='Helvetica-Bold',
    fontSize=8,
    leading=10.5,
    textColor=navy_dark
)

# Standard Minimal Table Style (No Harsh Internal Grid Lines)
clean_table_style = [
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('BOX', (0,0), (-1,-1), 0.5, colors.HexColor("#e2e8f0")),
    ('LINEBELOW', (0,0), (-1,0), 1.5, navy_dark),
    ('PADDING', (0,0), (-1,-1), 5),
    ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
]

story = []

# ==================== PAGE 1: COVER PAGE WITH HERO INFRASTRUCTURE IMAGE ====================
logo_path = f"{BASE_DIR}/images/logo.png"
if os.path.exists(logo_path):
    try:
        story.append(RLImage(logo_path, width=150, height=50))
    except Exception as e:
        print("Logo warning:", e)

story.append(Spacer(1, 10))
story.append(Paragraph("MIRAI PACKAGING LLP", title_style))
story.append(Paragraph("MASTER INDUSTRIAL PACKAGING & PLANT SPECIFICATIONS CATALOGUE", subtitle_style))

# Cover Grid: Text Description on Left + Factory/Infra Image on Right
intro_p = Paragraph(
    "<b>Mirai Packaging LLP</b> is a premier manufacturer and converter of heavy-duty corrugated cartons, co-extruded courier flyers, industrial BOPP sealing tapes, protective honeycomb & air bubble cushioning, heavy-duty HDPE crates, storage racking systems, and seamless epoxy floorings.<br/><br/>"
    "Operating from our advanced manufacturing facilities in Bengaluru, we serve enterprise supply chains across India with zero-defect ISO 9001:2015 quality standards and guaranteed bursting strength compliance.",
    body_style
)

infra_img = get_safe_image("images/industrial_warehouse_infra.jpg", max_w=220, max_h=130)
if infra_img:
    infra_cell = [
        infra_img,
        Paragraph("<b>Fig 1.1:</b> Mirai Packaging Bengaluru Plant & Automated Storage Infrastructure", caption_style)
    ]
else:
    infra_cell = [Paragraph("", body_style)]

cover_grid = Table([[intro_p, infra_cell]], colWidths=[310, 230])
cover_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(cover_grid)

story.append(Spacer(1, 14))

# Corporate Metadata Table
meta_data = [
    [Paragraph("Corporate Head Office", table_cell_bold), Paragraph("Unit 101, 139/88, Oxford Towers, HAL Old Airport Road, Bengaluru – 560008", table_cell_style)],
    [Paragraph("GSTIN Registration", table_cell_bold), Paragraph("29AAUFM9272M1Z2", table_cell_style)],
    [Paragraph("Official Contact Phone", table_cell_bold), Paragraph("+91-9044129477 / Sales Engineering Desk", table_cell_style)],
    [Paragraph("Email Enquiries", table_cell_bold), Paragraph("sales@miraiflexipack.in", table_cell_style)],
    [Paragraph("Quality Certifications", table_cell_bold), Paragraph("ISO 9001:2015 / ASTM D4727 / IS 2771 / RoHS Compliant", table_cell_style)],
    [Paragraph("Plant Manufacturing", table_cell_bold), Paragraph("Automated Corrugation Lines, Co-Ex Extrusion, Rotary Die-Cutting, Epoxy Works", table_cell_style)]
]
t_meta = Table(meta_data, colWidths=[140, 400])
t_meta.setStyle(TableStyle([
    ('ROWBACKGROUNDS', (0,0), (-1,-1), [colors.white, light_bg]),
    ('BOX', (0,0), (-1,-1), 0.5, colors.HexColor("#e2e8f0")),
    ('PADDING', (0,0), (-1,-1), 5),
    ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
]))
story.append(t_meta)

story.append(Spacer(1, 14))
story.append(Paragraph("Enterprise Clients & Packaging Deployment Matrix", h2_style))

# Featured Enterprise Clients Table
client_data = [
    [Paragraph("Client Brand", table_header_style), Paragraph("Industry Sector", table_header_style), Paragraph("Packaging Solution Deployed", table_header_style)],
    [Paragraph("PUMA India", table_cell_bold), Paragraph("Apparel & Footwear", table_cell_style), Paragraph("Custom RSC Master Cartons + 60µ Co-Ex Mailer Bags", table_cell_style)],
    [Paragraph("Ashok Leyland", table_cell_bold), Paragraph("Automotive OEM", table_cell_style), Paragraph("7-Ply Heavy Duty Export Boxes + 29µ Stretch Film", table_cell_style)],
    [Paragraph("Swiss Beauty", table_cell_bold), Paragraph("Cosmetics & Care", table_cell_style), Paragraph("White Duplex Mailers + 10mm Air Bubble Cushioning", table_cell_style)],
    [Paragraph("Urban Company", table_cell_bold), Paragraph("Home Services", table_cell_style), Paragraph("Die-Cut Technician Kits + Laser Security Seals", table_cell_style)],
    [Paragraph("Zepto", table_cell_bold), Paragraph("Quick Commerce", table_cell_style), Paragraph("Express Courier Flyers + Polypropylene Picking Totes", table_cell_style)],
    [Paragraph("Haldiram's", table_cell_bold), Paragraph("FMCG & Food", table_cell_style), Paragraph("Moisture-Barrier Outer Cartons + Branded BOPP Tapes", table_cell_style)],
    [Paragraph("Aditya Birla Fashion", table_cell_bold), Paragraph("Multi-Brand Retail", table_cell_style), Paragraph("60µ POD Courier Flyers + 5-Ply Master Shippers", table_cell_style)],
    [Paragraph("Blackberrys Menswear", table_cell_bold), Paragraph("Men's Apparel", table_cell_style), Paragraph("Self-Locking E-Com Mailers + Wardrobe Master Cartons", table_cell_style)]
]
t_client = Table(client_data, colWidths=[120, 130, 290])
t_client.setStyle(TableStyle(clean_table_style))
story.append(t_client)

story.append(PageBreak())

# ==================== PAGE 2: CORRUGATED CARTONS & COURIER BAGS WITH REAL IMAGES ====================
story.append(Paragraph("1. Heavy-Duty Corrugated Cartons & Die-Cut Boxes", h1_style))

box_desc = Paragraph(
    "Engineered with high-BF virgin & semi-virgin kraft paper liners. Suitable for multi-tier palletized storage and overseas export freight. Features B, C, E, BC, and AAA corrugation flutes for maximum stack load capability.",
    body_style
)

box_img = get_safe_image("images/corrugated_box.jpg", max_w=200, max_h=120)
if box_img:
    box_img_cell = [
        box_img,
        Paragraph("<b>Fig 2.1:</b> Heavy-Duty 5-Ply Corrugated Shipping Cartons with Multi-Color Flexo Printing", caption_style)
    ]
else:
    box_img_cell = [Paragraph("", body_style)]

# Table Specs for Boxes
box_specs = [
    [Paragraph("Parameter", table_header_style), Paragraph("Technical Specifications", table_header_style)],
    [Paragraph("Ply Construction", table_cell_bold), Paragraph("2-Ply Rolls, 3-Ply, 5-Ply, 7-Ply Heavy Duty, Octabins", table_cell_style)],
    [Paragraph("Paper Grammage", table_cell_bold), Paragraph("120 GSM to 350 GSM Kraft / White Duplex Liners (16–35 BF)", table_cell_style)],
    [Paragraph("Flute Profiles", table_cell_bold), Paragraph("B-Flute (3mm), C-Flute (4mm), E-Flute (1.5mm), BC Dual (7mm)", table_cell_style)],
    [Paragraph("Box Styles", table_cell_bold), Paragraph("RSC, Full Overlap (FOL), Self-Locking Die-Cut, Telescopic", table_cell_style)]
]
t_box = Table(box_specs, colWidths=[110, 210])
t_box.setStyle(TableStyle(clean_table_style))

sec1_left = [box_desc, Spacer(1, 6), t_box]
sec1_grid = Table([[sec1_left, box_img_cell]], colWidths=[330, 210])
sec1_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec1_grid)

story.append(Spacer(1, 18))

story.append(Paragraph("2. Tamper-Evident Co-Ex Courier Bags & Poly Mailers", h1_style))

bag_desc = Paragraph(
    "Multi-layer co-extruded polyethylene mailers featuring high-tack hot-melt permanent self-adhesive lip. Designed with destructive seal lip for 100% tamper evidence during e-commerce & quick-commerce transit.",
    body_style
)

bag_img = get_safe_image("images/courier_bag.jpg", max_w=200, max_h=120)
if bag_img:
    bag_img_cell = [
        bag_img,
        Paragraph("<b>Fig 2.2:</b> Co-Ex Courier Bags with Transparent Waybill POD Jacket & Security Adhesive", caption_style)
    ]
else:
    bag_img_cell = [Paragraph("", body_style)]

bag_specs = [
    [Paragraph("Parameter", table_header_style), Paragraph("Technical Specifications", table_header_style)],
    [Paragraph("Film Thickness", table_cell_bold), Paragraph("40 Micron to 120 Micron Co-Extruded Polyethylene", table_cell_style)],
    [Paragraph("Closure System", table_cell_bold), Paragraph("Hot-Melt Security Adhesive Strip with Destructive Lip", table_cell_style)],
    [Paragraph("Add-On Features", table_cell_bold), Paragraph("Clear POD Jacket, Barcode Printing, Bubble Cushioning", table_cell_style)],
    [Paragraph("Available Sizes", table_cell_bold), Paragraph("6x8\", 8x10\", 10x12\", 12x14\", 14x18\", 18x22\", Custom Sizes", table_cell_style)]
]
t_bag = Table(bag_specs, colWidths=[110, 210])
t_bag.setStyle(TableStyle(clean_table_style))

sec2_left = [bag_desc, Spacer(1, 6), t_bag]
sec2_grid = Table([[sec2_left, bag_img_cell]], colWidths=[330, 210])
sec2_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec2_grid)

story.append(PageBreak())

# ==================== PAGE 3: TAPES, HONEYCOMB & BUBBLE WRAP WITH REAL IMAGES ====================
story.append(Paragraph("3. Industrial Printed BOPP Tapes & Security Sealing", h1_style))

tape_desc = Paragraph(
    "High-tensile biaxially oriented polypropylene (BOPP) tapes coated with water-based acrylic or synthetic hot-melt adhesive. Customized with rotogravure logo printing for brand identity & theft prevention.",
    body_style
)

tape_img = get_safe_image("images/bopp_tape_rolls.jpg", max_w=200, max_h=120)
if tape_img:
    tape_img_cell = [
        tape_img,
        Paragraph("<b>Fig 3.1:</b> Heavy-Duty Industrial BOPP Packaging Tape Rolls & Custom Printed Security Tapes", caption_style)
    ]
else:
    tape_img_cell = [Paragraph("", body_style)]

tape_specs = [
    [Paragraph("Specification", table_header_style), Paragraph("BOPP Tape Parameters", table_header_style)],
    [Paragraph("Total Thickness", table_cell_bold), Paragraph("38 Micron to 65 Micron (Film + Adhesive Layer)", table_cell_style)],
    [Paragraph("Width & Length", table_cell_bold), Paragraph("24mm, 48mm (2\"), 72mm (3\") / 50m to 1000m Machine Rolls", table_cell_style)],
    [Paragraph("Adhesive Type", table_cell_bold), Paragraph("High-Tack Acrylic / Hot-Melt (-10°C to +60°C Operating Range)", table_cell_style)],
    [Paragraph("Branding", table_cell_bold), Paragraph("Up to 3-Color High-Resolution Rotogravure Logo & Caution Print", table_cell_style)]
]
t_tape = Table(tape_specs, colWidths=[110, 210])
t_tape.setStyle(TableStyle(clean_table_style))

sec3_left = [tape_desc, Spacer(1, 6), t_tape]
sec3_grid = Table([[sec3_left, tape_img_cell]], colWidths=[330, 210])
sec3_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec3_grid)

story.append(Spacer(1, 18))

story.append(Paragraph("4. Air Bubble Rolls & Eco Honeycomb Packaging Paper", h1_style))

cushion_desc = Paragraph(
    "High-shock protective packaging including 2/3-layer polyethylene air bubble rolls and 100% recyclable expandable honeycomb kraft paper. Replaces plastic wrap with sustainable 3D interlocking protection.",
    body_style
)

cushion_img = get_safe_image("images/bubble_wrap.jpg", max_w=200, max_h=120)
if cushion_img:
    cushion_img_cell = [
        cushion_img,
        Paragraph("<b>Fig 3.2:</b> Multi-Layer Shock-Absorbing Air Bubble Rolls & ESD Anti-Static Pink Wrap", caption_style)
    ]
else:
    cushion_img_cell = [Paragraph("", body_style)]

cushion_specs = [
    [Paragraph("Cushion Type", table_header_style), Paragraph("Technical Specifications", table_header_style)],
    [Paragraph("Air Bubble Rolls", table_cell_bold), Paragraph("10mm & 25mm Jumbo Bubble Sizes / 40 to 150 GSM Density", table_cell_style)],
    [Paragraph("Honeycomb Paper", table_cell_bold), Paragraph("80 GSM Kraft Paper, 3D Hexagonal Expansion, 100% Recyclable", table_cell_style)],
    [Paragraph("ESD Pink Bubble", table_cell_bold), Paragraph("Anti-Static Resistivity (10^9 to 10^11 Ω/sq) for Electronics", table_cell_style)],
    [Paragraph("Stretch Film", table_cell_bold), Paragraph("23 Micron Hand & Machine Pallet Wrap (300% Stretchability)", table_cell_style)]
]
t_cushion = Table(cushion_specs, colWidths=[110, 210])
t_cushion.setStyle(TableStyle(clean_table_style))

sec4_left = [cushion_desc, Spacer(1, 6), t_cushion]
sec4_grid = Table([[sec4_left, cushion_img_cell]], colWidths=[330, 210])
sec4_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec4_grid)

story.append(PageBreak())

# ==================== PAGE 4: PLASTIC CRATES & EPOXY FLOORING WITH REAL IMAGES ====================
story.append(Paragraph("5. HDPE Industrial Plastic Crates & PP Flute Totes", h1_style))

crate_desc = Paragraph(
    "Heavy-duty 100% virgin HDPE stackable storage crates, nestable containers, and PP flute totes engineered for automotive components, pharma distribution, and automated warehouse picking lines.",
    body_style
)

crate_img = get_safe_image("images/plastic_crate.jpg", max_w=200, max_h=120)
if crate_img:
    crate_img_cell = [
        crate_img,
        Paragraph("<b>Fig 4.1:</b> High-Density HDPE Industrial Storage Crates with Reinforced Stacking Lugs", caption_style)
    ]
else:
    crate_img_cell = [Paragraph("", body_style)]

crate_specs = [
    [Paragraph("Product Line", table_header_style), Paragraph("Technical Features & Load Ratings", table_header_style)],
    [Paragraph("HDPE Storage Crates", table_cell_bold), Paragraph("600x400x325mm, 500x350x275mm (Stack Load: up to 250 kg)", table_cell_style)],
    [Paragraph("Plastic Pallets", table_cell_bold), Paragraph("1200x1000x150mm Heavy-Duty (Dynamic: 1.5 Ton | Static: 5 Ton)", table_cell_style)],
    [Paragraph("PP Flute Totes", table_cell_bold), Paragraph("2.0mm to 10.0mm Conductive ESD Polypropylene Sheets (50+ Trips)", table_cell_style)]
]
t_crate = Table(crate_specs, colWidths=[110, 210])
t_crate.setStyle(TableStyle(clean_table_style))

sec5_left = [crate_desc, Spacer(1, 6), t_crate]
sec5_grid = Table([[sec5_left, crate_img_cell]], colWidths=[330, 210])
sec5_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec5_grid)

story.append(Spacer(1, 18))

story.append(Paragraph("6. Industrial Epoxy Resin Flooring & ESD Coatings", h1_style))

floor_desc = Paragraph(
    "High-gloss resinous epoxy flooring, polyurethane mortar, and ESD conductive flooring designed for industrial manufacturing plants, cleanrooms, IT server facilities, and warehouse heavy forklift traffic.",
    body_style
)

floor_img = get_safe_image("images/epoxy_flooring.jpg", max_w=200, max_h=120)
if floor_img:
    floor_img_cell = [
        floor_img,
        Paragraph("<b>Fig 4.2:</b> Seamless High-Gloss Industrial Epoxy Flooring Execution & 5S Line Marking", caption_style)
    ]
else:
    floor_img_cell = [Paragraph("", body_style)]

floor_specs = [
    [Paragraph("Execution Service", table_header_style), Paragraph("Specification & Performance Metric", table_header_style)],
    [Paragraph("Resinous Epoxy Coating", table_cell_bold), Paragraph("1mm to 4mm Self-Leveling Resinous Coating / Polyurethane", table_cell_style)],
    [Paragraph("ESD Conductive Floor", table_cell_bold), Paragraph("10^6 to 10^9 Ω Grounded Grid Resistance (ANSI/ESD S20.20)", table_cell_style)],
    [Paragraph("Turnkey Office Fitout", table_cell_bold), Paragraph("Glass Partitions, Executive Cabins, Acoustic Ceiling & Racks", table_cell_style)]
]
t_floor = Table(floor_specs, colWidths=[110, 210])
t_floor.setStyle(TableStyle(clean_table_style))

sec6_left = [floor_desc, Spacer(1, 6), t_floor]
sec6_grid = Table([[sec6_left, floor_img_cell]], colWidths=[330, 210])
sec6_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec6_grid)

story.append(PageBreak())

# ==================== PAGE 5: QUALITY CONTROL, ORDERING SLA & QR SCANNER ====================
story.append(Paragraph("7. Quality Control Laboratory & SLA Procurement Matrix", h1_style))

qc_desc = Paragraph(
    "Every batch manufactured at Mirai Packaging undergoes rigorous testing in our in-house QC laboratory. Tests include Bursting Factor (BF) evaluation, Box Compression Test (BCT), Cobb moisture test, and drop resistance analysis.",
    body_style
)

qc_img = get_safe_image("images/quality_testing.jpg", max_w=200, max_h=120)
if qc_img:
    qc_img_cell = [
        qc_img,
        Paragraph("<b>Fig 5.1:</b> In-House Quality Testing Laboratory & Bursting Factor Compression Equipment", caption_style)
    ]
else:
    qc_img_cell = [Paragraph("", body_style)]

order_info = [
    [Paragraph("Parameter", table_header_style), Paragraph("Capability / SLA Standard", table_header_style)],
    [Paragraph("Minimum Order Quantity (MOQ)", table_cell_bold), Paragraph("Custom Boxes: 500 Units | Plain Boxes: 100 Units | Tapes: 1 Box (72 Rolls)", table_cell_style)],
    [Paragraph("Sample Dispatch SLA", table_cell_bold), Paragraph("Free technical sample dispatch within 24–48 hours across South India", table_cell_style)],
    [Paragraph("Logistics Network", table_cell_bold), Paragraph("Dedicated fleet serving Bengaluru, Chennai, Hyderabad, Hosur, Pune & NCR", table_cell_style)]
]
t_order = Table(order_info, colWidths=[110, 210])
t_order.setStyle(TableStyle(clean_table_style))

sec7_left = [qc_desc, Spacer(1, 6), t_order]
sec7_grid = Table([[sec7_left, qc_img_cell]], colWidths=[330, 210])
sec7_grid.setStyle(TableStyle([
    ('VALIGN', (0,0), (-1,-1), 'TOP'),
    ('PADDING', (0,0), (-1,-1), 0),
]))
story.append(sec7_grid)

story.append(Spacer(1, 16))

# QR Code Banner Block
if os.path.exists(qr_path):
    qr_flowable = RLImage(qr_path, width=110, height=110)
    qr_cell = [
        [qr_flowable, Paragraph(
            "<b>SCAN QR CODE TO DOWNLOAD DIGITAL MASTER CATALOGUE</b><br/><br/>"
            "Scan this QR code with any smartphone camera to open and save our complete 2026 Master Specification Catalogue PDF on your device.<br/><br/>"
            "<b>Direct Web Link:</b> https://raw.githubusercontent.com/vededoply-cpu/project/main/pdf/Mirai_Packaging_Master_Catalogue.pdf",
            body_style
        )]
    ]
    t_qr = Table(qr_cell, colWidths=[130, 410])
    t_qr.setStyle(TableStyle([
        ('BACKGROUND', (0,0), (-1,-1), light_bg),
        ('BOX', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
        ('PADDING', (0,0), (-1,-1), 10),
        ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
    ]))
    story.append(t_qr)

story.append(Spacer(1, 16))

# Final Contact Box
story.append(Paragraph("FOR IMMEDIATE BULK QUOTATIONS & PLANT SURVEYS", h2_style))
contact_box = [
    [Paragraph("<b>Mirai Packaging LLP Sales Office & Works:</b><br/>"
               "Unit 101, 139/88, Oxford Towers, HAL Old Airport Road, Bengaluru – 560008, Karnataka, India<br/>"
               "<b>Phone:</b> +91-9044129477 | <b>Email:</b> sales@miraiflexipack.in | <b>Web:</b> www.miraiflexipack.in", body_style)]
]
t_contact = Table(contact_box, colWidths=[540])
t_contact.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,-1), colors.HexColor("#fff4ee")),
    ('BOX', (0,0), (-1,-1), 1, orange_brand),
    ('PADDING', (0,0), (-1,-1), 10),
]))
story.append(t_contact)

# Build PDF
doc.build(story, canvasmaker=NumberedCanvas)
print(f"Masterpiece PDF Catalogue regenerated cleanly without harsh table grid lines: {pdf_path}")
