<?php


class Etudiants extends Controller{

    public function __construct()
    {
        $this->etudiantModel = $this->model('Etudiant');
    }

    
    public function index(){

        $etudiants = $this->etudiantModel->getEtudiants();
        $data = [
            'etudiants' => $etudiants
        ];

        $this->view('etudiants/index', $data);
    }


}