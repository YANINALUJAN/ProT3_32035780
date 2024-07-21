<?php
namespace App\Controllers;
Use App\Models\usuario_model;
Use CodeIgniter\Controller;

class Usuario_controller extends Controller{
    public function _construct(){
        helper(["form", "url"]);
    }

    public function create() {
        /* $data[ "titulo"]="registro";
        echo view("Front/head",$data); */
        echo view("Back/usuario/Registro");
    }

    public function formValidation() {

        $input = $this->validate([ 
            "nombreyapellido" => "required|min_length[3]|max_length[100]",
            "cuit" => "required|min_length[3]|max_length[25]",
            "usuario" => "required|min_length[3]",
            "email" => "required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]",
            "pass" => "required|min_length[3]|max_length[10]",
        ],
    );
         $formModel = new usuario_model();

         if (!$input) {
            /* $data[ "titulo"]="registro";
            echo view("Front/head",$data); */
            return view('Back/usuario/Registro', ["validation" => $this->validator]);

         } else {
           $formModel->save([
                'nombreyapellido' => $this->request->getVar('nombreyapellido'),
                'cuit' => $this->request->getVar('cuit'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ]);

            // Flashdata funciona solo en redirigir la función en el controlador en vista de carga.
    session()->setFlashdata('success', 'Usuario registrado con éxito');
    return $this->response->redirect('Login');
}

    }
}   