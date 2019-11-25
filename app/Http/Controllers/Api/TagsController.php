<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagsResource;
use App\Models\Tags;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all()->sortByDesc('updated_at');
        $response = [
            'status' => '200',
            'message' => 'Ok',
            'data' => TagsResource::collection($tags)
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $tags = Tags::where('title', $title)->first();
        if ($tags) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => new TagsResource($tags)
            ];
            return response()->json($response, 200);
        }
        $response = [
            'status' => '404',
            'message' => 'Not Found',
            'data' => []
        ];
        return response()->json($response, 404);
    }

    /**
     * Display the tags except specific title
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function showTagsExceptByTitle($title)
    {
        $tags = Tags::where('title', '<>', $title)->get();
        if ($tags) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => TagsResource::collection($tags)
            ];
            return response()->json($response, 200);
        }
        $response = [
            'status' => '404',
            'message' => 'Not Found',
            'data' => []
        ];
        return response()->json($response, 404);
    }
}
