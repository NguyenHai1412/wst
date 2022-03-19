<?php
require_once ('./connect.php');
//ham khong co gia tri tra ve
function execute($sql){
    $conn = mysqli_connect(host,username,password,database);
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    //ham nay se xu ly chuc nang tao, xoa item
}
function executeResult($sql){
    $conn = mysqli_connect(host,username,password,database);
    $resultset = mysqli_query($conn,$sql);
    $list = [];
    while ( $row = mysqli_fetch_array($resultset,1)){
        $list[] = $row;
    }
    return $list;
    mysqli_close($conn);
}



?>