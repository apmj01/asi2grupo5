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

<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Formulario para nuevo Usuario</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->

                            <form class="cmxform form-horizontal" id="commentForm" method="get" action="#">
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Nombre (requerido)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="name" minlength="2" type="text" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">E-Mail (requerido)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="email" name="email" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="curl" class="control-label">URL (optional)</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="url" name="url" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="ccomment" class="control-label">Your Comment (required)</label>
                                    <div class="controls">
                                        <textarea class="span6 " id="ccomment" name="comment" required></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button class="btn" type="button">Cancel</button>
                                </div>


                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
             @stop