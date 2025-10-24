<?php

namespace App\Http\Controllers\Notas;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NotasController extends Controller
{
    public function index(Request $request)
    {
        // Obtenemos todas las notas junto con los datos del estudiante relacionado
        $notas = Nota::with('estudiante')->get();

        // Retornamos la vista 'notas.index' con la variable $notas
        return View::make('notas.index', compact('notas'));
    }
}

