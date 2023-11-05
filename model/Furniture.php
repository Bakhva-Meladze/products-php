<?php
namespace model;

use model\Products;

class Furniture extends Products {

    public function __construct()
    {
        parent::__construct();
    }

    public function save($data = array())
    {
        $type_id = $this->get_type_id();
        $data['extension'] = $data['tall'] . 'X' . $data['width'] . 'X' . $data['length'];
        $data['type_id'] = $type_id;
        $this->insert($data);
    }
}