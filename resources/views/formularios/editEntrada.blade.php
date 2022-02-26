@extends('layouts.header')
@section('content')

<!-- The toolbar will be rendered in this container. -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col-sm-9">
                        <input type="text" name="titulo" class="form-control titulo" value="{{ $post->name }}"
                            placeholder="Titulo" aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-5">
                    <div class="col-sm-9">
                        <input type="text" name="subtitulo" class="form-control subtitulo"
                            value="{{ $post->subtitulo }}" placeholder="Subtitulo"
                            aria-describedby="passwordHelpInline">
                    </div>
                </div>
                <div class="row g-3 align-items-center mb-5">
                    <div class="col-sm-9">
                        <label for="">Categoria:</label>
                        <select name="category[]" class="form-control">
                            <option value="{{$post->category->id}}">{{$post->category->name}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="post-thumbnail-wrap mx-auto">
                    <img src="{{ asset('portadas/' . $post->image->url) }}">
                    <input type="file" value="{{$post->image->url}}" name="imagen" class="form-control">
                </div>
                <div class="row g-3 align-items-center mb-5">
                    <div class="col-sm-12 mx-auto">
                        <textarea id="descripcion" name="descripcion"
                            placeholder="[Descripción se verá en la página del curso, abajo de la Introducción.]">{{ $post->body }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-info">publicar</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- editor texarea --}}
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>
<script>
    ClassicEditor

        .create(document.querySelector('#editor'), {
            toolbar: ['bold', 'italic', 'link', 'undo', 'redo', 'numberedList', 'bulletedList']

        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#descripcion'), {


        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection 

    
