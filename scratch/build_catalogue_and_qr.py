import os
import qrcode
from PIL import Image

BASE_DIR = "e:/Xampp/htdocs/packingwebsite"
os.makedirs(f"{BASE_DIR}/pdf", exist_ok=True)
os.makedirs(f"{BASE_DIR}/images", exist_ok=True)

pdf_path = f"{BASE_DIR}/pdf/Mirai_Packaging_Master_Catalogue.pdf"
qr_path = f"{BASE_DIR}/images/catalogue_qr_code.png"

# 1. Generate High-Res QR Code for Master Catalogue
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

# 2. Run Page Patch Script
import subprocess
patch_script = os.path.join(BASE_DIR, 'scratch/patch_all_pdf_pages_v2.py')
if os.path.exists(patch_script):
    subprocess.run(["python", patch_script], check=True)
else:
    print("Warning: patch_all_pdf_pages_v2.py not found.")
