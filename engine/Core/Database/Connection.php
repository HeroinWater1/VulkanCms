<?php
namespace engine\Core\Database;

use PDO;

class Connection
{

    private $link;

    public function __construct(Array $config)
    {
        $dsn = 
        "mysql:host={$config['host']};
        dbname={$config['dbname']};
        charset={$config['charset']}";
        
        $this->link = new \PDO($dsn, $config['username'], $config['password']);        
        
        return $this;
    }

    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        
        return $sth->execute();
    }

    public function query($sql)
    {
        $exe = $this->execute($sql);
        
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        
        if ($result === false)
        {
            return [];
        }
        return $result;
    }
}