<?php


class Connection
{

    private static ?PDO $pdo = null;

    public static function getPDO()
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO("sqlite:../db.sqlite", null, null, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$pdo;
    }
}