<?php
class People{
    protected $Name;   //상속받은 class는 접근이 가능
    protected $age;
    public function printpeople() {
        printf("%s <br>", $this->name);
        printf("%d <br>", $this->age);
    }
}
class student extends People{
    private $ID;
    function __construct($name, $age, $ID)
    {
        $this->name = $name;
        $this->age = $age;
        $this->ID = $ID;
    }
    function printStudent() {
        printf("---student---<br>");
        $this->printpeople();
        printf("%s <br>", $this->ID);
    }
}
class professor extends People {
        private $office_No;
        function __construct($name, $age, $office_No)
    {
        $this->name = $name;
        $this->age = $age;
        $this->office_No = $office_No;
    }            
        function printprofessor() {
        printf("---professor---<br>");
        $this->printpeople();
        printf("%s <br>", $this->office_No);
    }
}
class staff extends People{
        private $title;
        function __construct($name, $age, $title)
    {
        $this->name = $name;
        $this->age = $age;
        $this->title = $title;
    }
        public function printstaff(){
        printf("---staff---<br>");
        $this->printpeople();
        printf("%s <br>", $this->title);   
    }
}
    $std1 = new student("홍길동", 22, "2019846087");
    $prof1  = new professor("김주현", 50, "공과대432호" );
    $str1 = new staff("백승수", 39, "행정실");
    $std1->printstudent();
    $prof1->printprofessor();
    $str1->printstaff();
?>
