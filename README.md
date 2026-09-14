# 📊 SIAAKN — Sistem Informasi Akuntansi Berbasis Web

SIAAKN (Sistem Informasi Akuntansi) adalah aplikasi web pengelolaan data akuntansi yang dibangun menggunakan **CodeIgniter 4** dan **Stisla Admin Template**. Aplikasi ini menerapkan arsitektur *Skinny Controller, Fat Model*, RESTful Routing, serta integrasi database relasional (1-to-N).

## 🚀 Fitur Utama
- **Master Data Akun 1 (Klasifikasi Utama)**: Full CRUD dengan Server-Side Validation & Flash Messages.
- **Master Data Akun 2 (Sub-Akun Relasional)**: Full CRUD berelasi *Foreign Key* ke Akun 1.
- **RESTful Resource & Spoofing**: Penerapan HTTP Method (`GET`, `POST`, `PUT`, `DELETE`).
- **Interactive UI/UX**: Integrasi DataTables untuk pencarian & pengurutan, serta SweetAlert2 untuk konfirmasi hapus.
- **Clean Architecture & Security**: Dilengkapi proteksi CSRF (*Cross-Site Request Forgery*) dan penanganan `.env` terisolasi.

## 🛠️ Tech Stack
- **Framework**: CodeIgniter 4.7.4
- **Language**: PHP 8.x
- **Database**: MySQL / MariaDB
- **UI Template**: Stisla Admin Template (Bootstrap 4)
- **Libraries**: DataTables, SweetAlert2, FontAwesome

## 💻 Cara Install & Menjalankan Proyek

1. **Clone Repositori**
   ```bash
   git clone [https://github.com/donifebrian84/SIAAKN.git](https://github.com/donifebrian84/SIAAKN.git)
   cd SIAAKN