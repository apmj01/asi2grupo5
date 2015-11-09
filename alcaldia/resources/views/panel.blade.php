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
              <li class="sub-menu active">
                  <a class="" href="index.html">
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
                      <li><a class="" href="#"> <i class="icon-plus"></i>
                      <span>Crear Usuario</span></a></li>
                      <li><a class="" href="#"> <i class="icon-search"></i>
                      <span>Buscar Usuario</span></a></li>
                <li><a class="" href="#"> <i class="icon-refresh"></i>
                      <span>Actualizar usuario</span></a></li>      
                  </ul>
              </li>
               <li class="sub-menu">
                  <a href="/mercado" class="">
                      <i class="icon-shopping-cart"></i>
                      <span>Mercado</span>
                      
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="/cementerio:;" class="">
                      <i class="icon-move"></i>
                      <span>Cementerio</span>
                      
                  </a>
              </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-flag"></i>
                      <span>Desechos Solidos</span>
                      
                  </a>
              </li>
               <li class="sub-menu">
                  <a href="javascript:;" class="">
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
  <div class="row-fluid">
                <!--BEGIN METRO STATES-->
    <div class="metro-nav">
      
      <div class="metro-nav-block nav-block-orange">
          <a data-original-title="" href="/mercado">
            <i class="icon-shopping-cart"></i>
            <div class="status">Modulo Mercado</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-purple">
          <a data-original-title="" href="#">
            <i class="icon-move"></i>
            <div class="status">Modulo Cementerio</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-blue">
          <a data-original-title="" href="#">
            <i class="icon-flag"></i>
            <div class="status">Modulo Desechos Solidos</div>
          </a>
      </div>
      <div class="metro-nav-block nav-block-green">
          <a data-original-title="" href="#">
            <i class="icon-sitemap"></i>
            <div class="status">Modulo de Estado Familiar</div>
          </a>
      </div>
          
    </div>
    <div class="space10"></div>
                <!--END METRO STATES-->
  </div>
            <!-- END PAGE CONTENT-->    

         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
     


   @stop