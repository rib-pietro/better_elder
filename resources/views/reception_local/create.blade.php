@extends('main')

@section('content')

<main class="main">
	<div class="container-fluid">
		<h1 class="h1">Registrar novo local de atendimento</h1>
		<form action="/local/create" method="post">
			{{ csrf_field() }}
			<div class="row">
				<div class="form-group col-md-8">
					<label>Nome:</label>
					<input type="text" name="local_name" class="form-control">
				</div>	
				<div class="form-group col-md-4">
					<label>UF:</label>
					<select class="form-control" name="state">
						<option value="RJ">RJ</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-4">
					<label>CEP:</label>
					<input type="text" name="zipcode" class="form-control">
				</div>
				<div class="form-group col-md-8">
					<label>Cidade:</label>
					<select class="form-control" name="city_name">
						<option value="campos-dos-goytacazes">
							Campos dos Goytacazes
						</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 form-group">
					<label>Rua:</label>
					<input type="text" name="street" class="form-control">
				</div>
				<div class="col-md-2 form-group">
					<label>Nº</label>
					<input type="text" name="number" class="form-control">
				</div>
				<div class="col-md-4 form-group">
					<label>Complemento</label>
					<input type="text" name="complement" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Especialistas</label>
						<select class="form-control" data-target="specialists">
							<option value="" selected="selected">Escolha um</option>
							@foreach($specialists as $s)
							<option class="selections" value="{{ $s->specialist_name }}">{{ $s->specialist_name }}</option>
							@endforeach
						</select>
						<input type="hidden" name="specialists" id="specialists_list" class="hidden">
						<div class="selected" id="specialists">
									
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Atividades</label>
						<select class="form-control" data-target="activities">
							<option value="">Escolha um</option>
							@foreach($activities as $a)
							<option class="selections" value="{{ $s->specialist_name }}">{{ $a->activity_name }}</option>
							@endforeach
						</select>
						<input type="hidden" name="activities" id="activities_list" class="hidden">
						<div class="selected" id="activities">
									
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Exames Disponíveis</label>
						<select class="form-control" data-target="exams">
							<option value="">Escolha um</option>
							@foreach($exams as $e)
							<option class="selections" value="{{ $s->specialist_name }}">{{ $e->exam_name }}</option>
							@endforeach
						</select>
						<input type="hidden" name="exams" id="exams_list" class="hidden">
						<div class="selected" id="exams">
									
						</div>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-default" style="float: right;">
				REGISTRAR
			</button>
		</form>
	</div>
</main>

@endsection