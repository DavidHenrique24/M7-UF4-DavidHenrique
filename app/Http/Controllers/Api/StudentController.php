<?php
namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Obtiene todos los estudiantes
    public function index()
    {
        //
    }

    //Muestra uno nuevo
    public function store()
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:students',
            'phone' => 'required|digits:10',
            'language' => 'required|in:english,spanish,french'
            ]);

    }

    //Actualiza
    public function update()
    {
        //
    }

    //Actualiza parcialemnte
    public function updatePartial()
    {
        //
    }

    //Elimina
    public function destroy()
    {
        //
    }

}
