<?php
$car = array("oto","xe máy","xe dap");
echo ("kho xe ma toi co : $car[2],$car[0],$car[1]");
?>
+
<!--//$name =  value;-->
<!--echo() : no co vai tro hien thi du lieu-->
<!--cu phap : localhost:port-->
+
<!--for ($i=0; $i ; $i++){
# code...
for ($i=0; $i < 10; $i++){
    echo "chep phat lan thu: $i <br>";
}-->
<!--$x = 1;-->
+
<!--do {-->
<!--echo ("so do la: $x  <br>");-->
<!--$x++;-->
<!--} while ($x <= 5);-->
+
<!--$a = 1;-->
<!--while ($a <= 50){-->
<!--echo ("chep phat lan thu: $a <br>");-->
<!--$a++;-->
<!--}-->
+
<!--$lythuyet = array("hai","cuong","tien");-->
<!--foreach ($lythuyet as $lop){-->
<!--echo ("$lop <br>");-->
<!--}-->
+
<!--$a = "cam";-->
<!--switch ($a) {-->
<!--case "buoi":-->
<!--echo ("day la cay buoi");-->
<!--break;-->
<!--case "tao":-->
<!--echo ("day la cay tao");-->
<!--break;-->
<!--case "quyt":-->
<!--echo ("day la cay quyt");-->
<!--break;-->
<!--case "cam":-->
<!--echo ("day la cay cam");-->
<!--break;-->
<!--}-->
+
<!--$a = 50;-->
<!--if ($a > 10){-->
<!--echo('dieu kien thoa man > 10');-->
<!--}-->
<!--else if ($a > 20){-->
<!--echo ('dieu kien thoa man > 20');-->
<!--}-->
<!--else{-->
<!--echo ('dieu kien thoa man');-->
<!--}-->
+
<!--$bien = "12345678910";-->
<!--$dem = strlen($bien);-->
<!--echo ($dem);-->
+
<!--$car = array("oto","xe máy","xe dap");-->
<!--echo ("kho xe ma toi co : $car[2],$car[0],$car[1]");-->
<!--co 2 cach tao array: array(item[0],item[1],...);-->
<!--[item[0],item[1],....]-->
+
<!--// liên kết chuỗi-->
<!--//$name "key"=>"value"-->
<!--// $name['key']-->
<!--// return value của key;-->
<!--$age = ["cường" => "21", "Hải" => "20"];-->
<!--echo ("Hải " . $age['21'] . "tuổi");-->
<!--echo ("Hải " . $age['Hải'] . "tuổi");-->
+
phpmyadmin
cach tao bang
create table student(
    id int primary key auto_increment,
    name varchar(50),
    age varchar(3),
    address varchar(50),
    class varchar(10)
)