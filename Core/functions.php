<?php
class Connection
{
    function Make($config)
    {
        try {
            return $conn = mysqli_connect($config['host'], $config['root'], $config['password'], $config['DB']);
         } catch (PDOException $e) {
             die('Could not connect.');
         }
    }
}

?>