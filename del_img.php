<?php
include_once "function.php";
$id=$_GET['id'];
$row=find('imgs',$id);
$imgName=$row['filename'];
// $imgName=find('imgs',$id)['filename']; 等於以上兩行寫法

unlink("./files/$imgName");
del("imgs",$id); 
header("location:manage.php");