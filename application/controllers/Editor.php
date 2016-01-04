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
        $this->load->view("template/header");

        $files = new DefaultEditorImpl();
        $data['file_array'] = $files->GetFiles(project_location());

        $this->load->view("editor/home", $data);

        $this->load->view("template/footer");
    }

    public function edit() {
        $data['file'] = $this->input->get('url');

        if(empty($data['file'])) {
            show_404();
        }

        $file = new DefaultEditorImpl();
        $data['content'] = $file->OpenFile($data['file']);
        $data['extension'] = $file->CheckFileExtension($data['file']);

        if(is_writeable($data['file'])) {
            $data['writable'] = '<span class="check" id="writable">Writable</span>';
        } else {
            $data['writable'] = '<span class="check" id="notwritable">Not writable</span>';
        }

        $this->load->view("template/header");
        $this->load->view("editor/editor.php", $data);
        $this->load->view("template/footer");
    }
}