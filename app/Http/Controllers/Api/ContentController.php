<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContentChild;
use App\Models\ContentParent;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $parent = ContentParent::get();

        $data = [];

        foreach ($parent as $key => $value) {
            $data[] = [
                'parent' => $value,
                'child' => $this->childs($value->id)
            ];
        }

        return response()->json([
            'success' => true,
            'message' => 'Success load data',
            'data'  => $data,
        ], 200);
    }

    public function childs($parent)
    {
        $child = ContentChild::where('contentparentid', $parent)
            ->get();

        return $child;
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
        //
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
