<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Saff;
use App\Mail\Saffmail;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    //
    public function index(){
        $partner = Partner::orderBy('id', 'desc')->get();
        $blog = Post::orderBy('id', 'desc')->paginate(3);
        return view('frontend.index', compact('partner','blog'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function services(){
        return view('frontend.services');
    }

    public function blogdetails(Post  $post){
        $blogtag = Tag::latest('id')->get();
        $recentblog = Post::latest('id')->get();
        $categorie = Category::latest('id')->get();
        return view('frontend.blog-details', compact('post','blogtag','recentblog','categorie'));
    }

    public function blog(){
        $blog = Post::orderBy('id', 'desc')->get();
        return view('frontend.blog', compact('blog'));
    }

    public function mentorform(){
        return view('frontend.mentor');
    }

    public function menteeForm(){
        return view('frontend.mentee');
    }
     
    public function idea(){
        return view('frontend.idea');
    }

    public function learn(){
        return view('frontend.learn');
    }

    public function saff(){
        return view('frontend.saff');
    }

    public function saffStore(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'file'=>['nullable', 'image', 'mimes:png,jpg'],
            'company'=>['required','string'],
            'training'=>['required','string'],
            'no_of_staff'=>['required','string'],
            'specify'=>['required','string'],
            'location'=>['required','string'],
            'start_date'=>['required','date'],
            'end_date'=>['required','string'],
            'body'=>['required','string'],
        ]);
            if($request->hasFile('image')) {
                $deposit_image = time().'.'.$request->image->extension();
                $request->image->move(public_path('deposit'),$deposit_image);
            }
        try{
            $saff = Saff::create([
                'email'=>$request->input('email'),
                'file'=>$deposit_image,
                'company'=>$request->input('company'),
                'training'=>$request->input('training'),
                'no_of_staff'=>$request->input('no_of_staff'),
                'specify'=>$request->input('specify'),
                'location'=>$request->input('location'),
                'start_date'=>$request->input('start_date'),
                'end_date'=>$request->input('body'),
                'body'=>$request->input('end_date'),
            ]);
            Mail::to('gritinai@gmail.com')->send(new Saffmail($saff));
            Alert::info('success', 'Successfully Send.');
            back();
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            Alert::error('error', 'Something went worry');
            back();
        }
    }

}
