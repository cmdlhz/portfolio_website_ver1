<?php

class Manager{
    protected function db_connect(){
        $db = new \PDO('mysql:host=localhost;dbname=portfolio_website;charset=utf8', 'root', 'root');
        return $db;
    }
}   