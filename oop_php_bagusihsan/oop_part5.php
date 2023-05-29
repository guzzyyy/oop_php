<?php
//class parent
class manusia{

    // property class manusia
    public $nama_saya;

    //method pada class manusia 
    function berinama($saya){
        $this->nama_saya=$saya;
    }

}

//class turunan atau sub class dari class manusia
//kita menghubungkan class dengan syntax extends
class teman extends manusia{

    //property class teman
    public $nama_teman;

    //method pada class
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}

// intansiasi class teman
$malasngoding = new teman;

// method beri nama adalah method pada class manusia, tapi kita bisa mengaksesnya telah menghungkan class teman dengan class manusia
$malasngoding->berinama(" MALAS NGODING ");
$malasngoding->berinamateman( "Diki" );

//menampilkan isi property
echo "Nama saya :" . $malasngoding->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $malasngoding->nama_teman;

?>

<?php
class teman extends manusia{

    // property class teman
    public $nama_teman;

    //method pada class teman
    function berinamateman($teman){
        $this->nama_teman=$teman;
    }
}
?>

<?php
//instansiasi class teman
$malasngoding = new teman;

//method berinama adalah method pada class manusia,tapi kita bisa mengaksesnyakarena telah menghubungkan class teman dengan class manusia
$malasngoding->berinama("malas ngoding");
$malasngoding->berinamateman("diki");
?>