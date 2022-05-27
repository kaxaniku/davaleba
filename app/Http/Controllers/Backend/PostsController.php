<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Posts;
use App\Http\Requests\BackendPostsRequest;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $post = Posts::orderBy('id', 'DESC')->paginate(5);

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
        $slug = Str::slug($title);

        $data = [
            'title' => $title,
            'S_text' => $S_text,
            'text' => $text,
            'slug' => $slug
        ];

        if ($request->has('img') && $request->file('img') != null) {
            $img = $request->file('img');

            $Folder = 'public/images/';

            $imgName = str_replace('' , '_' , $title) . '_' . time() . '.' . $img->getClientOriginalExtension();

            $img->storeAs($Folder, $imgName);

            $data['img'] = $imgName;
        }


        Posts::create($data);

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
        $post = Posts::where('id', $id)->first();

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
        $slug = Str::slug($title);

        Posts::where('id', $id)->update([
            'title' => $title,
            'text' => $text,
            'S_text' => $S_text,
            'slug' => $slug
        ]);

        if ($request->has('img') && $request->file('img') != null) {
            $img = $request->file('img');

            $Folder = 'public/images/';

            $imgName = str_replace('' , '_' , $title) . '_' . time() . '.' . $img->getClientOriginalExtension();

            $img->storeAs($Folder, $imgName);

            Posts::where('id', $id)->update([
                'img' => $imgName,
            ]);
        }

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
        Posts::destroy($id);
        return redirect(route('Backend.posts'));
    }
}
