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
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    form{
        text-align: center;
        margin: 0px;
        background-color: #5e5e5e;
        padding:20px 0;
    }
    form input{
        display: block;
        margin: -20px 0 30px 390px;

    }
    h1{
        text-align: center;
        margin: 20px;
    }
</style>
<body>
<h1>them sinh vien</h1>
<form action="xuly.php" method="post">
    <br>
    <input type="text" placeholder="ten" name="ten">
    <br>
    <input type="text"placeholder="tuoi" name="tuoi">
    <br>
    <input type="text"placeholder="dia chi" name="diachi">
    <br>
    <input type="text"placeholder="lop" name="lop">
    <br>
    <button type="submit" name="submit">tao tai khoan</button>
</form>
</body>
</html>