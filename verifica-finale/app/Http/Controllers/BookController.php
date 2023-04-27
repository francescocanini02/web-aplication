<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Book;

class BookController extends Controller
{


    public function create(Request $request)
    {

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'max:255'],
            'title' => ['required', 'max:100'],
            'num_pages' => ['required', 'integer'],
            'abstract' => ['required', 'max:255'],
            'editor_id' => ['required', 'UNSIGNED BIG INTEGER'],
            'author_id' => ['required', 'UNSIGNED BIG INTEGER']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }



    }

    public function delete(Request $request, $id)
    {
       //DELETE http://localhost:8000/api/books/7

    }


    public function read(Request $request, $id)
    {
       //GET http://localhost:8000/api/books/3
    }


    public function update(Request $request, $id)
    {
        //PUT http://localhost:8000/api/books/22

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'title' => ['required', 'max:100'],
            'num_pages' => ['required', 'integer'],
            'abstract' => ['required', 'max:255'],
            'editor_id' => ['required', 'UNSIGNED BIG INTEGER'],
            'author_id' => ['required', 'UNSIGNED BIG INTEGER']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }
    }


}
