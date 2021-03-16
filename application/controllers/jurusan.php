<?php

require APPPATH . '/libraries/REST_Controller.php';

class jurusan extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    // show data mahasiswa
    function index_get()
    {
        $mahasiswa = $this->db->get('jurusan')->result();
        $this->response($mahasiswa, 200);
    }

}