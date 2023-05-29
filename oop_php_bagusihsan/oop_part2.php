<?php
//cara penulisan class OOP PHP
class nama_class{

    //isi dari class ini

}

?>


<?php
//cara penulisan class dan property OOP PHP
class mobil{

    var $warna;
    var $merek;
    var $ukuran;

}
?>


<?php
//cara penulisan class dan property OOP PHP
class mobil{
    //property oop
    var $warna;
    var $merek;
    var $ukuran;



    //method oop
    function maju(){

    }

    function berhenti(){
        //isi method
    }
}

?>


<?php
//cara penuisan class dan property OOP PHP
class mobil{

    //isi class

}

$mobil = new mobil();
?>

<?php
//PHP OOP Part 2 pengertian Class, Object, Property dan method
//class manusia
class manusia{
    //property
    var $nama;
    var $warna;

    //method manusia
    function tampilkan_nama(){
        return "Nama saya malasngoding </br>";
    }

    function warna_kulit(){
        return "warna_kulit saya hitam <br/>";

    }
}
//instansiasi class manusia
$manusia = new manusia();

//memnggil method tampilakan_nama dari class manusia
echo $manusia->tampilkan_nama();

//memanggil method warna_kulit dari class manusia
echo $manusia->warna_kulit();  
?>