<?php
//membuat cookie
setcookie('nama','gema',time()+60); // jangan salah lo, ini maksudnya pasangan key dan value, key nya nama valuenya gema
// cookie secara default waktu habis nya sama kayak session, yaitu ketika kita close browser atau restart kompuiter.
// tapi kita bisa set time nya untuk menjaga agar cookie nya tetap tersimpan 
?>