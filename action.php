<?php
require_once "vendor/autoload.php";
use App\classes\Student;
$getStudents= new Student();
$getStudents=$getStudents->student();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include 'pages/home.php';
    }
}