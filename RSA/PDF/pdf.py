from PyPDF2 import PdfWriter, PdfReader

# buat objek pdf writer
out = PdfWriter()

# buka file pdf asli
file = PdfReader("C:/TUGAS SKD/IOT THINGER.IO KELOMPOK 3.pdf")

# identifikasi total halaman file
num = len(file.pages)

# program membaca setiap halaman file sesuai halaman yang diidentifikasi
for idx in range(num):
    page = file.pages[idx]
    out.add_page(page)

# masukkan password enkripsi
password = "pass"

# enkripsi masing-masing halaman
out.encrypt(password)

# buka file enkripsi "myfile_encrypted.pdf"
with open("C:/TUGAS SKD/IOT THINGER.IO KELOMPOK 3.pdf", "wb") as f:
    # simpan pdf
    out.write(f)