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
                                <?php $__currentLoopData = $chats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><span><?php echo e($object->nombre); ?></span></li>
                                <li><span><?php echo e($object->numero); ?></span></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        
                                <h2 class="panel-title">Chat de <?php echo e($object->numero); ?></h2>
                            </header>
                            <div class="panel-body">
                                
                            <div class="panel panel-accordion">
                                                    
                               <div id="collapse1Two" class="accordion-body collapse in" aria-expanded="true" style="">
                                    <div class="panel-body">
                                        <div class="timeline timeline-simple mt-xlg mb-md">
                                            <div class="tm-body">
                                                
                                                <?php $__currentLoopData = $mensajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mensaj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <ol class="tm-items">
                                                    <li>
                                                        <?php if($mensaj->tipo_mensaje==1): ?>
                                                        <div class="tm-box" align="left">
                                                            <p class="text-muted mb-none"><?php echo e($mensaj->fecha); ?> &nbsp; <?php echo e($mensaj->hora); ?></p>
                                                            <p><font color="Black"><?php echo e($mensaj->texto); ?></font></p>
                                                        </div>
                                                        <?php else: ?>
                                                        <div class="tm-box" align="right" style="background-color:#dcf8c6;">
                                                            <p class="text-muted mb-none"><?php echo e($mensaj->fecha); ?> &nbsp; <?php echo e($mensaj->hora); ?></p>
                                                            <p><font color="Black"><?php echo e($mensaj->texto); ?></font></p>
                                                        </div>
                                                        <?php endif; ?>
                                                         
                                                    </li>
                                                </ol>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
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
<?php $__env->stopSection(); ?>




<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>