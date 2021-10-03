<?php  
    $pdo = NULL;
    function connect_to_db(){
        $host = '';
        $dbname = '';
        $username = '';
        $password = '';

        $pdo = new PDO("mysql: host=$host; dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
        catch (PDOException $e){
            echo $e->getMessage();
        }
    }
?>