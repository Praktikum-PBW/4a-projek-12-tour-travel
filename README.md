# 4a-projek-12-tour-travel
Kelompok 3
- Yohanes Anjar Dewantara
- Altolyto Sitanggang
- Ali Dongan Harahap

1. Nama Projek		: Tour and Travel (T&T)

2. Deskripsi Projek	:
T&T merupakan platform tour and travel yang menyediakan penjualan tiket wisata yang cepat, mudah dan lengkap, 
yang dimana akan membantu kalian untuk memesan tiket kapanpun dan dimanapun. Dan dengan aplikasi ini, 
kalian juga akan dimudahkan dalam berpergian kemanapun sesuai dengan keinginan kalian.
Tujuan utama dibuatnya website ini adalah untuk mempermudah pengguna dalam melakukan pemilihan dan pemesanan tiket wisata.

3. Struktur Database

![Diagram_Database_Tour_Travel](https://user-images.githubusercontent.com/100120568/167450812-ac88aa90-92a0-424d-896f-39fc6cfa8277.jpeg)

4. Screenshoot semua tampilan website

![About](https://user-images.githubusercontent.com/100120568/167451703-065d6559-0e54-4f77-b2cd-3c4d03580794.PNG)
![Daftar akun user](https://user-images.githubusercontent.com/100120568/167451714-6d219d57-6f67-4d6c-9235-b73a7a001fff.PNG)
![Dasboard admin](https://user-images.githubusercontent.com/100120568/167451717-d2d108b2-49c5-4c1e-85f7-52866e18b0fa.PNG)
![Data item](https://user-images.githubusercontent.com/100120568/167451723-d68b5102-faaa-46ca-a1fa-4e8e8795aa49.PNG)
![Data transaksi](https://user-images.githubusercontent.com/100120568/167451728-89d214e4-d4cf-493e-9340-2e60a8e9f4b1.PNG)
![Data user](https://user-images.githubusercontent.com/100120568/167451731-bffbd450-67c7-4c94-b131-deffe007235a.PNG)
![Destinasi 2](https://user-images.githubusercontent.com/100120568/167451737-a58e2c1b-746a-4394-9b2b-f2fb079f987a.PNG)
![Destinasi](https://user-images.githubusercontent.com/100120568/167451755-96ea543c-0de4-4463-a495-d792a44bdc16.PNG)
![Detail wisata 2](https://user-images.githubusercontent.com/100120568/167451779-cc980092-bc31-4448-bb28-a8755ede5ba8.PNG)
![Detail wisata](https://user-images.githubusercontent.com/100120568/167451783-ef32e523-08ec-4de5-92a4-74c70bd9c401.PNG)
![Home(belum login) 2](https://user-images.githubusercontent.com/100120568/167451785-b1917985-b377-4c21-bc37-f3aa99c3b94e.PNG)
![Home(belum login) 3](https://user-images.githubusercontent.com/100120568/167451796-7835a66c-da76-4bcf-8d77-dee152f8d33a.PNG)
![Home(belum login)](https://user-images.githubusercontent.com/100120568/167451835-2f885c38-bd94-4022-b307-6a19a82804f2.PNG)
![Invoice](https://user-images.githubusercontent.com/100120568/167451912-34fa83fe-8d8d-4f1c-ad82-e80e9f03b739.PNG)
![Login admin](https://user-images.githubusercontent.com/100120568/167451918-f9ccc6b9-bd13-4386-a504-5bc3e470bffc.PNG)
![Login akun user](https://user-images.githubusercontent.com/100120568/167451924-95f2236e-0792-4220-bd3b-31de69ec9f41.PNG)
![Logout user](https://user-images.githubusercontent.com/100120568/167451927-2e707f8b-a1a7-4602-a4d7-1f0c3839385d.PNG)
![Pemesanan](https://user-images.githubusercontent.com/100120568/167451934-88ae2c55-484e-40a9-9bb9-7e8e84f8e429.PNG)
![Profil admin](https://user-images.githubusercontent.com/100120568/167451938-9b2e240b-e304-4d60-b126-d48788e59bc3.PNG)
![Profil user](https://user-images.githubusercontent.com/100120568/167451945-44e2868d-b807-421c-9d39-10122de2dd0f.PNG)
![Untuk melihat pemesanan](https://user-images.githubusercontent.com/100120568/167451951-750f82ef-a56b-445c-adda-40175e130264.PNG)
![Home(sudah login)](https://user-images.githubusercontent.com/100120568/167451876-02691aff-ab7d-4d91-91bc-63447878e19a.PNG)

5. Cara membuka dan menginstall projek :
   * Cara Membuka Projek : 
	- Aktifkan Apache dan Mysql pada software XAMPP
	- Untuk Mengakses Admin :
	  > Masukkan URL localhost/tour_travel/admin
	- Untuk Mengakses User  :
	  > Masukkan URL localhost/tour_travel/user/index.php?page=home

   * Cara Install Projek : 
	- Taruh folder tour_travel pada folder htdocs pada xampp
	- Buat database tour_travel
	- Import tour_travel.sql kedalam database tour_travel 

6. Tools dan software yang digunakan  :
   - Visual Studio Code
   - XAMPP
   - Web Browser

7. Bahasa Pemrograman dan Library : 
   * PHP
   * Javascript 
   * ajax
   * jquery

8. List Folder Projek : 
- admin
-- index.php
-- proses.php
-- signin.php
-- admin
--- dashboard.php
--- index.php
--- logout.php
--- menu.php
--- item
---- create.php
---- delete.php
---- edit.php
---- index.php
---- store.php
---- update.php
--- profile
---- edit.php
---- index.php
---- update.php
--- transaksi
---- delete.php
---- index.php
--- user
---- delete.php
---- details.php
---- index.php
- assets
-- images
-- style.css
- lib
-- koneksi.php
- user
-- about.php
-- destinasi.php
-- details.php
-- home.php
-- index.php
-- indexs.php
-- invoice.php
-- logout.php
-- menu.php
-- pesan_proses.php
-- pesan.php
-- accounts
--- create.php
--- proses.php
--- signin.php
--- signup.php
-- profile
--- edit.php
--- index.php
--- update.php
