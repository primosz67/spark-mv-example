<?php

namespace example\dao;

class BaseDao {

    private $data;

    public function setData($data = array()) {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData() {
        return $this->data;
    }

}