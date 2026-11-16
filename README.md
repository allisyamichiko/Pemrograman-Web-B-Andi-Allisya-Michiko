# Perpustakaan Mini

Aplikasi web sederhana untuk mengelola data buku menggunakan Laravel. Aplikasi ini dibuat sebagai project tugas mata kuliah Pemrograman Web B.

## Fitur Aplikasi

- Menampilkan daftar buku.
- Menambahkan data buku.
- Melihat detail buku.
- Mengedit data buku.
- Menghapus data buku.
- Mencari buku berdasarkan judul atau penulis.
- Validasi input data.
- Pagination untuk daftar buku.

## Teknologi yang Digunakan

- PHP 8.5
- Laravel 13
- Blade
- Tailwind CSS 4
- SQLite
- Node.js dan npm

## Data Buku

Setiap data buku memiliki informasi:
- Judul
- Penulis
- Tahun terbit
- Sinopsis

## Struktur Folder

```text
daftar-buku/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env.example
├── artisan
├── composer.json
└── package.json
```

## Cara Menjalankan Aplikasi

1. Clone repository:

```bash
git clone https://github.com/allisyamichiko/Pemrograman-Web-B-Andi-Allisya-Michiko.git
```

2. Masuk ke folder project:

```bash
cd Pemrograman-Web-B-Andi-Allisya-Michiko
```

3. Install dependency Laravel:

```bash
composer install
```

4. Salin file konfigurasi:

```powershell
Copy-Item .env.example .env
```

5. Buat database SQLite:

```powershell
New-Item database/database.sqlite -ItemType File
```

6. Buat application key:

```bash
php artisan key:generate
```

7. Jalankan migration dan seeder:

```bash
php artisan migrate
php artisan db:seed --class=BukuSeeder
```

8. Install dependency frontend:

```bash
npm install
```

9. Jalankan aplikasi:

```bash
npm run build
php artisan serve
```

10. Buka alamat berikut di browser:

```text
http://127.0.0.1:8000
```

## Repository

GitHub: https://github.com/allisyamichiko/Pemrograman-Web-B-Andi-Allisya-Michiko