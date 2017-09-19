<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.09.2017
 * Time: 19:20
 */

class Database
{
    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        $statement ='SELECT * FROM products WHERE id='.$id;
        $stmt = $this->pdo()->query($statement);
        return $stmt->fetch();
    }

    public function getAll()
    {
        $stmt = $this->pdo()->query('SELECT * FROM products');
        return $stmt->fetchAll();
    }

    function pdo()
    {
        $host = '127.0.0.1';
        $db = 'fullstack';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        return new PDO($dsn, $user, $pass, $opt);
    }

}