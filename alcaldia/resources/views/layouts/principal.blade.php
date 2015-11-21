
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
    {!!Html::style('assets/data-tables/DT_bootstrap.css')!!}

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
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu active">
                 <a class="" href="{!!URL::to('/panel')!!}">
                      <i class="icon-home"></i>
                      <span>Inicio</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-user"></i>
                      <span>Administrar usuario</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="{!!URL::to('/registro')!!}"> <i class="icon-plus"></i>
                      <span>Crear Usuario</span></a></li>
                      <li><a class="" href="{!!URL::to('/usuario')!!}"> <i class="icon-search"></i>
                      <span>Buscar Usuario</span></a></li>   
                  </ul>
              </li>
               <li class="sub-menu">
                  <a href="{!!URL::to('/mercado')!!}" class="">
                      <i class="icon-shopping-cart"></i>
                      <span>Mercado</span>
                      
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="/cementerio" class="">
                      <i class="icon-move"></i>
                      <span>Cementerio</span>
                      
                  </a>
              </li>
               <li class="sub-menu">
                  <a href="/desechos_solidos" class="">
                      <i class="icon-flag"></i>
                      <span>Desechos Solidos</span>
                      
                  </a>
              </li>
               <li class="sub-menu">
                  <a href="/estado_familiar" class="">
                      <i class="icon-sitemap"></i>
                      <span>Estado Familiar</span>
                 
                  </a>
              </li>

                  <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-signout"></i>
                      <span>Salir</span>
                 
                  </a>
              </li>

          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Metro Lab</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Dashboard
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
           
          
            
            <!-- BEGIN PAGE CONTENT-->
   @yield('content')
            <!-- END PAGE CONTENT-->    

         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
  
     
   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->
   
   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   {!!Html::script('js/jquery-1.8.3.min.js')!!}
   {!!Html::script('js/jquery.nicescroll.js')!!}
   {!!Html::script('assets/bootstrap/js/bootstrap.min.js')!!}

   {!!Html::script('assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js')!!} 
   {!!Html::script('js/jquery.blockui.js')!!}

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
 {!!Html::script('assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')!!}
 {!!Html::script('assets/clockface/js/clockface.js')!!}
 {!!Html::script('assets/fancybox/source/jquery.fancybox.pack.js')!!}
 {!!Html::script('assets/uniform/jquery.uniform.min.js')!!}
 {!!Html::script('assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')!!}
 {!!Html::script('assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js')!!}
 {!!Html::script('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')!!}
 {!!Html::script('assets/jquery-tags-input/jquery.tagsinput.min.js')!!}
 {!!Html::script('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')!!}
 {!!Html::script('assets/bootstrap-timepicker/js/bootstrap-timepicker.js')!!}
 {!!Html::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')!!}
 {!!Html::script('assets/bootstrap-daterangepicker/date.js')!!}
 {!!Html::script('assets/bootstrap-daterangepicker/daterangepicker.js')!!}
 {!!Html::script('assets/data-tables/jquery.dataTables.js')!!}
 {!!Html::script('assets/data-tables/DT_bootstrap.js')!!}


   <!--common script for all pages-->
    {!!Html::script('js/common-scripts.js')!!}
   <!--script for this page only-->
   
   {!!Html::script('js/dynamic-table.js')!!} 

  
   {!!Html::script('js/jquery.validate.min.js')!!}
   {!!Html::script('js/additional-methods.min.js')!!}
   {!!Html::script('assets/chosen-bootstrap/chosen/chosen.jquery.min.js')!!}
  
  {!!Html::script('js/form-validation-script.js')!!} 
  {!!Html::script('js/form-component.js')!!} 






   <!-- END JAVASCRIPTS --> 

   
</body>
<!-- END BODY -->

</html>