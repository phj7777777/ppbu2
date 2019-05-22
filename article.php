<?php

class article{

    public $Title;
    public $Date;
    public $Image;
    public $Content;

    function convertToObject($row){

        $article = new article();
        $article->Title = $row["Title"];
        $article->Date = $row["Date"];
        $article->Image = $row['Image'];
        $article->Content = $row["Content"];

        return $article;

    }

}

?>