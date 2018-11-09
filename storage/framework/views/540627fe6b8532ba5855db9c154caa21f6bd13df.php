<!doctype html>
<html class="fixed" lang="<?php echo e(app()->getLocale()); ?>">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>MIRROR</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="<?php echo e(asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light')); ?> " rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <?php echo Html::style('assets/vendor/bootstrap/css/bootstrap.css'); ?>

        <?php echo Html::style('assets/font-awesome/css/font-awesome.css'); ?>

        <?php echo Html::style('assets/vendor/magnific-popup/magnific-popup.css'); ?>

        <?php echo Html::style('assets/vendor/bootstrap-datepicker/css/datepicker3.css'); ?>

        <?php echo e(Html::favicon('favicon.ico')); ?>


        

        <!-- Specific Page Vendor CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/select2/select2.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/theme.css')); ?>" />

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/skins/default.css')); ?>" />

        <!-- Head Libs -->
        <?php echo e(Html::script('assets/vendor/modernizr/modernizr.js')); ?>

  

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="#" class="logo">
                        <img src="<?php echo e(asset('assets/images/logoletra1.png')); ?>" height="35" alt="Porto Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    
            
                    <span class="separator"></span>
            
                    <ul class="notifications">
                        
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge">10</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Alerts
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-thumbs-down bg-danger"></i>
                                                </div>
                                                <span class="title">Server is Down!</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-lock bg-warning"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-signal bg-success"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2014</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="<?php echo e(asset('assets/images/logop.png')); ?>" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo e(asset('assets/images/!logged-user.jpg')); ?>" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <?php if(Auth::guard('usuarios')->check()): ?>
                                   <?php echo e(Auth::guard('usuarios')->user()->nombre); ?>

                                <?php endif; ?>
                                <!--<span class="role">administrator</span>-->
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Perfil</a>
                                </li>

                                <li>
                                   
                                   <form method="POST" action="<?php echo e(route('logout')); ?>">
                                   <?php echo e(csrf_field()); ?>

                                   <input type="hidden" id="custId" name="guard" value="usuarios">
                                     <button type="submit" class="btn btn-default submit"><i class="fa fa-power-off"></i> Logout</button>
                                  </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title" >  
                          Navegación
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="<?php echo e(URL::to('welcome' )); ?>">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>

                                    <?php if($dispositivos->count()): ?>  
                                    <?php $__currentLoopData = $dispositivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dispo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <li class="nav-parent">
                                        <a>
                                            <i class=" fa fa-mobile" aria-hidden="true"></i>
                                            <span><?php echo e($dispo->nombre); ?></span>
                                        </a>

                                        <ul class="nav nav-children">
                                            <li >
                                                <a href="<?php echo e(URL::to('whatsapp/'.$dispo->id )); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp;WhatsApp</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(URL::to('mensajes/'.$dispo->id )); ?>"><i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;Mensajes</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(URL::to('llamadas/'.$dispo->id )); ?>"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;Llamadas</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(URL::to('contactos/'.$dispo->id )); ?>"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Contactos</a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(URL::to('ubicacion/'.$dispo->id )); ?>"><i class="fa fa-street-view" aria-hidden="true"></i>&nbsp;Ubicacion</a>
                                            </li>
                                            
                                        </ul>
                                    </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                    <?php endif; ?>

                                </ul>
                            </nav>
                            
                        </div>
                
                    </div>
                
                </aside>
                <!-- end: sidebar -->

                  <?php echo $__env->yieldContent('contet'); ?>
            
            </div>

        </section>

        <!-- Vendor -->
        <?php echo e(Html::script('assets/vendor/jquery/jquery.js')); ?>

        <?php echo e(Html::script('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')); ?>

        <?php echo e(Html::script('assets/vendor/bootstrap/js/bootstrap.js')); ?>

        <?php echo e(Html::script('assets/vendor/nanoscroller/nanoscroller.js')); ?>

        <?php echo e(Html::script('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>

        <?php echo e(Html::script('assets/vendor/magnific-popup/magnific-popup.js')); ?>

        <?php echo e(Html::script('assets/vendor/jquery-placeholder/jquery.placeholder.js')); ?>


        <!-- Specific Page Vendor -->
        <?php echo e(Html::script('assets/vendor/select2/select2.js')); ?>

        <?php echo e(Html::script('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')); ?>

        <?php echo e(Html::script('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')); ?>

        <?php echo e(Html::script('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')); ?>

        
        <!-- Theme Base, Components and Settings -->
        <?php echo e(Html::script('assets/javascripts/theme.js')); ?>

                
        <!-- Theme Initialization Files -->
        <?php echo e(Html::script('assets/javascripts/theme.init.js')); ?>


        <!-- Examples -->
        <?php echo e(Html::script('assets/javascripts/tables/examples.datatables.default.js')); ?>

        <?php echo e(Html::script('assets/javascripts/tables/examples.datatables.row.with.details.js')); ?>

        <?php echo e(Html::script('assets/javascripts/tables/examples.datatables.tabletools.js')); ?>


        <?php echo e(Html::script('assets/javascripts/maps/examples.gmap.js')); ?>

        <?php echo e(Html::script('http://maps.google.com/maps/api/js?sensor=false')); ?>

        <?php echo e(Html::script('assets/vendor/gmaps/gmaps.js')); ?>


    </body>
</html>
