<?php
require_once "vendor/autoload.php";
use App\classes\Student;
use App\classes\Category;
$getStudents= new Student();
$getStudents=$getStudents->student();

$getCategory = new Category();
$getCategories = $getCategory->allCategory();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include 'pages/home.php';
    }
}