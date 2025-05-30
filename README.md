## 📄 Judul Aplikasi

**Sistem Informasi Sekolah - PHP Native**

---

## 📖 Deskripsi Aplikasi

Aplikasi ini adalah sistem informasi sederhana berbasis **PHP Native** (tanpa framework) yang digunakan untuk mengelola data sekolah.

### 📅 Fitur Utama:

* **Login / Logout Admin**
* **Manajemen Data Guru**
* **Manajemen Data Siswa**
* **Manajemen Mata Pelajaran (Mapel)**
* Dashboard statistik jumlah data

### 📁 Struktur Folder:

* `index.php` – Halaman utama/login
* `dashboard.php` – Menu utama setelah login
* `guru/` – Kelola data guru (CRUD)
* `siswa/` – Kelola data siswa (CRUD)
* `mapel/` – Kelola data mata pelajaran (CRUD)
* `logout.php` – Keluar dari sistem

### 🔹 Database

Menggunakan **MySQL** dengan tabel:

* `guru`
* `siswa`
* `mapel`
* `admin` *(untuk login)*

---

## 🧰 Software yang Digunakan

* **PHP 8.2**
* **MySQL **
* **Laragon**
* **VS Codet**

---

## ⚙️ Cara Instalasi

### ✍️ 1. Clone / Download Proyek

```bash
git clone https://github.com/rafiibnugroho/php_native_school.git
```

Atau unduh ZIP lalu ekstrak di `htdocs` (jika pakai XAMPP) atau `www` (jika pakai Laragon).

### ⚖️ 2. Import Database

1. Buka `phpMyAdmin`
2. Buat database misalnya: `db_sekolah`
3. Import file SQL: `database/db_sekolah.sql`

### ⚙️ 3. Atur Koneksi

Buka file `koneksi.php` dan sesuaikan:

```php
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");
```

### 🔄 4. Jalankan Aplikasi

Akses melalui browser:

```
http://localhost/php_native_school
```

---

## 🚀 Cara Menggunakan

1. Login menggunakan akun admin (lihat di database tabel `admin`)
2. Kelola data guru, siswa, dan mapel melalui dashboard
3. Logout untuk keluar dari sistem

---

## 👤 Identitas Pembuat

| Nama           | NIM       | Kelas |
| -------------- | --------- | ----- |
| Rafi Ibnugroho | 123456789 | TI-XX |
