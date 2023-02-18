<?php
include_once "../database/db.php";

class Article 
{
    
    public static function insert($title, $author,$category,$content)
    {
        global $conn;
        // var_dump($conn);
        $sql = "INSERT INTO `article`(`title`, `author`, `category`, `content`) VALUES ('$title','$author','$category','$content')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
// $article = new Article;
// echo $article->insert();
