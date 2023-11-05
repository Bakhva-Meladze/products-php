<?php

namespace model;

use model\Database;

abstract class Products extends Database
{

    protected static $table_name = 'products';
    protected static $table_columns = array('name', 'sku', 'price', 'type_id', 'extension');

    public function __construct()
    {
        parent::__construct();
    }

    abstract  public function save($data = array());

    public function get_type_id()
    {
        $type_name = str_replace(__NAMESPACE__ . '\\', '', get_class($this));
        $result = $this->query('select id from types where name="'.$type_name.'"');
        return $result[0]['id'];
    }
}