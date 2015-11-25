 @extends('layouts.principal')

 @section('content')

 <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     SOLICITUDES DESECHOS SOLIDOS
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="{!!URL::to('/panel')!!}">Inicio</a>
                           <span class="divider">/</span>
                       </li>
                         <li>
                           <a href="{!!URL::to('/desechos')!!}">Menu Deschos Solidos</a>
                           <span class="divider">/</span>
                       </li>
                       
                       <li class="active">
                           Solicitudes Desechos Solidos
                       </li>
                      
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->

      <div class="row-fluid">
     <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Formulario de Solicitud Deschos Solidos</h4>
                            
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->


                          {!!Form::open(['class'=>'form-horizontal','route'=>'usuario.store', 'method'=>'POST'])!!}
                                  
                            <div class="control-group">
                              {!!Form::label('#', '# de Solicitud', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('nSolicitud',null,['disabled'=>'' ,'class'=>'input-small','placeholder'=>'0000'])!!}
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
                              
                              {!!Form::text(null, \Carbon\Carbon::now()->toTimeString(),['class'=>'small', 'id' =>'clockface_1', 'data-format' => 'hh:mm A'])!!}
                              </div>
                            </div>
                         
                            <div class="control-group">
                              {!!Form::label('descripcion', 'Descripcion', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::textarea('descripcion',null,['class'=>'span6', 'rows'=>'3'])!!}                                        
                              </div>
                            </div>

                            <div class="control-group">
                                {!!Form::label('', 'Solicitud', array('class' => 'control-label'))!!}
                                
                                <div class="controls">
                                  {!!Form::select('size', array('Cat1' => 'Desechos Solidos', 'Cat2' => ' Desechos Organicos'), null, ['class'=>'span6','placeholder' => 'Seleccionar...'])!!}
                           
                                </div>
                            </div>


                              

                          
                          

                           


                            <div class="control-group">
                              {!!Form::label('fecha', 'Fecha de Inicio', array('class' => 'control-label'))!!}
                              <div class="controls">
                                {!!Form::text('fechaini', \Carbon\Carbon::now()->toDateString(),['class'=>'m-ctrl-medium', 'id'=>'dp2'])!!}
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
   @stop