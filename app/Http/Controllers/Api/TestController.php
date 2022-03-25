<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function getBestContents()
    {
        $response = Content::select('id', 'image', 'price', 'discount', 'duration', 'love_num', 'review_num', 'cateSub', 'category', 'title')
            ->whereRaw('id > 10')
            ->get();

        return response()->json($response);
    }
    public function getRecommendContents()
    {
        $response = Content::select('id', 'image', 'price', 'discount', 'duration', 'love_num', 'review_num', 'cateSub', 'category', 'title')
            ->whereRaw('id <= 10')
            ->get();

        return response()->json($response);
    }
    public function getContentDetail($id)
    {
        $response = Content::find($id);

        return response()->json($response);
    }
    public function getSeach(Request $request)
    {
        $cateMain  = $request->input('cateMain');
        // $cateSub   = $request->input('cateSub');
        // $query = $request->input('query');
        // $day = $request->input('day');
        // $time = $request->input('time');
        // $tType = $request->input('tType');
        // $region = $request->input('region');
        // $regionMain = $request->input('regionMain');
        // $classTypeCode = $request->input('classTypeCode');

        $tuor = User::select('name')->where('id', '=', 'user_id');

        $response = Content::select('id', 'title', 'onedayclass', 'class_type', 'love_num', 'review_num', 'user_id', 'price', 'duration', 'rate');
        if ($cateMain) $response = $response->where('cateMain', 'like', $cateMain);

        $response = $response->get();
        return response()->json(['category' => $cateMain, 'content_list' => $response]);
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
