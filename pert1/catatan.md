Pemrograman Web - Pertemuan 1   
Waktu: 09.00 - 12.00 
website
mempunyai addres seperti facebook.com
untuk uts dan uas mengerjakan project company profile 

html
membuat folder dan file 
analisis md
env
docker-compose yml
index.html
selanjutnya masuk ke terminal untuk mengetik docker compose up -d --build
selanjutnya src yang telah di buat di hapus dan file di dalam docker-compose.yml di ubah 
src yang berada dalam file kita di tambahkan index.html 
setelah itu ke div html membuat file localhost

 Pemrograman Web - Pertemuan 1   
 Waktu: 09.00 - 12.00 

---

    Materi Hari Ini: 

    1. Docker 

-  Apa itu Docker? 
  Docker itu platform untuk membuat, menjalankan serta mengelola sebuah aplikasi dalam container yang ringan serta terisolasi

-  mengapa menggunakan aplikasi Docker? 
  - mempermudah proses deployment aplikasi tanpa kendala kompabilitas.
  - bisa meningkatkan sumberdaya komputasi.
  - pengujian dan pengembangan aplikasi lebih cepet.

-  Analisis 5w 1h buat aplikasi docker: 
  1.  What (Apa):  aplikasi docker itu bisa membuat dan menjalankan dalam container yang terisolasi.
  2.  Why (Kenapa):  Bisa membuat fleksibilitas, deployment lebih gampang bikin mudah suatu pekerjaan.
  3.  Who (Siapa):  Digunakan oleh developer, administrator system, DevOps, dan tim IT yang menagnai aplikasi.
  4.  When (Kapan):  di terapkannya buat proses pengembangan dan pengujian aplikasi.
  5.  Where (Di mana):  umunya bisa di coba di server lokal dan lingkungan pengembangan pribadi.
  6.  How (Gimana):  Docker bisa membuat container yang ada aplikasinya untuk dapat berjalan sendiri .

-  kapan docker bisa di pakai? 
  - Ketika mau memastikan setiap aplikasi dapat berjalan tanpa masalah. 
  - Ketika ingin meningkatkan efisisensi dalam kerja.
  - saat membutuhkan proses deployment yang minim kesalahan.
  
---

    2. Website 

-  Apa itu Website? 
  Website adalah kumpulan halaman yang dapat diakses melalui internet menggunakan browser, di mana setiap halaman dapat saling terhubung melalui tautan.

-  Contoh Website: 
  -  E-Commerce:  bukalapak, Amazon.
  -  Media Sosial:  linkedln, Instagram.
  -  Portal Berita:  BBC, detik.
  -  Edukasi:  Coursera, udacity.
  -  Pemerintahan:  kemendikbud, IRS.gov.

-  Fungsi Website: 
  Website berfungsi untuk sarana informasi dan komunikasi bagi pengguna dengan tampilan yang gampang di akses.

---

    3. Project 

-  Project Pra-UTS: 
  Tiap mahasiswa harus bikin website sesuai tema yang dikasih.

-  Project Akhir: 
  - Bikin website company profile.
  - Fitur dan desain harus sesuai sama analisis awal, termasuk workflow, flowchart, dan use case.
  - Gak boleh copas kode dari orang lain.

---

    4. HTML (HyperText Markup Language) 

-  Apa itu HTML? 
  HTML itu bahasa markup buat ngebangun struktur dan konten halaman web, kayak teks, gambar, video, dan link.

-  Tag Dasar dalam HTML: 
  - `<html>` : Tag utama yang menampung seluruh elemen halaman web.
  - `<head>` : Berisi informasi meta, title, dan link ke file CSS atau script.
  - `<title>` : Menentukan judul halaman yang muncul di tab browser.
  - `<body>` : Berisi semua konten yang ditampilkan di halaman web.
  - `<h1>` - `<h6>` : Heading untuk judul atau subjudul.
  - `<p>` : Paragraf teks.
  - `<a>` : Link ke halaman lain atau sumber eksternal.
  - `<img>` : Menampilkan gambar.
  - `<ul>` dan `<ol>` : List tidak berurutan (unordered) dan berurutan (ordered).
  - `<table>` : Membuat tabel.
  - `<form>` : Formulir untuk input dari user.

---

    5. Konfigurasi Nginx (nginx.conf) 

```nginx
server {
    listen 80; 
    server_name localhost; 
    
    location / { 
        root /usr/share/nginx/html;
        index index.html;
    }
}
```

 Penjelasan Konfigurasi: 
-  server:  Bagian ini nge-set satu virtual server di dalam Nginx, yang memungkinkan satu server fisik bisa nge-host beberapa website atau aplikasi.
-  listen 80;  Nginx bakal dengerin koneksi HTTP di port 80.
-  server_name localhost;  Nama domain atau alamat IP buat akses server.
-  location /  Ngatur gimana Nginx nangkep request ke root URL (`http://localhost/`). Semua request ke root bakal diproses di blok ini.

---

    Kesimpulan 
Di pertemuan ini, kita udah bahas dasar-dasar Docker, konsep website, dan proyek yang bakal dikerjain selama kuliah. Selain itu, kita juga udah kenalan sama HTML sebagai dasar pengembangan web dan belajar dasar konfigurasi Nginx buat deployment website.

---