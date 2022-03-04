@extends('layouts.header')
@section('content')
        <div class="container py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Total de Post.
                                        </p>
                                        <h5 class="font-weight-bolder mb-0">
                                            4
                                            <span class="text-success text-sm font-weight-bolder">+ 5 esta semana</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Me gusta en Post</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            70
                                            <span class="text-success text-sm font-weight-bolder">+14 hoy</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            +3,462
                                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                                        <h5 class="font-weight-bolder mb-0">
                                            $103,430
                                            <span class="text-success text-sm font-weight-bolder">+5%</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                        <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @if (session('message'))
                <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <div class="alert alert-info text-white alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="btn-close align-top" data-bs-dismiss="alert" aria-label="Close"
                                    style="color:white;"><span class="align-top" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                </div>
                @endif
            <div class="row my-4">
                <div class="col-lg-9 col-md-6 mb-md-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Tus Post</h6>
                                </div>
                                <div class="col-lg-6 col-7" style="text-align: right;">
                                    <a href="/post/create" class="btn bg-gradient-dark w-auto me-1 mb-0">Crear Articulo</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="col-md-1 col-xs-1">#</th>
                                            <th class="col-md-2 col-xs-2">Titulo</th>
                                            <th class="col-md-2 col-xs-2">Estado</th>
                                            <th class="col-md-2 col-xs-2">Categoria</th>
                                            <th class="col-md-2 col-xs-2">Fecha</th>
                                            <th class="col-md-2 col-xs-2">acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <th class="col-md-1 col-xs-1" style="font-size: small; text-align:center">
                                                    {{ $post->id }}</th>
                                                <td class="col-md-2 col-xs-2" style="font-size: small;"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $post->subtitulo }}">{{ $post->name }}</td>
                                                <td class="col-md-2 col-xs-2" style="font-size: small; text-align:center;">
                                                    @if ($post->status == '2') <span class="badge bg-gradient-info">Publicadpo</span> @else <span class="badge bg-gradient-secondary">Borrador</span> @endif</td>

                                                <td class="col-md-2 col-xs-2" style="font-size: small;text-align:center;">
                                                    <span
                                                        class="badge bg-gradient-secondary">{{ $post->category->name }}</span>
                                                </td>
                                                <td class="col-md-2 col-xs-2 text-center" style="font-size: small;">
                                                    {{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                                                <td class="col-md-2 col-xs-2 text-center" >
                                                    <div class="btn-group dropdown">
                                                        <button type="button"
                                                            class="btn bg-gradient-default dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                        </button>
                                                        <ul class="dropdown-menu px-2 py-3"
                                                            aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="post/{{ $post->id }}?ruta=home">Ver</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="post/{{ $post->id }}/edit">Editar</a></li>
                                                            <li><a class="dropdown-item border-radius-md"
                                                                    href="javascript:;">Eliminar</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                               <div class="row">
                                   <div class="col-sm-5 mx-auto text-center">
                                    {{ $posts->links() }}
                                   </div>
                               </div>
                                      
                                     <style>
                                         .hidden
                                         {
                                             display:none;
                                         }
                                     </style>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Tags</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                <span class="font-weight-bold">{{ $qtag }}</span> en total
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <div class="timeline-block mb-3">
                                    <div class="timeline-content">
                                        @foreach ($tags as $tag)
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">#{{ $tag->name }}</h6>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6>Category</h6>
                            <p class="text-sm">
                                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                                <span class="font-weight-bold">{{ $qcat }}</span> en total
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                <div class="timeline-block mb-3">
                                    <div class="timeline-content">
                                        @foreach ($categories as $category)
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">.{{ $category->nombre }}
                                            </h6>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

