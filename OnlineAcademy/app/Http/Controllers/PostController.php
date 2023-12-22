<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $post;
    public function __construct(Post $post){
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.post',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'category'=>'required',
            'name'=>'required|string',
            'short_description'=>'required|string',
            'long_description'=>'required|string',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        $post= new Post;
        $post->category_id=$data['category'];
        $post->name=$data['name'];
        $post->short_description=$data['short_description'];
        $post->long_description=$data['long_description'];

        if($request->hasFile('image')){
            $file=$request->file('image')->store('uploads','public');
        }
        $post->image=$file;
        $post->save();

        return redirect()->back()->with('success',"Successfully added new post");
        
    }
    public function postPerCategory($category){
        $categories=Category::all();
        $category=Category::where('id',$category)->firstOrFail();
        $posts=$category->posts()->paginate(4);
        return view('display.blogPost',['posts'=>$posts,'categories'=>$categories]);
    
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('display.post',['post'=>$post]);
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
