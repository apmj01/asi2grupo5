                                <div class="control-group ">
                                    {!!Form::label('Nombre (*)',null,['class' => 'control-label', 'for' => 'firstname'])!!}
                                    <div class="controls">
                                        {!!Form::text('name',null,['class' => 'span6', 'id' => 'firstname'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Apellido (*)',null,['class' => 'control-label', 'for' => 'lastname'])!!}
                                    <div class="controls">
                                        {!!Form::text('lastname',null,['class' => 'span6', 'id' => 'lastname'])!!}
                                    </div>
                                </div>

                                 <div class="control-group ">
                                    {!!Form::label('email (*)',null,['class' => 'control-label', 'for' => 'email'])!!}
                                    <div class="controls">
                                        {!!Form::text('email',null,['class' => 'span6', 'id' => 'email'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Contraseña (*)',null,['class' => 'control-label', 'for' => 'password'])!!}
                                    <div class="controls">
                                        {!!Form::password('password',['class' => 'span6', 'id' => 'password'])!!}
                                    </div>
                                </div>

                                <div class="control-group ">
                                    {!!Form::label('Confirmar Contraseña (*)',null,['class' => 'control-label', 'for' => 'confirm_password'])!!}
                                    <div class="controls">
                                        {!!Form::password('confirm_password',['class' => 'span6', 'id' => 'confirm_password'])!!}
                                    </div>
                                </div>
<!--
                                <div class="control-group ">
                                    {!!Form::label('DUI (*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                        {!!Form::text('dui',null,['class' => 'span6', 'data-mask' => '99999999-9'])!!}
                                         <span class="help-inline">99999999-9</span>
                                    </div>
                                </div>


                                <div class="control-group ">
                                    {!!Form::label('NIT (*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                        {!!Form::text('nit',null,['class' => 'span6', 'data-mask' => '9999-999999-999-9'])!!}
                                         <span class="help-inline">9999-999999-999-9</span>
                                    </div>
                                </div>
 --> 
                                <div class="control-group">
                                    {!!Form::label('Estado del Usuario(*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                        {!!Form::select('Estado del Usuario(*)',array('1' => 'Activo', '2' => 'Inactivo'), null ,['name' => 'status','id' => 'status', 'class' => 'span6', 'placeholder' => 'Seleccionar...'])!!}
                                    </div>
                                </div>

                                <div class="control-group">
                                    {!!Form::label('Rol del Usuario(*)',null,['class' => 'control-label'])!!}
                                    <div class="controls">
                                   
                                            {!!Form::select('id', $roles, $selected,['name' => 'core_rol_id', 'placeholder' => 'Seleccionar...'])!!}
                                                                                  
                                    </div>
                                </div>