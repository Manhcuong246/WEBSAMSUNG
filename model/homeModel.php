<?php
class homeModel {

    public $conn;

    function __construct() {
        $this->conn = connectDB();
    }



}