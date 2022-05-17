<?php



class Professeurs extends Controller {

    public function __construct()
    {
        $this->ProfesseurModel = $this->model('Professeur');
    }

    
    public function index(){

        $Professeur = $this->ProfesseurModel->getEtudiants();
        $data = [
            'Professeur' => $Professeurs
        ];

        $this->view('Professeur/index', $data);
    }


    public function add(){

    }

    //show single post 
    public function show($id){

    }

     //edit post
     public function edit($id){

    }
    
    //delete post
    public function delete($id){

    }
}