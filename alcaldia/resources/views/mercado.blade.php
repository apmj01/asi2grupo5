 @extends('layouts.principal')

 @section('content')


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
                  <li class="sub-menu">
                      <a class="" href="/panel">
                          <i class="icon-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-file"></i>
                          <span>Solicitudes</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">

                          <li><a class="" href="/mercado_solicitudes"> <i class="icon-plus"></i>Ingresar</a></li>
                          
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-legal"></i>
                          <span>Resoluciones</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="calendar.html">Calendar</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                          <li><a class="" href="chartjs.html">Chart Js</a></li>
                          <li><a class="" href="flot_chart.html">Flot Charts</a></li>
                          <li><a class="" href="gallery.html"> Gallery</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>Asignaciones</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_layout.html">Form Layouts</a></li>
                          <li><a class="" href="form_component.html">Form Components</a></li>
                          <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                          <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>
                      </ul>
                  </li>
           
              
                  <li>
                      <a class="" href="login.html">
                          <i class="icon-off"></i>
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
                   <!-- BEGIN THEME CUSTOMIZER-->
             
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Admin Mercado
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">SSM</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Administración de Mercado
                       </li>
                     
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
             <div class="row-fluid">
               <div class="metro-nav metro-fix-view">
    <div class="metro-nav-block nav-block-orange long"> <a data-original-title="" href="/mercado_solicitudes"> <i class="icon-file"></i>
      <div class="status">Solicitudes</div>
    </a> </div>
    <div class="metro-nav-block double nav-block-purple long"> <a data-original-title="" href="index.php?pagina=empleados"> <i class="icon-legal"></i>
      <div class="status">Resoluciones</div>
    </a> </div>
    <div class="metro-nav-block double nav-block-yellow long"> <a data-original-title="" href="index.php?pagina=proveedores"> <i class="icon-tasks"></i>
      <div class="status">Asignaciones</div>
    </a> </div>
  
  </div>
             </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   @stop