ada beberapa cara menghubungkna php dengan mysql
1. extensi mysql
2. extensi mysqli (yang terbaru)
3. PDO (PHP Data Object) (jika swaktu2 ada perubahan database dari mysql ke postgresql, tidak banyak kode yang harus diubah)

SESSION adalah mekanisme penyimpanan informasi ke dalam variabel agar bisa digunakan di lebih dari satu halaman. sebelumnya kita tau ada $_POST dan $_GET tapi keduanya harus melalui proses pengiriman dulu / submit dan cuma bisa digunakna di dua halaman tergantung ngirimnya kemana. kalo $_session kita bisa gunakan disemua halaman. kemudian isi dari $_SESSION disimpannya di server. ada lagi namanya $_COOKIE. kalo $_COOKIE disimpan nya di browser. untuk menggunakan $_SESSION, kita harus memanggil function session_start() seblum menulis php. 

COOKIE mirip seperti session, variabel yang bisa diakses dimana saja di halaman web kita, bedanya cookie disimpan di client. kalo session disimpan di server.
penggunaan COOKIE : 
1. mengenali user, mirip seperti session
2. shopping cart, bisa mencari barang lain tanpa menghilangkan belanjaan yang dipilih sebelumnya
3. personalisasi, untuk mengetahui prevensi seorang user, untuk iklan. atau memberi saran video kalo di youtube. 
karena disimpan di client, cookie bisa menjadi celah keamanan. 




