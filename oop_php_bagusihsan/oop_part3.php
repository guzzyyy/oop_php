<?php

class nama_class{

    function __construct(){
        //isi functgion construct
    }
}

?>

<?php

//class manusia
class manusia{
    //property
    var $nama;
    var $warna;

    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }

    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding <br/>";
    }

}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>

<?php

class nama_class{

    function __destruct(){
        //isi method desctruct
    }
}
?>

<?php
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;

    //method construct di jalankan pertama kali
    function __construct(){
        echo "ini adalah isi method contruct <br/>";
    }

    //method destruct di jalankan terakhir
    function __destruct(){
        echo "ini adalah method destruct <br/>";
    }

    //method manusia
    function tampilkan_nama(){
        return "Nama saya melasngoding <br/>";
    }
}
//instansi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();