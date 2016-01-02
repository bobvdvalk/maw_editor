<?php

/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 31-12-2015
 * Time: 18:56
 */
class Editor extends CI_Controller
{
    public function index() {
        $this->load->view("template/header");

        $this->load->view("template/footer");
    }

    public function edit($file) {
        $this->load->view("template/header");

        $this->load->view("template/footer");
    }
}