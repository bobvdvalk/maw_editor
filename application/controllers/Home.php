<?php

/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 31-12-2015
 * Time: 15:36
 */
class Home extends CI_Controller
{
    public function index() {
        $this->load->view("template/header");
        $this->load->view("home/home");
        $this->load->view("template/footer");
    }
}