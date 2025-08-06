<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use phpDocumentor\Reflection\Types\Null_;

class PostsController extends BaseController
{
    public function __construct() {
        $this->middleware("auth", ["except"=> ["index","show"]]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("web.pages.homepage.index")->with("posts", Post::orderBy("created_at", "DESC")->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "mimes:jpg,png,jpeg|max:5048",
        ]);

        //dd($request->all(), $request->has("promoted_checkbox"), $request->input("promoted_checkbox"));

        if ($request->hasFile("image")) {
            $newImageName = uniqid() . "-" . $request->title . "." . $request->image->extension();

            $request->image->move(public_path("images"), $newImageName);
        } else {
            $newImageName = Null;
        }

        Post::create([
            "title"=> $request->input("title"),
            "description"=> $request->input("description"),
            "slug" => SlugService::createSlug(Post::class, "slug", $request->title),
            "image_path" => $newImageName,
            "user_id"=> Auth::user()->id,
            "is_promoted"=> $request->has("promoted_checkbox") ? 1 : 0
        ]);

        return redirect("/blog")->with("message","Your post has been added!");
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view("blog.show")->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('blog.edit')->with('post', Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
        ]);

        Post::where('slug', $slug)->update([
            "title"=> $request->input("title"),
            "description"=> $request->input("description"),
            "slug" => SlugService::createSlug(Post::class, "slug", $request->title),
            "user_id"=> Auth::user()->id,
            "is_promoted"=> $request->has("promoted_checkbox") ? 1 : 0
        ]);

        return redirect("/blog")->with("message","Your post has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $post = Post::where("slug", $slug)->first();
        $post->delete();
        return redirect("/blog")->with("message","Your post has been deleted!");
    }
}
