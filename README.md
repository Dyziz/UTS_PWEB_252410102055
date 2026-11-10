# TrackTugas
TrackTugas adalah website sederhana untuk tugas UTS Pweb, dibuat menggunakan Laravel, Blade dengan framework Tailwind CSS. Website ini menampilkan dashboard, profile, dan daftar tugas kuliah.

## Halaman
- Login sederhana untuk memasukkan username.
- Dashboard sebagai halaman utama setelah login.
- Profile untuk menampilkan informasi pengguna.
- Daftar tugas kuliah untuk menampilkan mata kuliah, tugas, dan statusnya.

note : data tugas hanya memakai array dari [app/Http/Controllers/PageController.php](app/Http/Controllers/PageController.php) di line 20, jadi semua data hanya sebagai simulasi saja.

## Struktur Project

- [app/Http/Controllers](app/Http/Controllers)
- [resources](resources)
- [public](public)
- [routes](routes)

## Cara Menjalankan

Jalankan perintah berikut di dua terminal dari folder project.

Terminal pertama untuk menjalankan server Laravel:

```bash
php artisan serve
```

Terminal kedua untuk menjalankan Vite:

```bash
npm run dev
```

Lalu buka [http://127.0.0.1:8000](http://127.0.0.1:8000) di browser. jangan lupa juga untuk menyalakan laragon

