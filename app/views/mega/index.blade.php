@extends('plantilla.mega')

@section('content')

		<div id="main-container">
		
		<!--  INICIO MENU DE TABS ###########################################-->
		<ul class="tab-bar grey-tab">
				<li class="active">
					<a href="#overview" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-home fa-2x"></i> 
						</span>
						Vista Previa
					</a>
				</li>
				<li>
					<a href="#edit" data-toggle="tab">
						<span class="block text-center">
							<i class="fa fa-edit fa-2x"></i> 
						</span>
						Info Basica
					</a>
				</li>
					<li>
						<a href="#pass" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-lock fa-2x"></i> 
							</span>
							Contraseña
						</a>
					</li>

					<li>
						<a href="#Nproducto" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-briefcase fa-2x"></i> 
							</span>
							Nuevo Producto
						</a>
					</li>

					<li>
						<a href="#Ntab" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-tags fa-2x"></i> 
							</span>
							Nuevo tab
						</a>
					</li>

						<li>
						<a href="#Npromo" data-toggle="tab">
							<span class="block text-center">
								<i class="fa fa-gift fa-2x"></i> 
							</span>
							Nueva Promosion
						</a>
					</li>
				
		</ul>

		<!-- FIN DE MENU DE TABS ####################################################################################33 -->

		

</div>
@stop