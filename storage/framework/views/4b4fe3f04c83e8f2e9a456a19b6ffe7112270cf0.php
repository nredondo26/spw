<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>WhatsApp</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?php echo e(URL::to('welcome' )); ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>WhatsApp</span></li>
                                <?php $__currentLoopData = $nombre_dispo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><span><?php echo e($object->nombre); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                                    <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <tr class="gradeX">
                                        <td><?php echo e($chat->id); ?></td>
                                        <td><?php echo e($chat->numero); ?></td>
                                        <td><?php echo e(substr($chat->created_at,0,10)); ?></td>
                                        <td><?php echo e(substr($chat->created_at,11)); ?></td>
                                        <td><a class="btn btn-small " href="<?php echo e(URL::to('whatsappchat/'.$chat->id)); ?>">Ver </a> </td>
                                      </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </section>
  
                    <!-- end: page -->
                </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>