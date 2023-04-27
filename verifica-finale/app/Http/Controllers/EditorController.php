<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;
use Illuminate\Support\Facades\Validator;

class EditorController extends Controller
{
    public function create(Request $request)
    {

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'name' => ['required', 'max:100'],
            'vat_number' => ['required', 'max:20']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }


    }

    public function delete(Request $request, $id)
    {
      //DELETE http://localhost:8000/api/editors/7

    }


    public function read(Request $request, $id)
    {
       //GET http://localhost:8000/api/editors/3
    }


    public function update(Request $request, $id)
    {
        //PUT http://localhost:8000/api/editors/22

        //https://laravel.com/docs/10.x/validation
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'name' => ['required', 'max:100'],
            'vat_number' => ['required', 'max:20']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }
    }


}
