<?php
include_once "../database/db.php";

class Article 
{
    
    public static function insert($title, $author,$category,$content)
    {
        global $conn;
        $sql = "INSERT INTO `article`(`title`, `author`, `category`, `content`) VALUES ('$title','$author','$category','$content')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
    }

    public static function select()
    {
        global $conn;
        $sql = "SELECT * FROM `article`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `article` WHERE 'id' = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}
