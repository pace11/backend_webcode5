<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostsResource;
use App\Models\Posts;
use App\Models\Tags;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all()->sortByDesc('updated_at');
        $response = [
            'status' => '200',
            'message' => 'Ok',
            'data' => PostsResource::collection($posts)
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $alias
     * @return \Illuminate\Http\Response
     */
    public function show($alias)
    {
        $posts = Posts::where('alias', $alias)->first();

        if($posts) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => new PostsResource($posts)
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
     * Display the post related from tag and alias
     *
     * @param  int  $id
     * @param  string  $alias
     * @return \Illuminate\Http\Response
     */
    public function showPostsRelated($id, $alias)
    {
        $posts = Posts::where('tag_id', $id)->where('alias', '<>', $alias)->get();

        if($posts) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => PostsResource::collection($posts)
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
     * Display the post by tag_id 5 top post
     *
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function showPostsByTag($title)
    {   
        $tags = Tags::where('title', $title)->first();
        $posts = Posts::where('tag_id', $tags->id)->orderBy('created_at', 'desc')->take(5)->get();

        if($posts) {
            $response = [
                'status' => '200',
                'message' => 'Ok',
                'data' => PostsResource::collection($posts)
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
     * Display the post by limit.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByLimit($limit)
    {
        $posts = Posts::orderBy('created_at', 'desc')->take($limit)->get();
        $response = [
            'status' => '200',
            'message' => 'Ok',
            'data' => PostsResource::collection($posts)
        ];
        return response()->json($response, 200);        
    }


}
