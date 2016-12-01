<div class="row"> 00
     <form>
    <div class="panel panel-success">
        {{--datos personales--}}
        <div class="panel-heading"><span class="titulo"><center>Datos Personales</center></span></div>
        <div class="panel-body">
                  <div class="alert alert-warning">
                      Campos obligatorios Los campos o elementos del formulario que están marcados con un <small class="text-danger"><i class="fa fa-lock"></i></small> 
                      son obligatorios. Hasta que no se completen por lo menos estos datos el sistema no dejará guardar los cambios
                  </div>
                  <div class="row-fluid"> 
                                                             
                       <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small> 
                              {{ Form::label('cedula', 'No. de Cedula') }}  <br>                                                                       
                              {{Form::text('cedula', NULL, array('class' => 'form-control','placeholder' => 'Cédula', 'required' => true,'onkeypress'=>'return soloNumeros(event)', 'id' => 'cedula'))}}                                                                   
                          </div>
                       </div>
                       <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>
                              {{Form::label('ciudad_cedula', 'ciudad expedición')}} <br> 
                              {{Form::text('ciudad_cedula', NULL, array('class' => 'form-control requerido', 'id' => 'ciudad_cedula'))}}
                          </div>
                       </div>
                      <div class="form-group">
                           <div class="col-lg-12 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>
                              {{ Form::label('primer_nombre', 'Primer Nombre') }} <br>                                                                        
                               {{Form::text('primer_nombre', NULL, array('class' => 'form-control requerido', 'required' => true, 'id' => 'nombre1'))}}                                                                   
                          </div>
                      </div>
                        <div class="form-group">
                             <div class="col-lg-12 col-md-12">
                               {{Form::label('nombre2', 'Segundo Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')}}<br> 
                               {{Form::text('nombre2', NULL, array('class' => 'form-control', 'required' => true, 'id' => 'nombre2'))}}
                          </div>   
                        </div>

                      <div class="form-group">
                           <div class="col-lg-12 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>
                              {{Form::label('primer_apellido', 'Primer Apellido')}} <br> 
                              {{Form::text('primer_apellido', NULL, array('class' => 'form-control requerido', 'required' => true, 'id' => 'apellido1'))}}
                          </div>
                      </div>
                       <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                              {{Form::label('apellido2', 'Segundo Apellido&nbsp;')}} <br> 
                              {{Form::text('apellido2', NULL, array('class' => 'form-control', 'required' => true, 'id' => 'apellido2'))}}
                          </div>
                       </div>
                  </div>
                  <div class="clearfix visible-xs-block">&nbsp;</div>

                  <div class="row-fluid"> 
                     <div class="form-group">
                          <div class="col-lg-12 col-md-12">
                              {{Form::label('numPasadoJudicial', 'Num. Pasado Judicial')}} <br> 
                              {{Form::text('numPasadoJudicial', NULL, array('class' => 'form-control', 'id' => 'numPasadoJudicial'))}}
                           </div>
                     </div>
                     <div class="form-group input-fecha ">
                          <div class="col-lg-12 col-md-12">
                              {{Form::label('fVencPasado', 'Venc. pasado judicial')}} <br> 
                              {{Form::text('fVencPasado', NULL, array('class' => 'form-control', 'required' => true))}}
                          </div>
                      </div>
                      <div class="form-group input-fecha " data-date="02-2012" >
                           <div class="col-lg-12 col-md-12">
                                <small class="text-danger"><i class="fa fa-lock"></i></small>
                                {{Form::label('fecha_nacimiento', 'Fec. Nacimiento')}}<br>
                                
                                <div class="sandbox-container">
                                    <input type="text" class="form-control requerido" id="fecha_nacimiento" name="fecha_nacimiento" >
                                </div>
                                <!--{{Form::text('fecha_nacimiento', NULL, array('class' => 'form-control requerido', 'required' => true))}}-->
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                              {{Form::label('genero', 'Género')}}<br> 
                                {{Form::select('genero', array('m' => 'Masculino', 'f' => 'Femenino'), 'm', array('class' => 'form-control', 'id' => 'sexo'))}}

                            </div>
                      </div>
                      <div class="form-group">
                           <div class="col-lg-12 col-md-12">
                               {{Form::label('tipo_sangre', 'Grupo Sangre / Rh')}}<br>
                              {{Form::select('tipo_sangre', array('O'=>'O','A'=>'A','B'=>'B','AB'=>'AB'), 'O',array('class' => 'form-control', 'id' => 'tipo_sangre'))}}
                               {{Form::select('rh', array('1' =>'+','2' => '-'),'+', array('class' => 'form-control', 'id' => 'rh'))}}
                             </div>
                      </div>
                      <div class="form-group">
                             <div class="col-lg-12 col-md-12">
                                <small class="text-danger"><i class="fa fa-lock"></i></small>
                                {{Form::label('id_estado_civil', 'Estado Civil')}} <br> 
                                {{Form::select('id_estado_civil', array('1' =>'Cali','2' => 'Bogota'), null, array('class' => 'form-control requerido', 'required' => true, 'id' => 'estado_civil'))}}
                             </div>
                      </div> 
                  </div>            
        </div>
    </div>
    {{--fin datos personales--}}                      
    {{-- datos solo operadores--}}
    <div class="panel panel-warning">
           <div class="panel-heading"><span class="titulo"><center>Información de operadores <span>(Espacio solo para operadores)</span></center></span></div>
           <div class="panel-body">
                  <div class="row-fluid">
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                            {{Form::label('codigo', 'Código de Operador')}}<br>
                             {{Form::text('codigo', 0, array('class' => 'form-control ', 'id' => 'codigo', 'required' => true))}} 
                            </div> 
                         </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                               {{Form::label('tipologia_vehiculo', 'Tipología vehículo')}}<br>
                               {{Form::select('tipoVehiculo', array('1' =>'Cali','2' => 'Bogota'),NULL, array('class' => 'form-control datoOperador', 'id' => 'tipoVehiculo','disabled'=>true))}} 
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                               {{Form::label('liCategoria', 'Categoría licencia')}}<br>
                               {{Form::select('liCategoria', array('1' =>'Cali','2' => 'Bogota'), NULL, array('class' => 'form-control datoOperador', 'id' => 'liCategoria','disabled'=>true))}}
                           </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                {{Form::label('numlicencia', 'Número licencia')}}<br>
                                {{Form::text('numLicencia', NULL, array('class' => 'form-control datoOperador', 'id' => 'numLicencia','disabled'=>true))}}
                            </div> 
                         </div>
                       <div class="form-group input-fecha">
                           <div class="col-lg-12 col-md-12">
                                {{Form::label('fechaLicencia', 'Fecha Expedición')}}<br>
                                {{Form::text('fechaLicencia', NULL, array('class' => 'form-control datoOperador', 'id' => 'fechaLicencia'))}}
                           </div>
                       </div>
                        <div class="form-group input-fecha">
                            <div class="col-lg-12 col-md-12">
                                {{Form::label('vigenciaLicencia', 'Fecha Vigencia')}}<br>
                                {{Form::text('vigenciaLicencia', NULL, array('class' => 'form-control datoOperador', 'id' => 'vigenciaLicencia','disabled'=>true))}}
                           </div>
                        </div>
                  </div>
                  <span class="help-block">
                     <p>* Si No tiene el código del empleado <font style="color:red;">operador </font>dígite un número diferente a 0.</p>
                  </span>
            </div>
    </div>
    {{--fin datos operadores--}}                  
    {{--datos contacto--}}
    <div class="panel panel-success">
            <div class="panel-heading"><span class="titulo"><center>Datos de residencia y contacto</center></span></div>
            <div class="panel-body">
                <div class="row-fluid ">
                     <div class="form-group">
                         <div class="col-lg-11 col-md-12">
                          <small class="text-danger"><i class="fa fa-lock"></i></small>
                          {{Form::label('direccion', 'Dirección Residencia')}} <br>
                          {{Form::text('direccion', NULL, array('class' => 'form-control requerido', 'required' => true, 'id' => 'direccion'))}}
                      </div>
                     </div>
                 
                      <div class="form-group">
                          <div class="col-lg-11 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small> 
                              {{Form::label('id_ciudad', 'Ciudad&nbsp;')}} <br>
                              {{Form::select('id_ciudad', array('1' =>'Cali','2' => 'Bogota'), NULL, array('class' => 'form-control requerido', 'id' => 'id_ciudad'))}}
                         </div>
                      </div>
                 
                      <div class="form-group">
                          <div class="col-lg-11 col-md-12">
                              {{Form::label('telefono_fijo', 'Teléfono Fijo')}} <br>
                              {{Form::text('telefono_fijo', 0, array('class' => 'form-control input-telefono-fijo','onkeypress'=>'return soloNumeros(event)' ,'id' => 'telefono_fijo'))}}
                          </div>
                      </div>
                  
                      <div class="form-group">
                          <div class="col-lg-11 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small> 
                              {{Form::label('telefono_celular', 'Teléfono Celular')}} <br>
                              {{Form::text('telefono_celular', NULL, array('class' => 'form-control input-telefono-celular requerido','onkeypress'=>'return soloNumeros(event)' ,'id' => 'telefono_celular'))}}
                         </div>
                      </div>

                      <div class="form-group">
                          <div class="col-lg-11 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small> 
                              {{Form::label('barrio', 'Barrio')}}<br> 
                              {{Form::text('barrio', NULL, array('class' => 'form-control requerido', 'required' => true, 'id' => 'barrio'))}}
                           </div>
                      </div>         
                </div>                   
            </div>               
    </div>  
    {{--fin datos contacto--}}
    {{--datos familiares--}}                      
     <div class="panel panel-success" id="datosFamiliares">
          <div class="panel-heading"><span class="titulo"><center>Datos núcleo Familiar</center></span></div>
          <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-3">
                            <div class="input-group">
                                <button type="button" class="btn btn-success" id="add_familiar"><i class="fa fa-plus"></i> Añadir</button>
                            </div>
                        </div>
                     </div>
                    <div class="separator"></div>
               <div class="row-fluid"> 
                   <div class="table-responsive"> 
                        <table class="table table-bordered table-condensed table-striped table-hover" id="familiares">
                              <thead>
                                      <tr>
                                             <th>Primer nombre</th>
                                             <th>Segundo nombre</th>
                                              <th>Primer apellido</th>
                                              <th>Segundo apellido</th>
                                              <th>Fecha Nacimiento</th>
                                              <th>Parentezco</th>
                                              <th>Género</th>
                                              <th>Acción</th>
                                      </tr>
                              </thead>
                            <tbody> 
                            <tr><!--contenido datos de familiares-->
                                <td>
                                  <div class="input-group">
                                      {{Form::text('familiar_nombre1[]', NULL, array('class' => 'form-control familiarDatos', 'placeholder' => 'Primer nombre'))}}
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">                
                                      {{Form::text('familiar_nombre2[]', NULL, array('class' => 'form-control', 'placeholder' => 'Segundo nombre'))}}
                                   </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                          {{Form::text('familiar_apellido1[]', NULL, array('class' => 'form-control agregar', 'placeholder' => 'Primer apellido'))}}
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                       {{Form::text('familiar_apellido2[]', NULL, array('class' => 'form-control', 'placeholder' => 'Segundo apellido'))}}
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                    <div class="sandbox-container">
                                      {{Form::text('familiar_fecha_nacimiento[]', NULL, array('class' => 'form-control agregar','placeholder'=>'Fecha Nacimiento'))}}
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <div class="input-group">
                                      {{Form::select('familiar_parentezco[]', array('2' => 'hola' ), null, array('class' => 'form-control agregar', 'placeholder' => 'Parentezco'))}}
                                  </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                      {{Form::select('sexoFamiliar[]', array(''=>'Seleccione', 'm' => 'Masculino', 'f' => 'Femenino'), '', array('class' => 'form-control agregar'))}}
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                          </tbody>
                       </table>
                    </div>
               </div>
          </div>
     </div> 
    {{--fin datos familiares--}}
    {{--datos academicos--}}
    <div class="panel panel-success" id="nivelAcademico">

            <div class="panel-heading"><span class="titulo"><center>Nivel académico<span>(agregar los estudios realizados)</span></center></span></div>

               <div class="panel-body">
                     <div class="row">
                         <div class="col-xs-2">
                                     <button class="btn btn-success" type="button" id="add_titulo"><i class="fa fa-plus"></i> Añadir</button>
                          </div>
                    </div>
                   
                    <div class="separator"></div>
                           <table class="table table-bordered table-hover table-striped table-condensed" id="titulos">
                                                <thead>
                                                        <tr>
                                                               <th>Nivel</th>
                                                                <th>Título Obtenido</th>
                                                                <th>Institución</th>
                                                                <th>Fecha inicio</th>
                                                                <th>Fecha fin</th>
                                                                <th>Estado</th>
                                                                <th>Acción</th>
                                                        </tr>
                                                </thead>
                                                <tbody>                                                           
                                                <tr>
                                                <td>
                                                          <div class="input-group"> 
                                                         {{Form::select('id_nivel_academico[]', array('2' => 'hola' ), '', array('class' => 'form-control nivelAcademico', 'id' => 'academico_id_nivel[]'))}}
                                                         </div>
                                                    </td>
                                    
                                                    <td>
                                                          <div class="input-group">  
                                                          {{Form::text('nomTitulo[]', NULL, array('class' => 'form-control agregarDatos',  'id' => 'nomTitulo[]'))}}
                                                          </div>
                                                     </td>
                                    
                                                    <td>
                                                        <div class="input-group"> 
                                                                {{Form::text('institucion[]', NULL, array('class' => 'form-control agregarDatos', 'id' => 'institucion[]'))}}
                                                        </div>
                                                    </td>
                           
                                                    <td>
                                                          <div class="input-group"> 
                                                            {{Form::text('fecha_inicio_titulo[]', 'N/A', array('class' => 'form-control','readonly'=>true))}}
                                                            </div>
                                                    </td>
                                                     <td>
                                                          <div class="input-group input-fecha input-fecha"> 
                                                            {{Form::text('fecha_fin_titulo[]', NULL, array('class' => 'form-control agregarDatos'))}}
                                                        </div>
                                                        </td>
                                                      <td>
                                                          <div class="input-group"> 
                                                            {{Form::select('titulo_id_estado[]', array('2' => 'hola' ), NULL, array('class' => 'form-control agregarDatos', 'id' => 'academico_id_estado[]'))}}
                                                        </div>
                                                      </td>
                                                      <td></td>
                                               </tr>
                                       </tbody>   
                        </table>
               </div>
    </div>
    {{--fin datos academicos--}}
    {{--datos experiencia--}}
    <div class="panel panel-success">

      <div class="panel-heading"><span class="titulo"><center>Experiencia laboral <span>(empresas anteriores donde ha trabajado)</span></center></span></div>

           <div class="panel-body">
               <div class="row">
                      <div class="col-xs-4">
                                <div class="input-group">
                                        <button class="btn btn-success" type="button" id="add_experiencia"><i class="fa fa-plus"></i> Añadir</button>
                                </div>
                       </div>
                </div>
               <div class="separator"></div>
                <div class="row"> 
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                {{Form::label('empresaAnterior[]', 'Nombre empresa')}}<br>
                                {{Form::text('nomEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                {{Form::label('dirEmpresaAnterior[]', 'Dirección Empresa')}}<br>
                                {{Form::text('dirEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                {{Form::label('telefonoEmpresaAnterior[]', 'Telefono Empresa')}}<br>
                                {{Form::text('telefonoEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true,'onkeypress'=>'return soloNumeros(event)'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                 {{Form::label('ocupacionEmpresaAnterior[]', 'Ocupación')}}<br>
                                 {{Form::text('ocupacionEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>    
                        </div>                                          

                        <div class="form-group">
                            <div class="col-lg-12 col-md-12">
                                  {{Form::label('ciudadEmpresaAnterior[]', 'Ciudad')}}<br>
                                  {{Form::text('ciudadEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>
                        </div>        
                        <div class="form-group input-fecha">
                            <div class="col-lg-12 col-md-12">
                                   {{Form::label('ingresoEmpresaAnterior[]', 'Fecha ingreso')}}<br>
                                   {{Form::text('ingresoEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>
                        </div>
                        <div class="form-group input-fecha">
                            <div class="col-lg-12 col-md-12">
                                 {{Form::label('retiroEmpresaAnterior[]', 'Fecha retiro')}}<br>
                               {{Form::text('retiroEmpresaAnterior[]', NULL, array('class' => 'form-control', 'required' => true))}}
                            </div>
                       </div>
            </div>
            <div class="clearfix visible-xs-block">&nbsp;</div>
              <span id="experiencia"></span>
           </div>
    </div>
    {{-- fin datos experiencia--}}
    {{--datos laborales--}}
     <div class="panel panel-success">
         <div class="panel-heading"><span class="titulo"><center>Datos Laborales</center></span></div>
            <div class="panel-body">
                  <div class="row">
                        <div class="col-lg-3 col-md-3">
                          <div class="form-group">
                                <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                                {{Form::label('id_arl', 'ARL')}}<br> 
                                {{Form::select('id_arl', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_arl'))}}
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                          <div class="form-group">
                               <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                               {{Form::label('id_pension', 'Pensión')}}<br> 
                               {{Form::select('id_pension', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_pensiones', 'required' => true))}}
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                         <div class="form-group">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                              {{Form::label('id_cesantias', 'Cesantias')}}<br> 
                              {{Form::select('id_cesantias', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_pensiones', 'required' => true))}}
                         </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                         <div class="form-group">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                              {{Form::label('id_eps', 'Eps')}}<br> 
                              {{Form::select('id_eps', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_eps'))}}
                         </div>
                        </div> 
                  </div>
                  <div class="row">     
                      <div class="form-group">
                         <div class="col-lg-12 col-md-12">
                              <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                              {{Form::label('id_departamento', 'Proceso')}}<br>
                              {{Form::select('id_departamento', array('2' => 'hola' ), null, array('class' => 'form-control requerido', 'id' => 'id_departamento', 'required' => true))}}
                          </div>
                      </div>
                      <div class="form-group">
                        <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                        {{Form::label('id_cargo', 'Cargo a Desempeñar')}}<br> 
                        <select class="selectpicker form-control requerido" data-live-search="true" id="id_cargo" name="id_cargo">
                            <option value="">Seleccione</option>
                        </select>
                      </div>                   
                      <div class="form-group">
                           <div class="col-lg-12 col-md-12">
                                <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                                {{Form::label('id_centro_trabajo', 'Centro de Trabajo')}}<br> 
                                {{Form::select('id_centro_trabajo', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_centro_trabajo', 'required' => true))}}
                           </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-12 col-md-12">
                            <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                            {{Form::label('id_grupo', 'Grupo')}} <br>
                            {{Form::select('id_grupo', array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'id_grupo', 'required' => true))}}
                         </div>
                      </div>
                  </div> 
                  <div class="row">    
                      <div class="form-group">
                        <div class="col-lg-12 col-md-12 msjCorreo ">
                            <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                            {{Form::label('correo', 'Correo corporativo')}} <br>
                            {{Form::text('correo', NULL, array('class' => 'form-control requerido', 'id' => 'correo','placeholder'=>'nombre.apellido@bynmasivo.com'))}}
                        </div>
                      </div>  
                  </div>
            </div>
     </div>
    {{-- fin datos laborales--}}            
    {{-- datos contratos--}}
    <div class="panel panel-success">
        <div class="panel-heading"><span class="titulo"><center>Contrato</center></span></div>
        <div class="panel-body">
            <div class="row">    
                  <div class="form-group input-fecha">
                      <div class="col-lg-9 col-md-9">
                          <small class="text-danger"><i class="fa fa-lock"></i></small>
                          {{Form::label('fecha_ingreso', 'Fecha de Ingreso')}} <br>
                          {{Form::text('fecha_ingreso', NULL, array('class' => 'form-control requerido', 'required' => true))}}
                      </div>
                  </div>
                 <div class="form-group">
                     <div class="col-lg-8 col-md-8">
                          <small class="text-danger"><i class="fa fa-lock"></i></small>
                          {{Form::label('salario', 'Salario')}}<br>
                          {{Form::text('salario', NULL, array('class' => 'form-control requerido', 'required' => true))}}
                     </div> 
                 </div> 
                  <div class="form-group">
                        <div class="col-lg-12 col-md-11">
                            <small class="text-danger"><i class="fa fa-lock"></i></small>                                                        
                            {{Form::label('tipo_contrato', 'Tipo de Contrato')}} <br>
                            <span class="col-sm-4">
                            {{Form::select('tipo_contrato', array('2' => 'hola' ), '2', array('class' => 'form-control requerido tipoContrato', 'required' => true))}}
                            </span>
                        </div>
                    </div>
                  
                  <div class="form-group">
                     <div class="col-lg-8 col-md-11">
                            <small class="text-danger"><i class="fa fa-lock"></i></small>&nbsp;
                            {{Form::label('duracion', 'Duración')}}<br>
                            {{Form::text('duracion', NULL, array('class' => 'form-control','id'=>'duracion_nuevo_contrato','readonly'=>'readonly','onkeypress'=>'return soloNumeros(event)'))}}
                     </div>
                 </div>
                <div class="form-group form-check">          
                    <div id="prue" style="padding-top: 25px">
                        <label class="form-check-label">
                           <input class="form-check-input" type="radio" name="tiempoContrato" id="porMeses" value="M" checked>
                           Meses
                         </label>
                    </div>
                </div>
                <div class="form-group form-check">
                      <div id="prue" style="padding-top: 25px">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="tiempoContrato" id="porDias" value="D">
                           Dias
                          </label>
                      </div>
                </div>
            </div>
             <div class="row">
                <br>
                <div class="form-group">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                            <small class="text-danger"><i class="fa fa-lock"></i></small>                                                      
                            {{Form::label('id_tipo_pago', 'Tipo Pago')}}<br> 
                                  {{Form::select('id_tipo_pago', array('2' => 'hola' ), null, array('class' => 'form-control requerido','id'=>'id_tipo_pago'))}}
                            </div>
                </div>
                <span id="cnt_pago"></span>
            </div>
        </div>
    </div>
    {{-- fin datos contratos--}}
    {{-- datos solo operadores--}}
    <div class="panel panel-warning">
       <div class="panel-heading"><span class="titulo"><center>Información Dotación</center></span></div>
       <div class="panel-body">
            <div class="row-fluid">             
                <div class="form-group">
                    <div class="col-lg-12 col-md-12">
                        {{Form::label('tallaCamisa', 'Talla camisa')}}<br>
                        {{Form::select('tallaCamisa',array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'tallaCamisa'))}}
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-lg-12 col-md-12">
                        {{Form::label('tallaPantalon', 'Talla pantalon')}}<br>
                        {{Form::select('tallaPantalon',array('2' => 'hola' ), NULL, array('class' => 'form-control', 'id' => 'tallaPantalon'))}}
                    </div>
                 </div>
                  <div class="form-group">
                       <div class="col-lg-12 col-md-12">
                          {{Form::label('tallaCalzado','Talla calzado')}}<br>
                          {{Form::select('tallaCalzado',array('2' => 'hola' ), NULL, array('class'=>'form-control','id'=>'tallaCalzado'))}}
                       </div>
                  </div>
                  <div class="form-group">
                      <div class="col-lg-12 col-md-12">
                          {{Form::label('observacionDotacion','Observacion Dotacion')}}<br>
                          {{Form::textArea('observacionDotacion', NULL, array('class'=>'form-control','id'=>'observacionDotacion','rows=2'))}}
                      </div>
                  </div>
            </div>  
       </div>
    </div>
    {{-- datos solo operadores--}}            
    <div class="panel panel-success">
    <!--  <div class="panel-heading">Guardar información</div>-->
         <div class="panel-body">
              <div class="row">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary" id="guardar" formnovalidate><i class="fa fa-save"></i> Guardar</button>
                  </div>
              </div>
         </div>
    </div>
    </form> 
</div>                               


     
   