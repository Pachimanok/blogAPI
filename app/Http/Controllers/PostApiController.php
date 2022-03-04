<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = DB::table('posts')->join('images','images.imageable_id','=','posts.id')
        ->join('categories','categories.id','=','posts.category_id')->select('posts.id','posts.name','posts.subtitulo','posts.body','images.url','categories.nombre')->get();
        return $post;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $archivo = $request->File('imagen');
        $extencion = $archivo->getClientOriginalExtension();
        $name = $archivo->getClientOriginalName();
        $imagen = Image::make($archivo);
        $imagen->encode($extencion);
        $path = public_path('portadas/' . $name);
        $url = 'http://rail.ar/blog/portadas/'.$name;
        $imagen->save($path);
        
        $post = new Post;
        foreach($request->category as $category);
        $user = $request->user; 
        $slug = Str::slug($request->titulo, '-');
        $post->name = $request->titulo;
        $post->slug = $slug;
        $post->subtitulo = $request->subtitulo;
        $post->extract = $request->subtitulo;
        $post->body = $request->descripcion;
        $post->status = '2';
        $post->user_id = $user; 
        $post->category_id = $category;
        $post->save();
        $post->image()->create([
            'url' => $url
        ]);
        if($_GET['vista'] == 'web'){
            Session::flash('message','Se creó correctamente el post '. $request->titulo);
            return Redirect::to('home');
        }else{
            return response($post);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = DB::table('posts')->join('images','images.imageable_id','=','posts.id')
        ->join('categories','categories.id','=','posts.category_id')
        ->select('posts.name','posts.subtitulo','posts.body','images.url','categories.nombre')->where('posts.id','=',$id)->get();
        return $post;

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
