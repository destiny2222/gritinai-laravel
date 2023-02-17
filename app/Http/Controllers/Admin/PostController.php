<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRquest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::select('id', 'name')->get();
        $tag = Tag::select('id', 'name')->get();
        $blog = Post::orderBy('id', 'desc')->get();
        return view('admin.post.index', compact('blog', 'tag', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tag = Tag::select('id', 'name')->get();
        return view('admin.post.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRquest $request)
    {
        //
        if($request->createNewBlog()){
            Alert::success('success','new blog added');
            return redirect(route('admin.blog.index'));
            // return redirect(route('blog.index'))->with('status', 'Successfully add new BLog');
        }
        // return redirect()->with('error', 'An error occurred!');
        Alert::error('error','An error occurred!');
        return back();
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
        //
        try{
            $blog = Post::findOrFail($id);
            return view('admin.post.edit', compact('blog'));
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            
            $blog = Post::findOrFail($id);
            $blogcategory  = $request->input('category_id');
            $blog->update([
              'title'=>$request->input('title'),
              'author'=>$request->input('author'),
              'body'=>$request->input('body'),
              'category_id'=>$blogcategory,
              'slug'=>Str::slug($request->input('title')),
              'image'=>update_image('blogger',$blog->image , 'image'),
            ]);
            Alert::success('success', 'Updated Successful');
            return redirect(route('admin.blog.index'));
          }catch(\Exception $exception){
              Log::error($exception->getMessage());
              Alert::error('error', 'Oops something went wrong');
              return back();
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $blog = Post::findOrFail($id);
            $blog->delete();
            Alert::success('success', 'Delete Successfully');
            return redirect()->route('admin.blog.edit');
        } catch (\Exception $exception) {
            Log::info($exception->getMessage());
            Alert::error('error', 'Something Went Worry');
            return back();
        }
    }
}
