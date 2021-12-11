<?php

// print_r($_POST);

// echo "<hr>";

// echo "<pre>";
// print_r($_FILES);


$name = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
echo $_FILES['file']['type'];die;
$ext =  explode("/",$_FILES['file']['type']);
// echo $ext[1];
move_uploaded_file($tmp,"upload/".$_POST['username'].".".$ext[1]);


