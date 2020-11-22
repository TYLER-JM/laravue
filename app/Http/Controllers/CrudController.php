<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CrudController extends Controller
{
    public function index()
    {
        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function create(Generator $faker)
    {
        $crud = new Crud();
        $crud->name = $faker->lexify('???????');
        $crud->color = $faker->boolean ? 'red' : 'green';
        $crud->save();
    }

    public function update(Request $request, $id)
    {
        $crud = Crud::findOrFail($id);
        $crud->color = $request->color;
        $crud->save();

        return response(null, Response::HTTP_OK);
    }
}
