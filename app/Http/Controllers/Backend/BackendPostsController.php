<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostsModel;
use App\Http\Requests\BackendPostsRequest;

class BackendPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $post = PostsModel::orderBy('id', 'DESC')->get();

        $data = [
            'posts' => $post
        ];

        return view('Backend.posts.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BackendPostsRequest $request)
    {
        $title = $request->title;
        $S_text = $request->S_text;
        $text = $request->text;

        PostsModel::create([
            'title' => $title,
            'S_text' => $S_text,
            'text' => $text
        ]);

        return redirect()->route('Backend.posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostsModel::where('id', $id)->first();

        $data = [
            'post' => $post
        ];

        return view('Backend.posts.update')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BackendPostsRequest $request)
    {
        $title = $request->title;
        $S_text = $request->S_text;
        $text = $request->text;
        $id = $request->id;

        PostsModel::where('id', $id)->update([
            'title' => $title,
            'text' => $text,
            'S_text' => $S_text
        ]);

        return redirect(route('Backend.posts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostsModel::destroy($id);
        return redirect(route('Backend.posts'));
    }
}
