<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PernyataanT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PernyataanTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = $request->user()->id;

        $data = PernyataanT::where('userid', $userId)
            ->where('statusenabled', 1)
            ->first();

        if (!$data) {
            return response()->json([
                'success' => true,
                'message' => 'Success load data',
                'data'  => [
                    "norec" => null,
                    "statusenabled" => null,
                    "userid" => $userId,
                    "status" => 0,
                    "created_at" => null,
                    "updated_at" => null
                ],
            ], 200);
            die();
        }

        return response()->json([
            'success' => true,
            'message' => 'Success load data',
            'data'  => $data,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = $request->user()->id;

        //set validation
        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $save = PernyataanT::create([
            'statusenabled'     => 1,
            'userid'            => $userId,
            'status'            => $request->status
        ]);

        if ($save) {
            return response()->json([
                'success' => true,
                'data'    => $save,
            ], 200);
        }

        return response()->json([
            'success' => false,
        ], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
