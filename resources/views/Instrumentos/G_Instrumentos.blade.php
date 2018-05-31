@extends('layouts.app')
    @section('customcss')

    @endsection
@section('content')
@include('Instrumentos.AgregarInstrumentos')
@include('Instrumentos.ModificarInstrumentos')


<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                            <div class="card-header" data-background-color="blue">
            <i class="fa fa-question quest" data-toggle="tooltip"  data-html="true" data-placement="bottom" title="Gestiones los Intrumentos que manejara en el lapso"></i>
                                
                                <h4 class="title">Gestion de Instrumentos</h4>
                                <p class="category">Lista de Instrumentos</p>
                            </div> <!--Fin card header-->

                        <section class="content-header">
                          <ol class="breadcrumb">
                            <li>
                                <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Gestion de Instrumentos
                            </li>
                          </ol>
                        </section><hr>
                            <div class="card-content">
                                    <button type='button' class='col-md-offset-11 btn btn-primary btn-xs' data-toggle='modal' data-target='#ModalAgregar'> 
                                        Agregar
                                    </button>
                        @include('flash::message')
                                
                                @include('Instrumentos.ListarInstrumentos')
                   </div><!--card-->
                </div><!--col-->
            </div><!--row-->
        </div><!--container--> 
    </div><!--content--> 
</div><!--content--> 
@endsection

@section('customjs')

<script>
    function verifico(check){
        {{-- id="eliminar" onclick="verifico(this)" --}}
        if (confirm("¿Desea Eliminar el Instrumento?\nRecuerde que esto puede Traer perdidade informacion") == true) {
        } else {
            event.preventDefault();        
        }
    }
</script>
@endsection