<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Landing;
use Exception;
use Illuminate\Http\Request;

class APIController extends Controller
{
    // public function index(){

    //     $landing = Landing::where('nama', 'Budi')->first();

    //     if(!$landing){
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'data tidak ditemukan'
    //         ]);
    //     }

    //     $data = [
    //         'status' => 'success',
    //         'data' => $landing
    //     ];

    //     return response()->json($data);
    // }

    public function index(){
        try {
            $landing = Landing::where('nama', 'Budi')->first();

            if(!$landing){
                throw new Exception('Data not found');
            }
                
            return ResponseFormatter::success([
                'user' => $landing
            ]);
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something went wrong',
                'error' => $error
            ], 'Error', 404);
        }

        
    }
}
