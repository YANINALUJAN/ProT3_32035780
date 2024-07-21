<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       $data["titulo"]="index";
       echo view("front/head",$data);
        return view('front/index');
    }
    public function quienes_somos(): string
    {
        $data["titulo"]="quienes_somos";
        echo view("front/head",$data); 
        return view('front/Quienes somos');
    }
    public function acercade(): string
    {
        $data["titulo"]="acercade";
        echo view("front/head",$data);
        return view('front/Acerca de');
    }
    public function registro(): string
    {
        $data["titulo"]="registro";
        echo view("front/head",$data); 
        return view('back/usuario/Registro');
    }
    public function login(): string
    {
        $data["titulo"]="login";
       echo view("front/head",$data);
        return view('back/usuario/Login');
    }
    public function cards(): string
    {
        $data["titulo"]="cards";
        echo view("front/head",$data);
        return view('front/Cards');
    }
}
