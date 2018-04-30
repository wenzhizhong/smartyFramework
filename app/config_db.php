<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/3/18
 * Time: 16:05
 */
 $config_db=array(
    'DB' =>
        array (
            'DB_TYPE' => 'Mysql',
            'DB_HOST' => '127.0.0.1',
            'DB_USER' => 'root',
            'DB_PWD' => 'root',
            'DB_PORT' => '3306',
            'DB_NAME' => 'smarty3_test',
            'DB_CHARSET' => 'utf8',
            'DB_PREFIX' => 'st_',
            'DB_CACHE_ON' => false,
            'DB_CACHE_PATH' => BASE_PATH . 'cache/db_cache/',
            'DB_CACHE_TIME' => 600,
            'DB_PCONNECT' => false,
            'DB_CACHE_CHECK' => true,
            'DB_CACHE_FILE' => 'cachedata',
            'DB_CACHE_SIZE' => '15M',
            'DB_CACHE_FLOCK' => true,

    ),
);