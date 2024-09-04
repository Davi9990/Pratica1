<?php

class Connect
{
    private const HOST = 'localhost';
    private const DBNAME ='db_cadastro';
    private const USER = 'root';
    private const PASS = '';
    private static $instance;
    private $collection;
    private static $fail;

    private function __construct()
    {
    
    }

    public static function getConnection(): ?PDO
    {
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME, self::USER, self::PASS);
            }catch(\PDOException $exception){
                self::$fail = $exception;
            }
        }
        return self::$instance;
    }
}