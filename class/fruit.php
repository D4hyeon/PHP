<?php
class fruit{
	private $_name;
	private $_color;
	private $_price;
	function __construct($name, $color, $price){
		$this->_name = $name;
		$this->_color = $color;
		$this->_price = $price;
	}
	public function prt_fruit(){
		print " Name: " . $this->_name. "<br>";
        print " Name: " . $this->_color. "<br>";
        print " Name: " . $this->_price. "<br>";
	}
	public function getprice(){
	return $this->_price;
	}
	public function setprice($price){
		$this->_price = $price;
	}
}
$apple = new fruit("사과", "red", 100);
$banana = new fruit("바나나", "yellow", 200);
$cherry = new fruit("체리", "red", 300);
$apple->prt_fruit();
$banana->prt_fruit();
$cherry->prt_fruit();
$cherry->setprice(1200);
$cherry->prt_fruit();
?>