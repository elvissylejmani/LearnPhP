<?php
class Connection
{
    function Make($config)
    {
        try {
            return mysqli_connect($config['host'],
             $config['name'],
             $config['password'],
             $config['DB']);
         } catch (mysqli_sql_exception $e) {
            throw $e;
         }
    }
}

?>