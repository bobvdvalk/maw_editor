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

        $data['location'] = project_location();

        if(is_writeable(project_location())) {
            $data['writable'] = '<span class="check" id="writable">Writable</span>';
        } else {
            $data['writable'] = '<span class="check" id="notwritable">Not writable</span>';
        }

        $this->load->view("home/home", $data);
        $this->load->view("template/footer");
    }
}