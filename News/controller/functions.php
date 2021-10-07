<?php 
    // include_once 'C:\xampp\htdocs\pemweb\PEMWEB UTS\PEMWEB\News\config\dbconnect.php'; 
    include_once 'D:\XAMPP\htdocs\PROGRAM_WEB\PROJECT\PEMWEB\News\config\dbconnect.php'; 

    function fetchNews( $conn )
    {

        $request = $conn->prepare(" SELECT news_ID, news_title, news_short_description, news_author, news_published_on, news_category FROM news_info ORDER BY news_published_on DESC ");
        return $request->execute() ? $request->fetchAll() : false; 
    }

    function getAnArticle( $id_article, $conn )
    {

        $request =  $conn->prepare(" SELECT news_id,  news_title, news_full_content, news_author, news_published_on, news_category FROM news_info  WHERE news_ID = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }

    function getOtherArticles( $differ_id, $conn )
    {
        $request =  $conn->prepare(" SELECT news_id,  news_title, news_short_description, news_full_content, news_author, news_published_on, news_category FROM news_info  WHERE news_ID != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false; 
    }

    