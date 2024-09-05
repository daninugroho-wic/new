langkah membuat crud
php artisan make:model 




php artisan migrate:fresh <!-- menghapus semua tabel di database -->
php artisan migrate:refresh <!-- menghapus tabel satu per satu dan menjalankan ulang migrasi dari awal -->
php artisan migrate <!-- menjalankan migrasi yang belum dijalankan sebelumnya -->


php artisan cache:clear <!-- cache konfigurasi, cache rute, dan cache view -->
php artisan view:clear <!-- cache dari view yang di-compile oleh Blade -->
php artisan optimize:clear <!-- cache yang dihasilkan oleh perintah optimize, termasuk cache konfigurasi, rute, dan view -->

php artisan config:cache
php artisan route:cache
php artisan cache:clear
php artisan session:clear
