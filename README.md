## Installasi pada windows
1. download dan install xampp di https://www.apachefriends.org/download.html
2. download dan install composer https://getcomposer.org/download/
3. jalankan command line ketik **cd c:/users/namakomputer**
4. jalankan command line kembali ketik git clone https://github.com/wsherys/LaravelRestfulAPI.git
5. setelah proses clone selesai
6. import database ke phpmyadmin pada direktori **c:/users/namakomputer/LaravelRestfulAPI/laravelrestfulapi.sql**
7. setelah selesai import, jalankan command line kembali pada posisi **c:/users/namakomputer/LaravelRestfulAPI/**
9. kemudian ketik pada command line seperti berikut **php artisan serve**
10. jalankan pada browser firefox atau chrome http://127.0.0.1:8000/
11. selesai

## Installasi pada linux
1. download dan install xampp di https://www.apachefriends.org/download.html
2. download dan install composer https://getcomposer.org/download/
3. jalankan terminal ketik **cd /opt/lampp/htdocs/**
4. lakukan git clone tetap pada terminal ketik **git clone https://github.com/wsherys/LaravelRestfulAPI.git**
5. setelah proses selesai
6. import database ke phpmyadmin lokasi direktori **/opt/lampp/htdocs/LaravelRestfulAPI/laravelrestfulapi.sql**
7. setelah selesai import, jalankan command line pada posisi **/opt/lampp/htdocs/LaravelRestfulAPI**
8. ketik **php artisan serve**
9. jalankan pada browser firefox atau chrome http://127.0.0.1:8000/
10. selesai

## Untuk pengetesan Restful API yang digunakan
1. download postman https://www.postman.com/downloads/
2. jalankan postman, buat tab baru jalankan sebagai berikut.
3. GET - list article = http://127.0.0.1:8000/api/artikel/
4. GET by id article = http://127.0.0.1:8000/api/artikel/1
5. POST - data article = http://127.0.0.1:8000/api/artikel/?author=nama author&text=artikel author
6. POST by id edit article = http://127.0.0.1:8000/api/artikel/1
7. DELETE by id article = http://127.0.0.1:8000/api/artikel/1
