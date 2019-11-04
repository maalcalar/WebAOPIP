@extends('layouts.admin')

@section('title', 'Comunicados')

@section('contenido')
<!-- Page -->
<div class="page">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-12">
                <!-- Panel Standard Editor -->
                <form method="post" action="{{ route('insertarComunicados') }}" class="panel" autocompplete="off">
                    {{ csrf_field() }}
                    <div class="panel-heading">
                        <h3 class="panel-title">Nuevo comunicado</h3>
                    </div>
                    {!! $errors->first('titulo', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>:message</div>') !!}
                    {!! $errors->first('texto', '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>:message</div>') !!}
                    <div class="panel-body">
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" />
                            <label class="floating-label">Título</label>
                        </div>
                        <textarea id="summernote" data-plugin="summernote" name="texto">{{ old('texto') }}</textarea>
                    </div>
                    <div class="panel-footer">
                        <div class="form-group row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary" >Publicar</button>
                                <!--<button type="reset" class="btn btn-default btn-outline">Reiniciar</button>-->
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Panel Standard Editor -->
            </div>
            <div class="col-12">
                <!-- Panel Watchlist -->
                <div class="card card-shadow" id="widgetTable">
                    <div class="card-block p-30">
                    <h3 class="card-title">
                        <span class="text-truncate">Comunicados publicados</span>
                        <div class="card-header-actions">
                            <span class="red-600 font-size-24">{{ count($comunicados) }}</span>
                        </div>
                    </h3>
                    <form class="mt-25" action="#" role="search">
                        <div class="input-search input-search-dark">
                            <i class="input-search-icon wb-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" placeholder="Buscar.." />
                        </div>
                    </form>
                </div>
                <div class="h-350" data-plugin="scrollable">
                    <div data-role="container">
                        <!--<div class="toolbar-icons" id="user-options" hidden>
                            <a href="javascript:void(0)"><i class="icon wb-edit" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)"><i class="icon wb-eye" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)"><i class="icon wb-eye-close" aria-hidden="true"></i></a>
                            <a href="javascript:void(0)"><i class="icon wb-trash" aria-hidden="true"></i></a>
                        </div>-->
                        <div data-role="content">
                            <table class="table mb-0">
                                <tbody>
                                    @foreach ($comunicados as $comunicado)
                                    <tr>
                                        <td>{{ $comunicado->titulo }}</td>
                                        <td>
                                            <span class="icon wb-eye" aria-hidden="true"></span> {{ $comunicado->vistas }}
                                        </td>
                                        <td>
                                            <span class="icon wb-thumb-up" aria-hidden="true"></span> <span class="green-600"> {{ $comunicado->me_gusta }}</span>
                                            <span class="icon wb-thumb-down" aria-hidden="true"></span> <span class="red-600"> {{ $comunicado->no_me_gusta }}</span>
                                        </td>
                                        <!--<td>
                                            <button type="button" class="btn btn-icon btn-dark btn-pure" data-plugin="toolbar" data-toolbar="#user-options">
                                                <i class="icon wb-settings" aria-hidden="true"></i>
                                            </button>
                                        </td>-->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Panel Watchlist -->
        </div>
    </div>
    </div>
</div>
<!-- End Page -->
@endsection