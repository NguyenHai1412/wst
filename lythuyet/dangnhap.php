<?php
$username = $password = $repass = $name = $age = $address ='';
$userErr =$passErr = $repassErr = $nameErr = $ageErr = $addressErr = '';
if ($_SERVER['REQUEST_METHOD'] =="POST"){
    if (empty($_POST['username'])){
        $userErr = ' vui long nhap tai khoan ';
    }
    else if (strlen($_POST['username']) < 3 ){
        $userErr ='tai khoan qua ngan';
    }
    else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])){
        $passErr = ' vui long nhap mat khau ';
    }
    else if (strlen($_POST['password']) < 8 ){
        $passErr ='mat khau qua ngan';
    }
    else {
        $passErr = $_POST['password'];
    }
    if (empty($_POST['repassword'])){
        $passErr = ' vui long nhap mat khau trem ';
    }
    else if (strlen($_POST['repassword']) !=$_POST['password'] ){
        $passErr ='mat khau khon khop';
    }
    else {
        $passErr = $_POST['repassword'];
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    form{
        display: block;
        width: 16%;
        margin-left: 821px;
        margin-top: 200px;
        padding: 20px;
        background-color: black;
    }
    form input{
        display: block;
        margin: 20px;
        height: 30px;
    }
    form p{
        color: red;
        margin: 5px;
        text-align: center;
    }
    .button{
        text-align: center;
        margin-top: 10px;
    }
    h1{
        text-align: center;
        color: white;
    }

</style>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    <h1>register</h1>
    <input type="text" placeholder="username" name="username">
    <p><?php echo $userErr?></p>
    <input type="password" placeholder="password" name="password">
    <p><?php echo $passErr?></p>
    <input type="password" placeholder="re-password" name="repassword">
    <p><?php echo $repassErr?></p>
    <input type="text" placeholder="ten" name="name">
    <p><?php echo $nameErr?></p>
    <input type="text" placeholder="tuoi" name="age">
    <p><?php echo $ageErr?></p>
    <input type="text" placeholder="dia chi" name="address">
    <p><?php echo $addressErr?></p>
    <input type="checkbox">
    <label for="" style="color: white; text-align: center;display: block;"> ghi nho mat khau</label>
    <div class="button">
        <button type="submit">submit</button>
    </div>
</form>
</body>
</html>