
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Metro Lab</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   {!!Html::style('assets/bootstrap/css/bootstrap.min.css')!!}
   {!!Html::style('assets/bootstrap/css/bootstrap-responsive.min.css')!!}
   {!!Html::style('assets/bootstrap/css/bootstrap-fileupload.css')!!}
   {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}
   {!!Html::style('css/style.css')!!}
   {!!Html::style('css/style-responsive.css')!!}
   {!!Html::style('css/style-default.css')!!}
   {!!Html::style('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')!!}
   {!!Html::style('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')!!}

    {!!Html::style('assets/fancybox/source/jquery.fancybox.css')!!}
    {!!Html::style('assets/uniform/css/uniform.default.css')!!}
    {!!Html::style('assets/chosen-bootstrap/chosen/chosen.css')!!}
    {!!Html::style('assets/jquery-tags-input/jquery.tagsinput.css')!!}
    {!!Html::style('assets/clockface/css/clockface.css')!!}
    {!!Html::style('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')!!}
    {!!Html::style('assets/bootstrap-datepicker/css/datepicker.css')!!}
    {!!Html::style('assets/bootstrap-timepicker/compiled/timepicker.css')!!}
    {!!Html::style('assets/bootstrap-colorpicker/css/colorpicker.css')!!}
    {!!Html::style('assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css')!!}
    {!!Html::style('assets/bootstrap-daterangepicker/daterangepicker.css')!!}

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO 
               <a class="brand" href="index.html">
                   <img src="img/logo.png" alt="Metro Lab" />
               </a>-->
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
            
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                  
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Jhon Doe</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
  
      @yield('content')
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   {!!Html::script('js/jquery-1.8.3.min.js')!!}
   {!!Html::script('js/jquery.nicescroll.js')!!}
   {!!Html::script('assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js')!!}
   {!!Html::script('assets/jquery-slimscroll/jquery.slimscroll.min.js')!!}
   {!!Html::script('assets/fullcalendar/fullcalendar/fullcalendar.min.js')!!}
   {!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
    {!!Html::script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')!!}
    {!!Html::script('js/jquery.sparkline.js')!!}
    {!!Html::script('assets/chart-master/Chart.js')!!}
  

   <!--common script for all pages-->
    {!!Html::script('js/common-scripts.js')!!}
   <!--script for this page only-->

  
    {!!Html::script('js/easy-pie-chart.js')!!}
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/home-page-calender.js')!!}
    {!!Html::script('js/chartjs.js')!!}
   <!-- END JAVASCRIPTS --> 

     <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
    {!!Html::script('js/jquery-1.8.2.min.js')!!}
    {!!Html::script('assets/ckeditor/ckeditor.js')!!}
    {!!Html::script('assets/bootstrap/js/bootstrap-fileupload.js')!!}
    {!!Html::script('js/jquery.blockui.js')!!}

      <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
    {!!Html::script('assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')!!}
    {!!Html::script('assets/chosen-bootstrap/chosen/chosen.jquery.min.js')!!}
    {!!Html::script('assets/uniform/jquery.uniform.min.js')!!}
    {!!Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')!!}
    {!!Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')!!}
    {!!Html::script('assets/clockface/js/clockface.js')!!}
    {!!Html::script('assets/jquery-tags-input/jquery.tagsinput.min.js')!!}
    {!!Html::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')!!}
    {!!Html::script('assets/bootstrap-daterangepicker/date.js')!!}
    {!!Html::script('assets/bootstrap-daterangepicker/daterangepicker.js')!!}
    {!!Html::script('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')!!}
    {!!Html::script('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')!!}
    {!!Html::script('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')!!}
    {!!Html::script('assets/fancybox/source/jquery.fancybox.pack.js')!!}
      <!--common script for all pages
   
   <!--script for this page-->
    {!!Html::script('js/form-component.js')!!}

  <!-- END JAVASCRIPTS -->  


   
 
   
</body>
<!-- END BODY -->
</html>