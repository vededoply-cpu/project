import os
import qrcode
from PIL import Image
from reportlab.lib.pagesizes import letter
from reportlab.lib import colors
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, Image as RLImage, PageBreak, HRFlowable
from reportlab.pdfgen import canvas

# Ensure directories exist
os.makedirs("e:/Xampp/htdocs/packingwebsite/pdf", exist_ok=True)
os.makedirs("e:/Xampp/htdocs/packingwebsite/images", exist_ok=True)

pdf_path = "e:/Xampp/htdocs/packingwebsite/pdf/Mirai_Packaging_Master_Catalogue.pdf"
qr_path = "e:/Xampp/htdocs/packingwebsite/images/catalogue_qr_code.png"

# 1. Generate High-Res QR Code
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_H,
    box_size=10,
    border=2,
)
# QR URL
catalogue_url = "https://miraiflexipack.in/pdf/Mirai_Packaging_Master_Catalogue.pdf"
qr.add_data(catalogue_url)
qr.make(fit=True)

qr_img = qr.make_image(fill_color="#071e3d", back_color="#ffffff")
qr_img.save(qr_path)
print(f"QR Code generated at: {qr_path}")

# 2. Numbered Canvas Class for Page X of Y Footer Header
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
        
        # Draw running header on pages > 1
        if self._pageNumber > 1:
            self.setFont("Helvetica-Bold", 8)
            self.setFillColor(colors.HexColor("#071e3d"))
            self.drawString(36, 762, "MIRAI PACKAGING LLP  |  MASTER PRODUCT CATALOGUE")
            self.setFont("Helvetica", 8)
            self.setFillColor(colors.HexColor("#64748b"))
            self.drawRightString(576, 762, "ISO 9001:2015 CERTIFIED")
            self.setStrokeColor(colors.HexColor("#cbd5e1"))
            self.setLineWidth(0.5)
            self.line(36, 754, 576, 754)

        # Draw running footer on all pages
        self.setStrokeColor(colors.HexColor("#cbd5e1"))
        self.setLineWidth(0.5)
        self.line(36, 45, 576, 45)
        
        self.setFont("Helvetica", 8)
        self.setFillColor(colors.HexColor("#64748b"))
        self.drawString(36, 30, "sales@miraiflexipack.in  |  +91-9044129477  |  GSTIN: 29AAUFM9272M1Z2")
        
        page_str = f"Page {self._pageNumber} of {page_count}"
        self.drawRightString(576, 30, page_str)
        self.restoreState()

# 3. Build Multi-Page ReportLab PDF
doc = SimpleDocTemplate(
    pdf_path,
    pagesize=letter,
    leftMargin=36,
    rightMargin=36,
    topMargin=54,
    bottomMargin=54
)

styles = getSampleStyleSheet()

# Custom Brand Palette
navy_dark = colors.HexColor("#071e3d")
orange_brand = colors.HexColor("#eb5e28")
slate_gray = colors.HexColor("#334155")
light_bg = colors.HexColor("#f8fafc")

# Paragraph Styles
title_style = ParagraphStyle(
    'CoverTitle',
    fontName='Helvetica-Bold',
    fontSize=26,
    leading=32,
    textColor=navy_dark,
    alignment=0,
    spaceAfter=8
)

subtitle_style = ParagraphStyle(
    'CoverSubtitle',
    fontName='Helvetica-Bold',
    fontSize=13,
    leading=18,
    textColor=orange_brand,
    alignment=0,
    spaceAfter=15
)

h1_style = ParagraphStyle(
    'H1Heading',
    fontName='Helvetica-Bold',
    fontSize=16,
    leading=20,
    textColor=navy_dark,
    spaceBefore=14,
    spaceAfter=8
)

h2_style = ParagraphStyle(
    'H2Heading',
    fontName='Helvetica-Bold',
    fontSize=12,
    leading=16,
    textColor=orange_brand,
    spaceBefore=10,
    spaceAfter=6
)

body_style = ParagraphStyle(
    'BodyTextCustom',
    fontName='Helvetica',
    fontSize=9.5,
    leading=14,
    textColor=slate_gray,
    spaceAfter=8
)

table_header_style = ParagraphStyle(
    'TableHeader',
    fontName='Helvetica-Bold',
    fontSize=9,
    leading=11,
    textColor=colors.white,
    alignment=0
)

table_cell_style = ParagraphStyle(
    'TableCell',
    fontName='Helvetica',
    fontSize=8.5,
    leading=11,
    textColor=slate_gray
)

table_cell_bold = ParagraphStyle(
    'TableCellBold',
    fontName='Helvetica-Bold',
    fontSize=8.5,
    leading=11,
    textColor=navy_dark
)

story = []

# ==================== PAGE 1: COVER PAGE ====================
logo_path = "e:/Xampp/htdocs/packingwebsite/images/logo.png"
if os.path.exists(logo_path):
    try:
        story.append(RLImage(logo_path, width=140, height=48))
    except Exception as e:
        print("Logo loading warning:", e)

story.append(Spacer(1, 15))
story.append(Paragraph("MIRAI PACKAGING LLP", title_style))
story.append(Paragraph("MASTER INDUSTRIAL PACKAGING & SPECIFICATIONS CATALOGUE", subtitle_style))
story.append(HRFlowable(width="100%", thickness=3, color=orange_brand, spaceBefore=4, spaceAfter=15))

story.append(Paragraph(
    "Mirai Packaging LLP is a premier manufacturer and converter of heavy-duty corrugated cartons, co-extruded courier flyers, industrial BOPP sealing tapes, sustainable honeycomb cushioning, storage racking systems, HDPE plastic crates, and industrial epoxy flooring solutions. Operating from Bengaluru, we service leading enterprise supply chains across India with zero-defect quality and guaranteed burst-strength specifications.",
    body_style
))

story.append(Spacer(1, 10))

# Key Corporate Metadata Table
meta_data = [
    [Paragraph("Corporate Head Office", table_cell_bold), Paragraph("1091, 8th Cross Road, Jai Marathi Nagar, Bengaluru – 560086", table_cell_style)],
    [Paragraph("GSTIN Registration", table_cell_bold), Paragraph("29AAUFM9272M1Z2", table_cell_style)],
    [Paragraph("Official Contact Phone", table_cell_bold), Paragraph("+91-9044129477 / Sales Desk", table_cell_style)],
    [Paragraph("Email Enquiries", table_cell_bold), Paragraph("sales@miraiflexipack.in", table_cell_style)],
    [Paragraph("Quality Assurance", table_cell_bold), Paragraph("ISO 9001:2015 / ASTM D4727 / IS 2771 Standard Compliance", table_cell_style)],
    [Paragraph("Core Plant Facilities", table_cell_bold), Paragraph("Automated Corrugation Line, Co-Ex Extrusion, Rotary Die-Cutting, Epoxy Application", table_cell_style)]
]
t_meta = Table(meta_data, colWidths=[150, 390])
t_meta.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,-1), light_bg),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#e2e8f0")),
    ('PADDING', (0,0), (-1,-1), 6),
    ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
]))
story.append(t_meta)

story.append(Spacer(1, 20))
story.append(Paragraph("Trusted Packaging Partner to India's Enterprise Leaders", h2_style))

# Featured Enterprise Clients Table
client_data = [
    [Paragraph("Client Brand", table_header_style), Paragraph("Industry Sector", table_header_style), Paragraph("Packaging Solution Deployed", table_header_style)],
    [Paragraph("PUMA India", table_cell_bold), Paragraph("Apparel & Footwear", table_cell_style), Paragraph("Custom RSC Master Cartons + 60µ Co-Ex Mailer Bags", table_cell_style)],
    [Paragraph("Ashok Leyland", table_cell_bold), Paragraph("Automotive OEM", table_cell_style), Paragraph("7-Ply Heavy Duty Export Boxes + 29µ Stretch Film", table_cell_style)],
    [Paragraph("Swiss Beauty", table_cell_bold), Paragraph("Cosmetics & Care", table_cell_style), Paragraph("White Duplex Mailers + 10mm Air Bubble Cushioning", table_cell_style)],
    [Paragraph("Urban Company", table_cell_bold), Paragraph("Home Services", table_cell_style), Paragraph("Die-Cut Technician Kits + Laser Security Seals", table_cell_style)],
    [Paragraph("Zepto", table_cell_bold), Paragraph("Quick Commerce", table_cell_style), Paragraph("Express Courier Flyers + Polypropylene Picking Totes", table_cell_style)],
    [Paragraph("Haldiram's", table_cell_bold), Paragraph("FMCG & Food", table_cell_style), Paragraph("Moisture-Barrier Outer Cartons + Branded BOPP Tapes", table_cell_style)],
    [Paragraph("Aditya Birla Fashion (ABFRL)", table_cell_bold), Paragraph("Multi-Brand Retail", table_cell_style), Paragraph("60µ POD Courier Flyers + 5-Ply Master Shippers", table_cell_style)],
    [Paragraph("Blackberrys Menswear", table_cell_bold), Paragraph("Men's Apparel", table_cell_style), Paragraph("Self-Locking E-Com Mailers + Wardrobe Master Cartons", table_cell_style)]
]
t_client = Table(client_data, colWidths=[130, 130, 280])
t_client.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
    ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
]))
story.append(t_client)

story.append(PageBreak())

# ==================== PAGE 2: CORRUGATED BOXES & COURIER BAGS ====================
story.append(Paragraph("1. Master Corrugated Cartons & Die-Cut Boxes", h1_style))
story.append(Paragraph("Manufactured using high-BF virgin and semi-virgin kraft paper liners with precision corrugation flute profiles (B, C, E, BC, and AAA flute). Engineered for multi-tier warehouse pallet stacking and export shipments.", body_style))

box_specs = [
    [Paragraph("Parameter", table_header_style), Paragraph("Technical Specifications", table_header_style), Paragraph("Standard Reference", table_header_style)],
    [Paragraph("Ply Construction", table_cell_bold), Paragraph("2-Ply (Rolls), 3-Ply, 5-Ply, 7-Ply, 9-Ply Heavy Duty", table_cell_style), Paragraph("IS 2771 / ASTM D4727", table_cell_style)],
    [Paragraph("Paper Grammage (GSM)", table_cell_bold), Paragraph("120 GSM to 350 GSM Kraft / White Duplex Liners", table_cell_style), Paragraph("High Burst Factor (16BF – 35BF)", table_cell_style)],
    [Paragraph("Flute Profiles", table_cell_bold), Paragraph("B-Flute (3mm), C-Flute (4mm), E-Flute (1.5mm), BC (7mm)", table_cell_style), Paragraph("Optimal Rigidity & Stacking", table_cell_style)],
    [Paragraph("Printing Capability", table_cell_bold), Paragraph("Up to 4-Color Flexographic Printing / High-Gloss Offset", table_cell_style), Paragraph("Eco-Friendly Water-Based Inks", table_cell_style)],
    [Paragraph("Box Styles", table_cell_bold), Paragraph("RSC, Full Overlap (FOL), Die-Cut Self-Lock, Fruit Trays", table_cell_style), Paragraph("FEFCO Standard Designs", table_cell_style)]
]
t_box = Table(box_specs, colWidths=[140, 240, 160])
t_box.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_box)

story.append(Spacer(1, 15))

story.append(Paragraph("2. Tamper-Evident Co-Ex Courier Bags & Poly Mailers", h1_style))
story.append(Paragraph("Multi-layer co-extruded polyethylene courier bags with high-strength hot-melt permanent self-adhesive seal strip. Tamper-evident closure ensures tears occur upon opening attempt, guaranteeing dispatch security.", body_style))

bag_specs = [
    [Paragraph("Parameter", table_header_style), Paragraph("Technical Specifications", table_header_style), Paragraph("Industry Application", table_header_style)],
    [Paragraph("Film Thickness", table_cell_bold), Paragraph("40 Micron to 120 Micron Co-Extruded Polyethylene", table_cell_style), Paragraph("E-Commerce Dispatch & Logistics", table_cell_style)],
    [Paragraph("Closure System", table_cell_bold), Paragraph("Permanent Hot-Melt Adhesive Strip with Destructive Lip", table_cell_style), Paragraph("100% Tamper Evident Guarantee", table_cell_style)],
    [Paragraph("Features Available", table_cell_bold), Paragraph("Clear POD Jacket Pockets, Barcode Printing, Bubble Lining", table_cell_style), Paragraph("Waybill & Return Labeling", table_cell_style)],
    [Paragraph("Standard Sizes", table_cell_bold), Paragraph("6x8\", 8x10\", 10x12\", 12x14\", 14x18\", 18x22\", Custom", table_cell_style), Paragraph("Fits Small Items to Apparel", table_cell_style)]
]
t_bag = Table(bag_specs, colWidths=[140, 240, 160])
t_bag.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_bag)

story.append(PageBreak())

# ==================== PAGE 3: TAPES, CUSHIONING & STRETCH FILM ====================
story.append(Paragraph("3. Industrial BOPP Sealing Tapes & Security Tapes", h1_style))
story.append(Paragraph("High-tensile biaxially oriented polypropylene (BOPP) film coated with aggressive water-based acrylic or hot-melt adhesive. Engineered for automated carton sealing and tamper-proof security identification.", body_style))

tape_specs = [
    [Paragraph("Specification", table_header_style), Paragraph("BOPP Tape Parameters", table_header_style), Paragraph("Performance Metric", table_header_style)],
    [Paragraph("Total Thickness", table_cell_bold), Paragraph("38 Micron to 65 Micron (Film + Adhesive Layer)", table_cell_style), Paragraph("High Shear Resistance", table_cell_style)],
    [Paragraph("Roll Width / Length", table_cell_bold), Paragraph("24mm, 48mm (2\"), 72mm (3\") / 50m to 1000m Industrial Rolls", table_cell_style), Paragraph("Manual & Machine Applicators", table_cell_style)],
    [Paragraph("Adhesive Type", table_cell_bold), Paragraph("High-Tack Water Based Acrylic / Hot Melt Synthetic Rubber", table_cell_style), Paragraph("Temperature Range: -10°C to +60°C", table_cell_style)],
    [Paragraph("Custom Branding", table_cell_bold), Paragraph("Up to 3-Color Rotogravure Printed Logo & Caution Warnings", table_cell_style), Paragraph("Brand Protection & Anti-Theft", table_cell_style)]
]
t_tape = Table(tape_specs, colWidths=[140, 240, 160])
t_tape.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_tape)

story.append(Spacer(1, 15))

story.append(Paragraph("4. Sustainable Honeycomb Paper & Air Bubble Rolls", h1_style))
story.append(Paragraph("100% recyclable virgin kraft expanding honeycomb paper rolls and 2/3-layer laminated barrier air bubble rolls designed to replace plastic transit cushioning for delicate glass, electronics, and cosmetics.", body_style))

cushion_specs = [
    [Paragraph("Cushion Type", table_header_style), Paragraph("Technical Features", table_header_style), Paragraph("Eco & Protective Benefit", table_header_style)],
    [Paragraph("Honeycomb Paper", table_cell_bold), Paragraph("80 GSM Kraft Paper, 3D Interlocking Hexagonal Expansion", table_cell_style), Paragraph("100% Biodegradable Plastic Alternative", table_cell_style)],
    [Paragraph("Air Bubble Rolls", table_cell_bold), Paragraph("10mm & 25mm Jumbo Bubble Sizes / 40 to 150 GSM", table_cell_style), Paragraph("High Shock Absorption Transit Wrap", table_cell_style)],
    [Paragraph("ESD Pink Bubble", table_cell_bold), Paragraph("Anti-Static Surface Resistivity (10^9 to 10^11 ohms/sq)", table_cell_style), Paragraph("Sensitive PCB & Semiconductor Safe", table_cell_style)]
]
t_cushion = Table(cushion_specs, colWidths=[140, 240, 160])
t_cushion.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_cushion)

story.append(PageBreak())

# ==================== PAGE 4: PLASTIC CRATES, RACKS & EPOXY ====================
story.append(Paragraph("5. Heavy-Duty HDPE Plastic Crates & Storage Pallets", h1_style))
story.append(Paragraph("100% virgin HDPE stackable industrial storage crates with locking lids and heavy-duty steel reinforced plastic pallets for closed-loop automotive and warehouse logistics.", body_style))

crate_specs = [
    [Paragraph("Product Range", table_header_style), Paragraph("Specifications & Dimensions", table_header_style), Paragraph("Load & Durability Rating", table_header_style)],
    [Paragraph("Storage Crates", table_cell_bold), Paragraph("600x400x325mm, 500x350x275mm with Hinged/Snap Lids", table_cell_style), Paragraph("Stack Load: Up to 250 kg Total Stack", table_cell_style)],
    [Paragraph("Plastic Pallets", table_cell_bold), Paragraph("1200x1000x150mm Standard ISO Pallets (Non-Reversible / Reversible)", table_cell_style), Paragraph("Dynamic: 1.5 Ton | Static: 5 Ton", table_cell_style)],
    [Paragraph("PP Flute Totes", table_cell_bold), Paragraph("2.0mm to 10.0mm Polypropylene Hollow Sheet Conductive ESD Totes", table_cell_style), Paragraph("50+ Trip Reusable Lifespan", table_cell_style)]
]
t_crate = Table(crate_specs, colWidths=[140, 240, 160])
t_crate.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_crate)

story.append(Spacer(1, 15))

story.append(Paragraph("6. Industrial Epoxy Flooring & Turnkey Fitout Execution", h1_style))
story.append(Paragraph("High-gloss resinous epoxy, ESD conductive flooring, and heavy-duty self-leveling floor hardeners for industrial plant floors, IT server rooms, and warehouse 5S safety line marking.", body_style))

flooring_specs = [
    [Paragraph("Execution Service", table_header_style), Paragraph("Technical Specification", table_header_style), Paragraph("Compliance Standard", table_header_style)],
    [Paragraph("Factory Floor Epoxy", table_cell_bold), Paragraph("1mm to 4mm Self-Leveling Resinous Coating / Polyurethane", table_cell_style), Paragraph("Heavy Forklift Traffic Resistant", table_cell_style)],
    [Paragraph("ESD Conductive Floor", table_cell_bold), Paragraph("10^6 to 10^9 ohms Electrical Resistance Grounded Grid", table_cell_style), Paragraph("ANSI/ESD S20.20 Compliant", table_cell_style)],
    [Paragraph("Turnkey Office Fitout", table_cell_bold), Paragraph("Executive Cabins, Glass Partitions, False Ceiling & Racking Infra", table_cell_style), Paragraph("Complete Site Survey & Execution", table_cell_style)]
]
t_floor = Table(flooring_specs, colWidths=[140, 240, 160])
t_floor.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 5),
]))
story.append(t_floor)

story.append(PageBreak())

# ==================== PAGE 5: ORDERING & QR SCANNER ====================
story.append(Paragraph("7. Enterprise Ordering SLA, QC Assurance & Contact Directory", h1_style))
story.append(Paragraph("Mirai Packaging LLP enforces stringent Quality Control testing at every stage—from GSM grammage verification and bursting strength testing to drop tests and adhesion analysis.", body_style))

story.append(Spacer(1, 10))

# Summary Info Table
order_info = [
    [Paragraph("Parameter", table_header_style), Paragraph("Policy / Capability", table_header_style)],
    [Paragraph("Minimum Order Quantity (MOQ)", table_cell_bold), Paragraph("Custom Boxes: 500 Units | Plain Boxes: 100 Units | Tapes: 1 Box (72 Rolls)", table_cell_style)],
    [Paragraph("Sample Dispatch SLA", table_cell_bold), Paragraph("Free technical sample dispatch within 24–48 hours across Bengaluru & South India", table_cell_style)],
    [Paragraph("Pan-India Delivery Network", table_cell_bold), Paragraph("Dedicated logistics fleet servicing Bengaluru, Chennai, Hyderabad, Hosur, Pune, Mumbai, & NCR", table_cell_style)],
    [Paragraph("Testing Laboratory", table_cell_bold), Paragraph("In-house Bursting Factor (BF) Tester, GSM Scale, Box Compression Tester (BCT)", table_cell_style)]
]
t_order = Table(order_info, colWidths=[160, 380])
t_order.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,0), navy_dark),
    ('GRID', (0,0), (-1,-1), 0.5, colors.HexColor("#cbd5e1")),
    ('ROWBACKGROUNDS', (0,1), (-1,-1), [colors.white, light_bg]),
    ('PADDING', (0,0), (-1,-1), 6),
]))
story.append(t_order)

story.append(Spacer(1, 20))

# QR Code Flowable Table
if os.path.exists(qr_path):
    qr_flowable = RLImage(qr_path, width=120, height=120)
    qr_cell = [
        [qr_flowable, Paragraph(
            "<b>SCAN QR CODE TO DOWNLOAD DIGITAL CATALOGUE</b><br/><br/>"
            "Scan this QR code with your mobile smartphone camera to immediately access and download our complete 2026 Master Specification Catalogue on your mobile device.<br/><br/>"
            "<b>Direct Web URL:</b><br/>https://miraiflexipack.in/pdf/Mirai_Packaging_Master_Catalogue.pdf",
            body_style
        )]
    ]
    t_qr = Table(qr_cell, colWidths=[140, 400])
    t_qr.setStyle(TableStyle([
        ('BACKGROUND', (0,0), (-1,-1), light_bg),
        ('GRID', (0,0), (-1,-1), 1, colors.HexColor("#cbd5e1")),
        ('PADDING', (0,0), (-1,-1), 12),
        ('VALIGN', (0,0), (-1,-1), 'MIDDLE'),
    ]))
    story.append(t_qr)

story.append(Spacer(1, 25))

# Final Contact Box
story.append(Paragraph("FOR IMMEDIATE BULK QUOTATIONS & SITE SURVEYS", h2_style))
contact_box = [
    [Paragraph("<b>Mirai Packaging LLP Sales Office & Works:</b><br/>"
               "1091, 8th Cross Road, Jai Marathi Nagar, Bengaluru – 560086, Karnataka, India<br/>"
               "<b>Phone:</b> +91-9044129477 | <b>Email:</b> sales@miraiflexipack.in | <b>Web:</b> www.miraiflexipack.in", body_style)]
]
t_contact = Table(contact_box, colWidths=[540])
t_contact.setStyle(TableStyle([
    ('BACKGROUND', (0,0), (-1,-1), colors.HexColor("#fff4ee")),
    ('BOX', (0,0), (-1,-1), 1.5, orange_brand),
    ('PADDING', (0,0), (-1,-1), 12),
]))
story.append(t_contact)

# Build PDF
doc.build(story, canvasmaker=NumberedCanvas)
print(f"Masterpiece PDF Catalogue generated successfully at: {pdf_path}")
