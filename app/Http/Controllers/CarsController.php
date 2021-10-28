<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Car::latest()->paginate(3);
        return view('bbs.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            // The user is logged in...
            return view('bbs.create');
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $post = new Car();
            $this->validate($request, (['name'=>'required|min:2','category'=>'required|min:2','price'=>'required|min:2','image'=>'required','shape'=>'required|min:2','company'=>'required|min:2', 'year'=>'required|min:2']));
            $post->name=$request->name;
            $post->year=$request->year;
            $post->company=$request->company;
            $post->category=$request->category;
            $post->shape=$request->shape;
            $post->price=$request->price;
            $post->user_id=auth()->user()->id;
            if($request->hasFile('image')){
                $path = time().'_'.$request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/images', $path);
                $post->image=$path;
            }
            $post->save();
            return redirect()->route('cars.index');
        }
        
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $page = $request->page;
        $post = Car::find($id);
        return view('bbs.show',['post'=>$post,'page'=>$page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (Auth::check()) {
            $page = $request->page;
            $post = Car::find($id);
            return view('bbs.edit',['post'=>$post,'page'=>$page]);
        }
        return redirect()->route('login');
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
        if (Auth::check()) {
            $page = $request->page;
            $post = Car::find($id);
            $this->validate($request, (['name'=>'required|min:2','category'=>'required|min:2','image'=>'required','price'=>'required|min:2','shape'=>'required|min:2','company'=>'required|min:2', 'year'=>'required|min:2']));
            $post->name=$request->name;
            $post->year=$request->year;
            $post->company=$request->company;
            $post->category=$request->category;
            $post->shape=$request->shape;
            $post->price=$request->price;
            $post->user_id=auth()->user()->id;
            if($request->hasFile('image')){
                $path = time().'_'.$request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/images', $path);
                $post->image=$path;
            }
            $post->save();
            return redirect(route('cars.show',['post'=>$id,'page'=>$page]));
        }
    return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Auth::check()) {
            $post=Car::findOrFail($id);
            $post->delete();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
            if($post->image){
                $path = 'public/images/';
                Storage::delete($path.$post->image);
            }
            return redirect()->route('cars.index');
        }
       return redirect()->route('login');
    }
}