<?php

include_once '../Model/modelCrud.php';

if(isset($_GET['id'])){ 
$id = $_GET['id'];
$row = Article::edit($id);
}