<?php
include_once '../Model/modelCrud.php';

$row = $_GET["id"];
Article::delete($row);
header('location: ../View/articles.php');
