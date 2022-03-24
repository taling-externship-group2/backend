<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Content;

class TestController extends Controller
{
    public function getBestContents()
    {
        $response = Content::select('id', 'title');

        return $response;
    }
    public function getRecommendContents()
    {
        $response = Content::all();

        return $response;
    }
    public function getContentDetail($id)
    {
        $response = Content::find($id);

        return $response;
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
