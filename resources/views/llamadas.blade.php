@extends('theme')

@section('contet')
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Llamadas</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="{{URL::to('welcome' )}}">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Llamadas</span></li>
                                @foreach ($nombre_dispo as $object)
                                <li><span>{{ $object->nombre }}</span></li>
                                @endforeach
                            </ol>
                    
                            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                 

                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Basic with Table Tools</h2>
                            </header>
                            <div class="panel-body">
                                //contenido aca
                            </div>
                        </section>
  
                    <!-- end: page -->
                </section>
@endsection