<?php

namespace MarcsNameSpace\DB;

Use PDO;

class DbConnection
{
    public function getDb()
    {
        $db = new PDO('mysql:host=127.0.0.1; dbname=crypto_news', 'root', '');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $db;
    }
}