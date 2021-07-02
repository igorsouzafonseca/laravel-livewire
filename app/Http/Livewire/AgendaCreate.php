<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Agenda;

class AgendaCreate extends Component
{
	public $descricao;
	public $dataevento;
	public $horainicio;
	public $horafim;

	public function __construct()
    {
        // Exibe em pt_BR
        date_default_timezone_set('America/Sao_Paulo');
//        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    }

	protected $rules = [
		'descricao' => 'required',
		'dataevento' => 'required',
	];

	public function create()
	{
		$this->validate();
		
		if($this->horainicio == null && $this->horafim == null){
			Agenda::create([
				'descricao' => $this->descricao,
				'dataevento' => $this->dataevento,
				'horainicio' => '09:00',
				'horafim' => '18:00'
			]);
		}else{
			Agenda::create([
				'descricao' => $this->descricao,
				'dataevento' => $this->dataevento,
				'horainicio' => $this->horainicio,
				'horafim' => $this->horafim
			]);
		}

		$this->descricao = $this->dataevento =  $this->horainicio = $this->horafim = null;

		session()->flash('message', 'Agenda criada com sucesso!');

	}

    public function render()
    {
        return view('livewire.agenda-create');
    }
}
