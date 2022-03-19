<?php
require_once ("config.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
$sql = "delete from student where id='$id'";
execute($sql);
header("Location: baitap.php");
?>
+
câu truy vấn :
read(đọc tất cả các item trong bảng) => select * from name_table;
create(thêm 1 item vào bảng) => insert into name_table(columm1,column2,...) values('$value1','$value2',...);
update(sửa 1 item trong bảng)
delete(xóa 1 item trong bảng) => delete from name_table where id='$id';
