<?php
class stud{
    private $stdID;
    private $stdName;
    public function prtstd(){
        print "ID : ". $this->stdID. "<br>";
        print "Name : ". $this->stdName. "<br>";
    }
    public function SetID($id){
        $this->stdID = $id;
    } 
    public function SetName($name){
        $this->stdName = $name;
    }
    public function getID(){
        return $this->stdID;
    }
}

$std01= new stud();
$std02= new stud();

$std01->setID("2019846087");
$std02->setID("2019846086");

$std01->setName("kim");
$std02->setName("lee");

$std01->prtstd();
$std02->prtstd();
//print $std01->stdID; error
print $std01->getID();


?>