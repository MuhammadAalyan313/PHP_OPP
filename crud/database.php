<?php

class database
{
    private $host;
    private $username;
    private $password;
    private $database;

    protected function connect()
    {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'crud';
        $con = new mysqli($this->host, $this->username, $this->password, $this->database);
        return $con;
    }
}

class query extends database
{
    public function getData($table)
    {
        $sql = 'select * from '.$table;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                print_r($row);
            }
        }
    }
}

$obj = new query();
$obj->getData('employee');
