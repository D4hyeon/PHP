<?php
class stud{
    public $stdID;
    public $stdName;
    public function prtstd(){
        print "ID : ". $this->stdID. "<br>";
        print "Name : ". $this->stdName. "<br>";
    }
}

$std01= new stud();
$std02= new stud();
$std03= new stud();
$std01->stdID = "2019846087";
$std02->stdID = "2019846086";
$std03->stdID = "2019846085";
$std01->stdName = "kim";
$std02->stdName = "lee";
$std03->stdName = "choi";
$std01->prtstd();
$std02->prtstd();
$std03->prtstd();


print $std01->stdID;

?>