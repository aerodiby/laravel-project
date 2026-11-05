<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $title = 'About';
        $nama = 'Mohammad Safaraz Lasono';
        $kelas = 'XI PPLG 1';
        $hobby = 'Bermain Game';
        $repository = 'Aerodiby (https://github.com/aerodiby)';
        return view('Admin.about', ['title' => $title, 'nama' => $nama, 'kelas' => $kelas, 'hobby' => $hobby, 'repository' => $repository]);
    }
    }
