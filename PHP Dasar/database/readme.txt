<!-- DBMS
mysql oracle mongodb -->
<!-- datanya namanya database -->

<!-- baris row disebut dengan record -->
<!-- kolom disebut field -->
<!-- primary key harus dimiliki disetiap tabel -->
<!-- primary key adalah sebuah data yang dapa merepresentasikan satu baris record, artinya tidak boleh ada yang datanya sama -->
<!-- primary key ga mungkin diinput manual oleh admin nya, karena si admin harus tahu pasti bahwa data ituy belum dipakai sebelunny -->
<!-- biasanya ada field yang dibikin yaitu id yang di auto increment untuk digunakan sebagai primary key -->

<!-- lihat database -->
show databases;

<!-- membuat database -->
create database phpdasar;

<!-- pilih database -->
user phpdasar;

<!-- gunakan char kalau besar nya pasti -->
<!-- secara default int kalau ga dikasih ukurannya akan dikasih yang terbesar  -->
create table mahasiswa (
-> id int primary key auto_increment,
-> nama varchar(100),
-> nim char(14),
-> email varchar(100),
-> jurusan varchar(100),
-> gambar varchar(100)
-> );

<!-- melihat list table -->
show tables;

<!-- melihat struktur tabel -->
describe mahasiswa;

<!-- memasukkan data ke dalam table -->
insert into mahasiswa values ('','gema nadia',21120112130040,'gemaadhan@gmail.com','teknik komputer','gema.jpg');

<!-- menampikan isi tabel -->
select * from mahasiswa;
select nim from mahasiswa;
select nim,nama from mahasiswa;
select * from mahasiswa where nim=21120112130040;

<!-- meerubah data -->
update mahasiswa set jurusan = 'kedokteran' where nim='21120112130042';

<!-- menghapus record -->
delete from mahasiswa where nim=21120112130041;

<!-- menghapus table  -->
drop table mahasiswa;

<!-- menghapus database  -->
drop database phpdasar;