<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Content;

class TestController extends Controller
{
    public function getBestContents()
    {
        $response = Content::select('id', 'image', 'price', 'discount', 'duration', 'cate_sub', 'title')
            ->whereRaw('id > 10')
            ->get();

        return response()->json($response);
    }
    public function getRecommendContents()
    {
        $response = Content::select('id', 'image', 'price', 'discount', 'duration', 'cate_sub', 'title')
            ->whereRaw('id <= 10')->get();

        return response()->json($response);
    }
    public function getContentDetail($id)
    {
        $response = Content::find($id);

        return response()->json($response);
    }



    public function index()
    {
    }
    public function store()
    {
    }
    public function show()
    {
    }
    public function update()
    {
    }
    public function destroy()
    {
    }
}
