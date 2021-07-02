<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Agenda as Agendas;
use Illuminate\Support\Facades\DB;

class Agenda extends Component
{
    public function __construct()
    {
        // Exibe em pt_BR
        date_default_timezone_set('America/Sao_Paulo');
//        setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
        setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
    }

    public function render()
    {


        $now = date('Y-m-d');

        $mes= date('Y-m');

        $ano= date('Y');

        $eventosdia = DB::select('select * from agendas where dataevento = :now order by 2 asc', ['now' => $now]);

        //dd($teste);

        $eventossemana = DB::select('with datas as (SELECT (current_date - cast(extract(dow from current_date) as int) + 1) datainicio,
		current_date - cast(extract(dow from current_date) as int) + 7 datafim)
select a.*,
CASE EXTRACT( DOW FROM a.dataevento)
     WHEN 0 THEN 7
     WHEN 1 THEN 1
     WHEN 2 THEN 2
     WHEN 3 THEN 3
     WHEN 4 THEN 4
     WHEN 5 THEN 5
     WHEN 6 THEN 6
     END AS ordernacao
from agendas a cross join datas d
where dataevento between d.datainicio and d.datafim order by ordernacao asc');

        $eventosmes = DB::select("select descricao,dataevento,horainicio,horafim from agendas where to_char(dataevento, 'YYYY-MM') = :mes order by 2 asc", ['mes' => $mes]);

        $retorno= [
            'eventosdia' => $eventosdia,
            'eventossemana' => $eventossemana,
            'eventosmes' => $eventosmes,
        ];

        //dd($eventosmes1);

        return view('livewire.agenda', $retorno);
    }
}
