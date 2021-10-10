<?php 
    include __DIR__.'..\..\..\News\modal\dbconnect.php'; 
    function fetchNews()
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_short_description, news_author, news_published_on, news_category FROM news_info ORDER BY news_published_on DESC ");
        return $request->execute() ? $request->fetchAll() : false; 
    }

    function fetchCategory($category)
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_short_description, news_author, news_published_on, news_category FROM news_info WHERE news_category = ? ");
        return $request->execute(array($category)) ? $request->fetchAll() : false;
    }

    function newsHeadOne()
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_category FROM news_info ORDER BY news_published_on DESC LIMIT 1 ");
        return $request->execute() ? $request->fetchAll() : false; 
    }

    function newsHeadSideBar()
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_category FROM news_info ORDER BY news_published_on DESC LIMIT 1,2 ");
        return $request->execute() ? $request->fetchAll() : false; 
    }   

    function getAnArticle($id_article)
    {
        $conn = connect_to_db();
        $request =  $conn->prepare(" SELECT news_ID,  news_title, news_full_content,news_short_description, news_author, news_published_on, news_category FROM news_info  WHERE news_ID = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }

    function getOtherArticles($differ_id)
    {
        $conn = connect_to_db();
        $request =  $conn->prepare(" SELECT news_ID,  news_title, news_short_description, news_full_content, news_author, news_published_on, news_category FROM news_info  WHERE news_ID != ? ");
        return $request->execute(array($differ_id)) ? $request->fetchAll() : false; 
    }
   
    function fetchcomment($id_article)
    {
        $conn = connect_to_db();
        $request =  $conn->prepare(" SELECT comment_ID, 'user_ID', comment, comment_likes, `date`, (SELECT username FROM user WHERE user.user_ID = comment.user_ID) AS `username` FROM comment  WHERE news_ID = ? ");
        return $request->execute(array($id_article)) ? $request->fetchAll() : false; 
    }

    function fetchPopular()
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_short_description FROM news_info ORDER BY news_likes DESC LIMIT 5");
        return $request->execute() ? $request->fetchAll() : false; 
    }

    function fetchReco()
    {
        $conn = connect_to_db();
        $request = $conn->prepare(" SELECT news_ID, news_title, news_short_description, news_category FROM news_info ORDER BY news_published_on ASC LIMIT 5");
        return $request->execute() ? $request->fetchAll() : false; 
    }
?>