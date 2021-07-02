<div>
	<h2>Criando Evento</h2>

	<div>
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
				@endif		
		<br/>
		<form wire:submit.prevent="create" method="post">
			<div class="form-group  col-12">
				<label for="formGroupExampleInput">Descrição do Evento</label>
				<input type="text" class="form-control" wire:model="descricao" placeholder="Nome do evento">
			</div>
			<div class="form-group  col-2">
				<label for="formGroupExampleInput">Data</label>
				<input type="date" class="form-control" wire:model="dataevento" placeholder="Data do evento">
			</div>
			<div class="form-group col-12 diatodo">
			<div class="form-check form-switch">
			<input class="form-check-input" type="checkbox" id="diatodo">
			<label class="form-check-label" for="flexSwitchCheckChecked">Dia todo?</label>
			</div>
			</div>
			<div class="form-group horainicio col-2">
				<label for="formGroupExampleInput">Hora de Inicio</label>
				<input type="time" class="form-control" wire:model="horainicio" placeholder="Hora do inicio">
			</div>
			<div class="form-group horafim col-2">
				<label for="formGroupExampleInput">Hora de Término</label>
				<input type="time" class="form-control" wire:model="horafim" placeholder="Hora do término">
			</div>
			<div class="col-12">
			<input type="submit" class="btn btn-success" value="Cadastrar Evento"> <a href="{{route('index')}}" class="btn btn-primary">Eventos Criados</a>
			</div>
		</form>
	</div>
</div>