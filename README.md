<p align="center"><img src="boom.png" width="400"></p>

Solusi dari Kelompok 24 bernama BEBAS adalah sebuah web yang beranama Cent

Dengan anggota dan pembagian tugasnya adalah sebagai berikut:
<p> Kelompok 10 Buddies 1 </p>
	<p> 1. Nicholas Darmawan 16519009 - Front end </p>
	<p> 2. Reihan Andika Putra 16519316 - Back end </p>
	<p> 3. Kadek Dwi Bagus AU 16519350 - Back end </p>
	<p> 4. Karel Renaldi 16519445 - Front end </p>
	<p> 5. James Chandra 16519446 - Front end </p>
	<p> 6. Muhammad Galih R R 16519455 - Front end </p>
	<p> Kelompok 8 Buddies 4 </p>
	<p> 1. Haning Nanda H 16519004 - Penjelasan </p>
	<p> 2. M Reyhanullah B 165199306 - Penjelasan </p>
	<p> 3. Muhammad Iqbal S 16519349 - Penjelasan</p>
	<p> 4. Cindy Amandani N 165199410 - Penjelasan</p>
	<p> 5. Ilyasa Salafi Putra J 16519457 - Penjelasan</p>
	<p> 6. Muhammad Asyrofi Al H 16519494</p>


# Cent

Cent adalah sebuah web yang membantu agar penggunanya dapat mengatur keuangan secara proporsional sehingga uang dapat digunakan dengan baik.

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Requirements

* Laragon
* phpMyAdmin
* Composer

## Instalasi Tools Untuk Laravel

Sebelum kamu dapat melanjutkan tahap Laravel, kamu dapat memasang tools di bawah ini sesuai dengan sistem operasi yang kamu gunakan

Windows

Untuk sistem operasi Windows, tools yang direkomendasikan untuk membuat aplikasi PHP dan Laravel adalah Laragon. Pada laragon, kamu juga dapat memasang aplikasi tanpa harus melakukan instalasi lewat command line
1. Masuk ke website laragon.org lalu klik Download
<p align="center"><img src="web.png" width="400"></p>

2. Pilih Laragon - Full
<p align="center"><img src="full.png" width="400"></p>

3. Install phpMyAdmin

# Cara Menjalanakan Programnya

### 1. Clone Repository

Buka folder `C:\laragon\www` kemudian clone repository dan cd ke folder cent
```
git clone https://github.com/AndhikaRei/Cent.git
cd cent
```
Sebelum melakukan ini pastikan kamu sudah menginstall git di di pc. Setelah melakukan ini file hasil dari github mestinya sudah ada di pc mu.

#### 2. Install Composer dan npm dependency

Untuk windows, dapat mendownload composer pada [link](https://getcomposer.org/download/) ini, kemudian ikuti langkah-langkahnya. Setelah terinstall, pindah ke directory project `cent` dan jalankan command berikut.
```
composer install
npm install
```
Apabila menggunakan laragon maka tidak perlu menginstall composer

#### 3. Copy file .env

`.env.example` hanyalah sampel dari `.env` sehingga perlu di-copy untuk digunakan.
```
copy .env.example .env
```
Command diatas akan meng-copy `.env.example` menjadi `.env`

#### 4. Generate encryption key

Laravel memerlukan kode enkripsi pada file `.env`. Command berikut akan menambah `APP_KEY` pada file `.env`.
```
php artican key:generate
```

#### 5. Buat database baru

Buka browser kemudian buka login page phpmyadmin atau `localhost/phpmyadmin`. Login dengan username root (jika masih default), kemudian tambah database baru dengan nama `{project_name}` atau `cent`.

#### 6. Tambahkan info database di .env file

Buka file `.env` kemudian ganti `DB_DATABASE` menjadi `{project_name}` atau `cent`.

#### 7. Migrasi database

Buka terminal di folder `cent` kemudian jalankan command berikut.
```
php artisan migrate
```
Command diatas akan memigrasi tabel ke database.

#### 8. Seed database

```
php artisan db:seed
```
Command diatas akan mengisi database dengan dummy data.

#### 9. Akses webpage
