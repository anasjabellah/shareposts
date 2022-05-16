<?php


class etudiant extends Controller{
    public function __construct()
    {
        $this->etudiantModel = $this->model('etudiant');
    }

    public function index(){
        $this->view('users/register', $data);
    }



}