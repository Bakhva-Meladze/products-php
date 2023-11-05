<?php

namespace model;

class Database
{
    public $sku;
    public $name;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'scandiweb';
    public $connection;
    protected static $table_name;
    protected static $table_columns = array();

    function __construct()
    {
        $this->connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this->database);
        if ($this->connection) {
        }
    }

    public function all()
    {
        $query = "select * from " . static::$table_name;
        $result = $this->query($query);
        return ($result);
    }

    public function delete($id)
    {
        $delete = array($id);
        foreach ($delete as $id) {
            $sql = "DELETE FROM products WHERE id='" . $id . "'";
            if (mysqli_query($this->connection, $sql)) {
            }
        }
    }

    public function insert($data)
    {
        $columns1 = '';
        $values = '';
        foreach ($data as $name => $value) {
            if (in_array($name, static::$table_columns)) {
                $columns1 .= $name . ",";
                $values .= '"' . $value . '" ' . ',';
            }
        }
        $tall = rtrim($values, ',');
        $colum = rtrim($columns1, ',');
        $query = "INSERT into  " . static::$table_name . " (" . $colum . " ) " .
            "Values ( " . $tall . " )";
        $result = mysqli_query($this->connection, $query);
    }

    public function query($query) {
        $result = mysqli_query($this->connection, $query);

        if (!$result) {
            var_dump(mysqli_error($this->connection));
        }
        $data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return ($data);
    }
}

