@if(isset($master2))
 
		{{-- Modal --}}
		<div class="modal fade" id="AgregarListado{{$master2}}" div class="modal fade" data-backdrop="static" data-keyboard=”false”>
			<div class="modal-dialogs">
				<div class="modal-content">
					<div class="modal-header"> 
					    <button type="button" class="close" data-dismiss="modal">x</button>
						<div class="box-header with-border">
    <i class="fa fa-question quest" data-toggle="tooltip"  data-html="true" data-placement="bottom" title="Para ingresar el listado de los estudiante cargue el listado y seleccione si dicho listado contiene los correos de los estudiantes o no<br>Cabe destacar que para gozar de todas las bondades de Ganesha lo ideal es ingresar los correos de los estudiantes"></i>
							<h3 class="box-title">Agregar listados {{ $master2 }}</h3>
						</div>
					</div>
					<form name="import_file" method="POST"  action="{{ url('/controlleralumnos/listado') }}" class="formulario_archivo" enctype="multipart/form-data" >
						<div class="modal-body">
							@include('flash::message')
							<input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>"> 
							<input type="hidden" name="id_cod" id="id_cod"  value={{$master2}} 

				            <label>Agregar Archivo de Excel </label>
				            <input name="import_file" id="archivo" type="file"   class="archivo form-control"  required/><br><br>
				            <div class="form-group radio">
									        <label>
									        	<input type="radio"  name="Email" value='TRUE' checked>
									        	Incluir Correos Electrónicos
									        </label><br>
											<label>
												<input type="radio" name="Email" value="FALSE"><b>NO</b> Incluir Correos
											</label>
										</div>
	      				</div>
					    <div class="box-footer">
	                        <button type="submit" class="btn btn-primary btn-xs pull-right">Guardar Listado</button> 
	                        <a href="{{ url('/alumnos/vista') }}">
								<button type="button" class="btn btn-primary btn-xs"">Cancelar</button>
							</a>
					    </div>
					</form>
				</div>

			</div>
		</div>
@endif