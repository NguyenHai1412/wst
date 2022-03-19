<?php
require_once ("config.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "select * from student where id='$id'";
$getInfor = executeResult($sql);
if($getInfor != null && count($getInfor) > 0){
    $std = $getInfor[0];
    $name = $std['name'];
    $age = $std['age'];
    $address = $std['address'];
    $class = $std['class'];
}
if (isset($_POST['submit'])){
    if (isset($_POST['name'])){
        $name = $_POST['name'];
    }
    if (isset($_POST['age'])){
        $age = $_POST['age'];
    }
    if (isset($_POST['$address'])){
        $address = $_POST['$address'];
    }
    if (isset($_POST['class'])){
        $class = $_POST['class'];
    }
    if ($name && $age && $address && $class){
        $sql = "update student set name='$name', age='$age', address='$address',class='$class' where id='$id'";
        execute($sql);
        header("Location: baitap.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    html{
    background-color: pink;
    }
</style>

<body>
    <h1 style="text-align: center; color: #fff; text-shadow: 7px 7px 7px black; margin: 50px 0 0 0;">CREATE STUDENT</h1>
    <div class="form" style="margin: 100px 500px;">
        <form action="" method="POST">
            <input type="text" placeholder="Tên" style="display: block; padding: 15px; width: 100%; margin: 30px 0;" name="name" value="<?php echo $name?>">
            <input type="text" placeholder="Tuổi" style="display: block; padding: 15px; width: 100%; margin: 30px 0;" name="age" value="<?php echo $age?>">
            <input type="text" placeholder="Địa Chỉ" style="display: block; padding: 15px; width: 100%; margin: 30px 0;" name="address" value="<?php echo $address?>">
            <input type="text" placeholder="Lớp" style="display: block; padding: 15px; width: 100%; margin: 30px 0;" name="class" value="<?php echo $class?>">
            <div class="button" style="text-align: center;">
                <button type="submit" name="submit" style="padding: 20px 50px;">save sinh viên </button>
            </div>
        </form>
    </div>
</body>

</html>