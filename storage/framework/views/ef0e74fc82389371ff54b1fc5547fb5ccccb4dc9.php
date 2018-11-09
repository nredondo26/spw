<?php $__env->startSection('contet'); ?>
<section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Advanced Tables</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="<?php echo e(URL::to('welcome')); ?>">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                 

                        <section class="panel">
                            <!--<header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Basic with Table Tools</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th class="hidden-phone">Engine version</th>
                                            <th class="hidden-phone">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center hidden-phone">4</td>
                                            <td class="center hidden-phone">X</td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center hidden-phone">5</td>
                                            <td class="center hidden-phone">C</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center hidden-phone">5.5</td>
                                            <td class="center hidden-phone">A</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>-->

                            <div class="row">
                               <div id="centrador" class="container row " >
                                   <img  src="<?php echo e(asset('assets/images/logoletra.png')); ?>" class="img-responsive" style=" width: 40%;">
                                </div>     
                           </div>

                        </section>
  
                    <!-- end: page -->
                </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>