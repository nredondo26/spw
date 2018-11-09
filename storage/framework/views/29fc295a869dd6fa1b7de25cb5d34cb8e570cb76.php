<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Ubicacion</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?php echo e(URL::to('welcome' )); ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Ubicacion</span></li>
                                <?php $__currentLoopData = $nombre_dispo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><span><?php echo e($object->nombre); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                    
                            <a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                
                    <section class="panel">
                            
                    <div class="row">
                        <div class="col-md-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Basic</h2>
                                </header>
                                <div class="panel-body">
                                    <div id="gmap-basic" style="height: 500px; width: 100%;"></div>
                                </div>
                            </section>
                        </div>

                        <div class="col-md-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="fa fa-caret-down"></a>
                                        <a href="#" class="fa fa-times"></a>
                                    </div>

                                    <h2 class="panel-title">Basic with Markers</h2>
                                </header>
                                <div class="panel-body">
                                    <div id="gmap-basic-marker" style="height: 500px; width: 100%;"></div>
                                </div>
                            </section>
                        </div>
                        
                    </div>

               </section>
  
                    <!-- end: page -->
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>