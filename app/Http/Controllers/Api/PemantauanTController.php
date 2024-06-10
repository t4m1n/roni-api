<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PemantauanChild;
use App\Models\PemantauanT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemantauanTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userId = $request->user()->id;

        $data = PemantauanChild::join('pemantauan_parents', 'pemantauan_childs.pemantauanparentid', '=', 'pemantauan_parents.id')
            ->leftJoin('pemantauan_t', function ($join) use ($userId) {
                $join->on('pemantauan_childs.id', '=', 'pemantauan_t.pemantauanchildid')
                    ->where('pemantauan_t.statusenabled', '=', 1)
                    ->where('pemantauan_t.userid', '=', $userId);
            })
            ->where('pemantauan_childs.statusenabled', 1)
            ->select('pemantauan_childs.*', 'pemantauan_parents.description', 'pemantauan_t.norec', 'pemantauan_t.status', 'pemantauan_t.userid')
            ->get();

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
        DB::beginTransaction();

        $validatedData = $request->validate([
            'datas' => 'required|array',
            'datas.*.pemantauanchildid' => 'required',
            'datas.*.status' => 'required',
        ]);

        $userId = $request->user()->id;

        $dataToInsert = [];
        foreach ($validatedData['datas'] as $data) {
            $dataToInsert[] = [
                'pemantauanchildid' => $data['pemantauanchildid'],
                'status' => $data['status'],
                'statusenabled' => 1,
                'userid' => $userId,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        $delete = PemantauanT::where('userid', $userId)->delete();
        $insert = PemantauanT::insert($dataToInsert);

        if ($insert) {
            DB::commit();
            $response = response()->json([
                'success' => true,
                'message' => 'Success save data',
                'data'  => $dataToInsert,
            ], 200);
        } else {
            DB::rollBack();
            $response = response()->json([
                'success' => false,
                'message' => 'Failed save data',
                'data'  => null,
            ], 400);
        }

        return $response;
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
