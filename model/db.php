<?php

namespace db;

use PDO;
use PDOException;

/**
 * Класс DB
 * Компонент для работы с базой данных
 */

class DB
{
    /**
     * Устанавливает соединение с базой данных
     * @return \PDO <p>Объект класса PDO для работы с БД</p>
     */

    public static function getConnection()
    {
        $params = array(
            'dbdriver'  => 'mysql',
            'dbcharset' => 'UTF8',
            'host'      => 'localhost',
            'dbname'    => 'test',
            'user'      => 'root',
            'password'  => '',
        );

        try{
            // Устанавливаем соединение
            $dsn = "{$params['dbdriver']}:host={$params['host']};dbname={$params['dbname']}";
            $db = new PDO($dsn, $params['user'], $params['password']);

            // Задаем кодировку
            $db->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $db;
    }
}