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
                        
                                <h2 class="panel-title">Chats por Contactos</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Numero / Nombre</th>
                                            <th>fecha de creacion</th>
                                            <th>hora</th>
                                            <th>conversación</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($chats as $chat)
                                      <tr class="gradeX">
                                        <td>{{ $chat->id }}</td>
                                        <td>{{ $chat->numero }}</td>
                                        <td>{{ substr($chat->created_at,0,10) }}</td>
                                        <td>{{ substr($chat->created_at,11) }}</td>
                                        <td><a class="btn btn-small " href="{{ URL::to('whatsappchat/'.$chat->id) }}">Ver </a> </td>
                                      </tr>
                                     @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </section>
  
                    <!-- end: page -->
                </section>
@endsection



