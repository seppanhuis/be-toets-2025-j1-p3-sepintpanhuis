<?php

class UFC extends BaseController
{
    private $UFCModel;

    public function __construct()
    {
        $this->UFCModel = $this->model('UFCModel');
    }


    public function index()
    {
        $result = $this->UFCModel->getAllUFC();
        
        $data = [
            'title' => "UFC men's pound-for-found ranking",
            'UFC' => $result
        ];

        $this->view('UFC/index', $data);
    }
}