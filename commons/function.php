<?php
    function connectDB(){
        $host="mysql:host=localhost;dbname=duanmau;charset=utf8";
        $user="cuongnm";
        $pass="01687835041aA@";
        try {
            $conn=new PDO($host,$user,$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>