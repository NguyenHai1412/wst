<?php
require_once ('config.php');
if (isset($_POST['submit'])){
    if (isset($_POST['ten'])) {
        $ten = $_POST['ten'];
    }
    if (isset($_POST['tuoi'])) {
        $tuoi = $_POST['tuoi'];
    }
    if (isset($_POST['diachi'])) {
        $diachi = $_POST['diachi'];
    }
    if (isset($_POST['lop'])) {
        $lop = $_POST['lop'];
    }
    if ($ten && $tuoi && $diachi && $lop){
        $sql = "insert into student(name,age,address,class) values ('$ten','$tuoi','$diachi','$lop')";
        execute($sql);
        header("Location: baitap.php");
    }
}