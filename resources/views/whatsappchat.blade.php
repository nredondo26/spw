@extends('theme')

@section('contet')
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>WhatsApp</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="{{URL::to('welcome' )}}">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>WhatsApp</span></li>
                                @foreach ($chats as $object)
                                <li><span>{{ $object->nombre }}</span></li>
                                <li><span>{{ $object->numero }}</span></li>
                                @endforeach
                            </ol>
                    
                            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                 
                    <div class="row">
                    <div class="col-sm-12">
                       <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Chat de {{$object->numero}}</h2>
                            </header>
                            <div class="panel-body">
                                
                            <div class="panel panel-accordion">
                                                    
                               <div id="collapse1Two" class="accordion-body collapse in" aria-expanded="true" style="">
                                    <div class="panel-body">
                                        <div class="timeline timeline-simple mt-xlg mb-md">
                                            <div class="tm-body">
                                                
                                                @foreach($mensajes as $mensaj)
                                                <ol class="tm-items">
                                                    <li>
                                                        @if($mensaj->tipo_mensaje==1)
                                                        <div class="tm-box" align="left">
                                                            <p class="text-muted mb-none">{{$mensaj->fecha}} &nbsp; {{$mensaj->hora}}</p>
                                                            <p><font color="Black">{{ $mensaj->texto }}</font></p>
                                                        </div>
                                                        @else
                                                        <div class="tm-box" align="right" style="background-color:#dcf8c6;">
                                                            <p class="text-muted mb-none">{{$mensaj->fecha}} &nbsp; {{$mensaj->hora}}</p>
                                                            <p><font color="Black">{{ $mensaj->texto }}</font></p>
                                                        </div>
                                                        @endif
                                                         
                                                    </li>
                                                </ol>
                                                @endforeach  
                                            </div>
                                        </div>
                                     </div>
                                 </div>
                            </div>

                            </div>
                        </section> 
                    </div>
                    </div>

                        

  
                    <!-- end: page -->
                </section>
@endsection



