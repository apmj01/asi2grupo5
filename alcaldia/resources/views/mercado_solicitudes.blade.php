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
                      <a href="javascript:;" class="">
                          <i class="icon-file"></i>
                          <span>Solicitudes</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">

                          <li><a class="" href="Solicitudes.html"> <i class="icon-plus"></i>Ingresar</a></li>
                          
                          
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
                  <li >
                      <a class="" href="/panel" >
                          <i class="icon-undo"></i>
                          <span>Regresar</span>
                     
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
     <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Formulario de Solicitud </h4>
                            
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->


                          {!!Form::open(['class'=>'form-horizontal','route'=>'usuario.store', 'method'=>'POST'])!!}
                                  
                            <div class="control-group">
                              {!!Form::label('#', '# de Solicitud', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('nSolicitud',null,['class'=>'input-small','placeholder'=>'0000'])!!}
                              </div>
                            </div>

                            <div class="control-group">
                              {!!Form::label('nombre', 'Nombres', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('nombre',null,['class'=>'span6'])!!}                                        
                              </div>
                            </div>

                            <div class="control-group">
                              {!!Form::label('apellido', 'Apellidos', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('apellido',null,['class'=>'span6'])!!}                                        
                              </div>
                            </div>

                            <div class="control-group">
                              {!!Form::label('fecha', 'Fecha', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('tiempo', \Carbon\Carbon::now()->toDateString(),['class'=>'m-ctrl-medium', 'id'=>'dp1'])!!}
                              </div>
                            </div>

                            <div class="control-group">
                              {!!Form::label('hora', 'Hora', array('class' => 'control-label'))!!}
                              <div class="controls">
                              {!!Form::time('name', \Carbon\Carbon::now()->toTimeString(),['class'=>'input-small'])!!}
                              </div>
                            </div>
                         
                            <div class="control-group">
                              {!!Form::label('descripcion', 'Descripcion', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::textarea('descripcion',null,['class'=>'span6', 'rows'=>'3'])!!}                                        
                              </div>
                            </div>

                            <div class="control-group">
                                {!!Form::label('', 'Tipo Puesto', array('class' => 'control-label'))!!}
                                
                                <div class="controls">
                                  {!!Form::select('size', array('Cat1' => 'Categoria 1', 'Cat2' => 'Categoria 2'), null, ['class'=>'span6','placeholder' => 'Seleccionar...'])!!}
                           
                                </div>
                            </div>


                              <div class="control-group">
                                {!!Form::label('', 'Tipo Contrato', array('class' => 'control-label'))!!}
                                <div class="controls">
                                  {!!Form::select('size', array('Cat1' => 'Categoria 1', 'Cat2' => 'Categoria 2'), null, ['class'=>'span6','placeholder' => 'Seleccionar...'])!!}
                                </div>
                            </div>

                               <div class="control-group">
                                {!!Form::label('', '# de Personas', array('class' => 'control-label'))!!}
                                <div class="controls">
                                  {!!Form::select('size', array('Cat1' => 'Categoria 1', 'Cat2' => 'Categoria 2'), null, ['class'=>'span6','placeholder' => 'Seleccionar...'])!!}
                                </div>
                            </div>

                            <div class="control-group">
                              {!!Form::label('fecha', 'Fecha de Inicio', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::date('name', \Carbon\Carbon::now(),['class'=>'input-small'])!!}
                              </div>
                            </div>
                          

                          <div class="form-actions">
                          {!!Form::submit('Enviar',['class'=>'btn btn-success'])!!} 
                          {!!Form::submit('Cancelar',['class'=>'btn'])!!} 
                          </div>

                        {!!Form::close()!!}

                          
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
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