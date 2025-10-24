🧾 API Technical Test - Data Transaksi

Proyek ini merupakan API sederhana berbasis Laravel yang dibuat untuk memenuhi technical test. Aplikasi ini berfungsi untuk mengambil data transaksi dari database dan menampilkannya dalam format JSON sesuai spesifikasi yang telah ditentukan.

⚙️ Prasyarat

Sebelum memulai, pastikan perangkat lunak berikut sudah terinstal di komputer Anda:

PHP ≥ 8.1

Composer

Database (menggunakan MySQL dalam contoh ini)

Git

🚀 Instalasi & Konfigurasi

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal:

1. Clone Repository
git clone https://github.com/diahanastasya22/qa_technical_test_diah.git

2. Masuk ke Direktori Proyek
cd qa-technical-test-diah

3. Install Dependensi PHP
composer install

4. Siapkan File Konfigurasi Lingkungan (.env)

Salin file contoh .env.example menjadi .env.

# Untuk pengguna Mac/Linux
cp .env.example .env

# Untuk pengguna Windows
copy .env.example .env

5. Generate Kunci Aplikasi
php artisan key:generate

6. Konfigurasi Database

Buka file .env dan sesuaikan konfigurasi database Anda:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=user_database_anda
DB_PASSWORD=password_anda


💡 Catatan: Pastikan Anda telah membuat database kosong dengan nama yang sesuai sebelum menjalankan migrasi.

7. Jalankan Migrasi & Seeder

Perintah berikut akan membuat tabel dan mengisi data awal dari file JSON:

php artisan migrate --seed

▶️ Menjalankan Aplikasi

Setelah semua langkah di atas selesai, jalankan server lokal dengan:

php artisan serve


Aplikasi Anda kini dapat diakses di:
👉 http://127.0.0.1:8000

📡 Endpoint API
Mendapatkan Data Transaksi

Method: GET
URL: http://127.0.0.1:8000/api/transactions

✅ Contoh Response Sukses
{
  "data": [
    {
      "id": 1372,
      "productID": "10001",
      "productName": "Test 1",
      "amount": "1000",
      "customerName": "abc",
      "status": 0,
      "transactionDate": "2022-07-10 11:14:52",
      "createBy": "abc",
      "createOn": "2022-07-10 11:14:52"
    },
    {
      "id": 1373,
      "productID": "10002",
      "productName": "Test 2",
      "amount": "2000",
      "customerName": "abc",
      "status": 0,
      "transactionDate": "2022-07-11 13:14:52",
      "createBy": "abc",
      "createOn": "2022-07-10 13:14:52"
    }
  ],
  "status": [
    {
      "id": 0,
      "name": "SUCCESS"
    },
    {
      "id": 1,
      "name": "FAILED"
    }
  ]
}
