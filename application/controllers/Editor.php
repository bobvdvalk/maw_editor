<?php

/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 31-12-2015
 * Time: 18:56
 */
use Mawoo\Editor\DefaultEditorImpl;


class Editor extends CI_Controller
{
    public function index() {
        $this->load->helper('url');

        $this->load->view("template/header");

        $files = new DefaultEditorImpl();
        $data['file_array'] = $files->GetFiles(project_location());

        $this->load->view("editor/home", $data);

        $this->load->view("template/footer");
    }

    public function edit($file) {
        $this->load->view("template/header");

        $this->load->view("template/footer");
    }
}