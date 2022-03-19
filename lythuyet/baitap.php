<?php
require_once ("config.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>quan ly sinh vien</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    h1{
        text-align: center;
    }
    table{
        margin-left: 306px;
    }
    .box a{
        text-align: center;
        display: inline-block;
        margin-left: 431px ;
    }
    form{
        display: inline-block;
        margin-left: 390px ;
    }
</style>
<body>
<h1>quan ly sinh vien</h1>
<div class="box">
    <a href="add.php">them sinh vien</a>
</div>
<form action="" method="get">
    <select name="sort" id="">
        <option value="">---</option>
        <option value="a-z" <?php if (isset($_GET['sort'])
        && $_GET['sort'] = 'a-z')?>>a-z</option>
        <option value="z-a" <?php if (isset($_GET['sort'])
        && $_GET['sort'] = 'z-a')?>>z-a</option>
    </select>
    <input type="text"name="search">
    <button type="submit">tim tai khoan</button>
</form>

<table border="1">
    <thead>
    <th>stt</th>
    <th>ten </th>
    <th>tuoi</th>
    <th>dia chi</th>
    <th>lop</th>
    <th>action</th>
    </thead>
    <tbody>
    <?php
    if (isset($_GET['search']) && $_GET['search'] !='') {
        $sql = 'select * from student where name like "%' . $_GET['search'] . '%"';
    }
    else if (isset($_GET['sort'])){
        $sort = '';
        if ($_GET['sort']=="a-z"){
            $sort ="ASC";
        }
        else if($_GET['sort']=="z-a"){
            $sort = "DESC";
        }
        $sql = "select * from student order by name $sort";
    }
    else{
        $sql = 'select * from student';
    }
    $listStudent = executeResult($sql);
    $index = 1;
    foreach ($listStudent as $ls){
        echo ('
<tr>
        <td>'.$index++.'</td>
        <td>'.$ls['name'].'</td>
        <td>'.$ls['age'].'</td>
        <td>'.$ls['address'].'</td>
        <td>'.$ls['class'].'</td>
        <td>
            <a href="edit.php?id='.$ls['id'].'">edit</a>
            <a href="xoa.php?id='.$ls['id'].'">delete</a>
        </td>
 </tr>');
    }
    
    ?>

    </tbody>
</table>
</body>
</html>
