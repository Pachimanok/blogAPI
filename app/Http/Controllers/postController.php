<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('formularios.createEntrada')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $request;
        foreach($request->category as $category);
        
        $user = $request->user; 
        $slug = Str::slug($request->titulo, '-');
        $post = new Post;
        $post->name = $request->titulo;
        $post->slug = $slug;
        $post->subtitulo = $request->subtitulo;
        $post->extract = $request->subtitulo;
        $post->body = $request->descripcion;
        $post->status = '2';
        $post->user_id = $user; 
        $post->category_id = $category;
        $post->save();

        $archivo = $request->File('imagen');
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();
        $imagen = Image::make($archivo);
        /* $imagen->resize(300,200); */ /* ancho,largo */
        $imagen->encode($extencion);
        $path = public_path('portadas/' . $name);
        $imagen->save($path);
        $post->image()->create([
            'url' => $name
        ]);

        
        Session::flash('message','Se creó correctamente el post '. $request->titulo);
        return Redirect::to('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vista = $_GET['ruta'];
        $user = Auth::user();

        if($vista != 'web'){

            $post = Post::find($id);
            $user = User::find($post->user_id)->name;
            $categoria = Category::find($post->category_id)->name;
            return view('formularios.verEntrada')->with('post',$post)->with('user',$user)->with('categoria',$categoria);

        }else{

            $post = Post::find($id);
            $user = User::find($post->user_id)->name;
            $categoria = Category::find($post->category_id)->name;
            $articulos = DB::table('posts')->where('category_id','=',$post->category_id)->where('id','!=',$post->id)->orderBy('id','DESC')->take(3)->get();
           
            return view('userView.verEntrada')->with('post',$post)->with('user',$user)->with('categoria',$categoria)->with('articulos',$articulos);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $user = User::find($post->user_id)->name;
        $categories = Category::all();
        return view('formularios.editEntrada')->with('post',$post)->with('user',$user)->with('categories',$categories);
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
        
        $user = Auth::user()->id;
        foreach($request->category as $category);

        $slug = Str::slug($request->titulo, '-');
        $post = Post::find($id);
        $post->name = $request->titulo;
        $post->slug = $slug;
        $post->subtitulo = $request->subtitulo;
        $post->extract = $request->subtitulo;
        $post->body = $request->descripcion;
        $post->status = '2';
        $post->user_id = $user; 
        $post->category_id = $category;
        $post->save();

        $archivo = $request->File('imagen');
        
        if($archivo == null){

            dd($archivo);

        }else{
            $archivo = $request->File('imagen');
            $extencion = $archivo->getClientOriginalExtension();
            $name = $archivo->getClientOriginalName();
            $imagen = Image::make($archivo);
            /* $imagen->resize(300,200); */ /* ancho,largo */
            $imagen->encode($extencion);
            $path = public_path('portadas/' . $name);
            $imagen->save($path);
            $post->image()->update([
                'url' => $name
        ]);

        }
      
        

        
        Session::flash('message','Se editó correctamente el post '. $request->titulo);
        return Redirect::to('home');
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
    }
}
