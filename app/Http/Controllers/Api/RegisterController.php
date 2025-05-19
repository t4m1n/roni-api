<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            // 'password'      => 'required|min:8|confirmed',
            'nik'           => 'required|unique:users',
            // 'nohp'          => 'required|unique:users',
            'alamat'        => 'required',
            'tgl_lhr'       => 'required|date',
            'nama_keluarga' => 'required',
            'jkel'          => 'required'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create user
        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password),
            'nik'               => $request->nik,
            'nohp'              => $request->nohp,
            'alamat'            => $request->alamat,
            'tgl_lhr'           => $request->tgl_lhr,
            'nama_keluarga'     => $request->nama_keluarga,
            'jkel'              => $request->jkel,
        ]);

        //return response JSON user is created
        if ($user) {
            return response()->json([
                'success' => true,
                'user'    => $user,
            ], 200);
        }

        //return JSON process insert failed 
        return response()->json([
            'success' => false,
        ], 400);
    }
}
