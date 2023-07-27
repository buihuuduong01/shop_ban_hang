<?php

include_once"connect/database.php";
include_once"connect/format.php";

class m_user {
    private $db;
    private $fm;

    public function __construct() {
        $this->db = new Database();
        $this->fm = new Format();
    }
}
