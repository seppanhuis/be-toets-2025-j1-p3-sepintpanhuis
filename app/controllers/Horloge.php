<?php

class Horloge extends BaseController
{
    private $HorlogeModel;

    public function __construct()
    {
        $this->HorlogeModel = $this->model('HorlogeModel');
    }


    public function index()
    {
        $result = $this->HorlogeModel->getAllHorloges();
        
        $data = [
            'title' => 'Overzicht Horloge',
            'Horloge' => $result
        ];

        $this->view('Horloge/index', $data);
    }
}