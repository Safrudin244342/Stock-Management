# Stock Management by Team 9

## Persiapan

1. Disarankan untuk menyimpan folder public dan app ke dalam satu folder
2. Silahkan import database yang sudah di sertakan di folder `database`
3. Untuk update config koneksi ke database bisa mengedit file `app/config/databse.php`
```
$dbUsername = "root";
$dbPassword = "root";
$dbHost = "db";
$dbName = "shadowCompany";
```

## Jika menggunakan xampp
1. Disarankan untuk menyimpan di folder dengan nama "idim-team-9"
2. Untuk mengakses bisa langsung localhost/idim-team-9/public
3. Jika menggunakan nama folder lain harap edit file `app/app/Route.php` untuk memastikan website tetap berfungsi dengan baik. cth kita akan menyimpan di folder `stockmanagement` kita tinggal mengedit line 18.
```
$path = str_replace("/stockmanagement/public","",$path);
```

## Jika menggunakan nginx
1. Pastikan untuk melakukan rewrite path dengan config seperti dibawah
```
if (!-e $request_filename){
    rewrite ^(.+)$ /index.php break;
}
```

## User yang bisa digunakan untuk login
1. Admin user
```
Username: admin
Password: password123
```

2. Staff user
```
Username: staff1
Password: password123
```

## List Page yang ada
1. `/product`

Page ini digunakan untuk management product yang ada. Disini kita bisa menambahkan product, mengupdate product yang ada maupun menghapus product yang ada.

2. `/transaksi`

Page ini akan menampilkan list transaksi yang sudah dilakukan.

3. `/laporan`

Page ini akan menampilkan laba rugi dari setiap barang yang terdaftar
