<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Author;

class AuthorController extends Controller
{

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'name' => ['required', 'max:100'],
            'surname' => ['required', 'max:100']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }
    }


    public function delete(Request $request, $id)
    {
    //DELETE http://localhost:8000/api/authors/7

    }


    public function read(Request $request, $id)
    {
       //GET http://localhost:8000/api/authors/3
    }


    public function update(Request $request, $id)
    {
       //PUT http://localhost:8000/api/authors/22


       $validator = Validator::make($request->all(), [
        'id' => ['required'],
        'name' => ['required', 'max:100'],
        'surname' => ['required', 'max:100']
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors()
        ], 400);
    }
    }


}
