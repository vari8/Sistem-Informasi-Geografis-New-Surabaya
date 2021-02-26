# Sistem Informasi Geografis New Surabaya
Sebuah Sistem Informasi berbasis Website untuk menampung keluhan - keluhan permasalahan dari masyarakat lengkap beserta bukti - bukti serta menampilkan informasi - informasi dari keluhan masyarakat ke dalam peta geografis dengan memanfaatkan API Google Maps. Butki berupa foto, jenis, lokasi atau tempat dan deskripsi permasalahan di kota Surabaya. Permasalahan - permasalahan yang disimpan adalah: lampu jalan rusak, sampah, jalan rusak, parkir liar, kemacetan, pengemis, kaki lima liar, kriminal, banjir, dan pohon tumbang.

### Teknologi yang digunakan 
- PHP
- MySQL
- jQuery
- Google Maps

Pada bagian kanan browser, akan menampilkan daftar permasalahan - permasalahan yang terkemas ke dalam tombol yang dapat dicentang (select tag pada HTML). Jadi, bila seorang user ingin mengetahui semua lokasi dan deskripsi dari sebuah permasalahan pada peta Surabaya, maka user tersebut tinggal memilih satu atau lebih masalah. Lalu, sistem akan menampilkan marker - marker yang berbeda untuk tiap permasalahan yang dipilih user. 

Setelah user memilih salah satu marker system akan memunculkan popup menu untuk marker tersebut yang berisi informasi keadaan tempat tersebut. Jika suatu masalah terjadi terhadap tempat tersebut masyarakat dapat menginputkan keluhan mereka ke fitur “Tambah Keluhan” disini masyarakat diharapkan memasukkan data permasalahan-permasalahan yang terjadi pada lokasi tersebut.

Terdapat Juga fitur cari lokasi yang berfungsi untuk mempermudah user untuk mencari sebuah lokasi yang diinginkannya sehingga saat memasukkan data user dapat memastikan data yang dimasukkan sudah benar sehingga dapat memperkecil kesalahan user saat memasukkan data.


### Fitur
- Sign Up
- Input Problematika di Surabaya
- Filter Marker
- Places Autocomplete
Fitur pada bagian Lapor Masalah, berupa input lokasi (alamat) masalah dengan sugesti alamat ketika user mengetikkan satu atau lebih kata pada input places.
- Info Window
Fitur yang berfungsi untuk menampilkan detail informasi dari suatu marker yang diklik oleh user. Detail informasi tersebut secara urut (dari atas ke bawah) berupa: nama masalah, lokasi, koordinat geografis (latitude dan longitude), deskripsi masalah, dan foto bukti masalah tersebut.

### Dokumentasi
1. Sebelum mengakses program, pastikan Anda memiliki koneksi server lokal dengan database MySQL 
2. Buat database baru bernama `new_surabaya`, lalu import file `new_surabaya.sql`
3. Atur koneksi ke server lokal Anda pada file koneksidb.php  
4. Pada file index.php dan TambahData.php, Ganti [ GMAP API KEY ] dengan API key milik Anda
