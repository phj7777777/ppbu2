<?php

class ArticleController{

    public $articles;
    
    function __construct($con)
    {
        $this->articles = array();

        $results = mysqli_query($con, 'SELECT * from article ORDER BY Date DESC');
        while ($row = mysqli_fetch_assoc($results)){
            $this->articles[] = article::convertToObject($row);
        }
    }

    function getArticles(){
        return $this->articles;
    }

}


?>