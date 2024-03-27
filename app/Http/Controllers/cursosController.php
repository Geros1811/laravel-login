<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursosController extends Controller
{
    public function Iso()
    {
        return view('cursos.Iso');
    }

    public function Sap()
    {
        return  view('cursos.Sap');
    }

    public function HSE()
    {
        return  view('cursos.HSE');
    }

    public function Excel()
    {
        return  view('cursos.Exel');
    }

    public function Office()
    {
        return  view('cursos.Office');
    }

    public function Calidad()
    {
        return  view("cursos.Calidad");
    }

    public function Logistica()
    {
        return  view("cursos.Logistica");
    }

    public function Ingeneria()
    {
        return  view("cursos.Ingeneria");
    }

    public function Ambiental()
    {
        return  view("cursos.Ambiental");
    }

    public function Six_sigma()
    {
        return view('cursos/Six_sigma');
    }

    public function Administracion()
    {
        return  view('cursos/Administracion');
    }

    public function Inocuidad()
    {
        return  view('cursos.Inocuidad');
    }
}
