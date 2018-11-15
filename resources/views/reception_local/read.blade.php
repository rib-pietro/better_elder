@extends('main')

@section('content')

<main class="main">
	<div class="container-fluid">
		<h1 class="h1">
			Locais de Atendimento
		</h1>
		<div class="row">
			<div class="container">
				<nav id="filter">
					<form>
						<div class="form-row align-items-center">
							<div class="col-auto align-items-center">
								<p>Filtrar por: </p>
							</div>
							<div class="col-auto">
								<div class="d-flex flex-row">
									<label class="col-sm-3 col-form-label">Cidade:</label>
									<select class="form-control">
										@foreach($cities as $city)
										<option value="{{$city}}">
											{{$city}}
										</option>
										@endforeach
									</select>		
								</div>
							</div>
							<div class="col-auto">
								<div class="d-flex flex-row">
									<label class="col-sm-6 col-form-label">Estado:</label>
									<select class="form-control">
										@foreach($states as $state)
										<option value="{{$state}}">
											{{$state}}
										</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</form>
				</nav>
			</div>
		</div>
		<table class="table table-striped" id="locals">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Cidade</th>
					<th>Bairro</th>
					<th>Estado</th>
				</tr>
			</thead>
			<tbody>
				@foreach($receptions as $r)
				<tr>
					<td>
						{{ $r->local_name}}
					</td>
					<td>
						{{ $r->city_name }}
					</td>
					<td>
						{{ $r->neighbourhood }}
					</td>
					<td>
						{{ $r->state }}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</main>

@endsection