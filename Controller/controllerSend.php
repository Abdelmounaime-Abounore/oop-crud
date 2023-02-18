<?php

include_once '../Model/modelCrud.php';

$q=$_REQUEST["q"];
$q=json_decode($q);

for ($i=0; $i < count($q); $i++) {
    $title=$q[$i]->{'title'.$i};
    $author=$q[$i]->{'author'.$i};
    $category=$q[$i]->{'category'.$i};
    $content=$q[$i]->{'description'.$i};
    Article::insert($title, $author, $category, $content);
    
}