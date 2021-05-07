<?php
class bd {
 
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'brief5';

    public function connect()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);

        return $pdo;
    }
}

    ?>