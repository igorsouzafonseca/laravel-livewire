<div>
    <h2>Lista de Agendamentos</h2>
    <br/>
    <a href="{{route('incluir.evento')}}" style="background-color: #00AE9D; color: white;" class="btn" >Criar Evento</a>
    <br/>
    <br/>

    <ul class="nav nav-tabs" id="agendamentos" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="agenda-dia-tab" data-toggle="tab" href="#agenda-dia" role="tab" aria-controls="agenda-dia" aria-selected="true">Agendamentos do dia</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="agenda-semana-tab" data-toggle="tab" href="#agenda-semana" role="tab" aria-controls="agenda-semana" aria-selected="false">Agendamentos da semana</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="agenda-mes-tab" data-toggle="tab" href="#agenda-mes" role="tab" aria-controls="agenda-mes" aria-selected="false">Agendamentos do mês</a>
        </li>
    </ul>
    <div class="tab-content" id="agendamentos" style="width: 100%;">
        <div class="tab-pane fade show active" id="agenda-dia" role="tabpanel" aria-labelledby="agenda-dia-tab">
            <br>
                <h4 class="text-center text-dark">Agenda diária</h4>
                <div class="row">
                    @if($eventosdia)    
                        @foreach($eventosdia as $key=>$ev)
                            <div class="col-sm-4">
                                <div class="card" style="height: 250px; margin-bottom: 30px;">
                                    <div class="card-body">
                                        <h6 class="card-title"><strong>Evento:</strong> {{$ev->descricao}}</h6>
                                        <p class="card-text"><strong>Data:</strong> {{date( 'd/m/Y' , strtotime($ev->dataevento))}}</p>
                                        <p class="card-text"><strong>Início:</strong> {{date( 'H:i' , strtotime($ev->horainicio))}}</p>
                                        <p class="card-text"><strong>Término:</strong> {{date( 'H:i' , strtotime($ev->horafim))}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <br/>
                        <div class="col-sm-12">
                        <br/>
                            <p class="text-center">Nenhum agendamento!</p>
                        </div>
                    @endif
                </div>
           
        </div>
        <div class="tab-pane fade" id="agenda-semana" role="tabpanel" aria-labelledby="agenda-semana-tab">
        <br>
            <h4 class="text-center text-dark">Agenda semanal</h4>
                <div class="row">
                    @if($eventossemana)    
                        @foreach($eventossemana as $key=>$ev)
                            <div class="col-sm-4">
                                <div class="card"  style="height: 250px; margin-bottom: 30px;">
                                    <div class="card-body" >
                                        <h6 class="card-title"><strong>Evento:</strong> {{$ev->descricao}}</h6>
                                        <p class="card-text"><strong>Data:</strong> {{date( 'd/m/Y' , strtotime($ev->dataevento))}}</p>
                                        <p class="card-text"><strong>Início:</strong> {{date( 'H:i' , strtotime($ev->horainicio))}}</p>
                                        <p class="card-text"><strong>Término:</strong> {{date( 'H:i' , strtotime($ev->horafim))}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <br/>
                        <div class="col-sm-12">
                        <br/>
                            <p class="text-center">Nenhum agendamento!</p>
                        </div>
                    @endif
                </div>
        </div>
        <div class="tab-pane fade" id="agenda-mes" role="tabpanel" aria-labelledby="agenda-mes-tab">
            <br>
            <h4 class="text-center text-dark">Agenda mensal</h4>
            <div class="row">
                    @if($eventosdia) 
                        @foreach($eventosmes as $key=>$ev)
                            <div class="col-sm-4">
                                <div class="card"  style="height: 250px; margin-bottom: 30px;">
                                <div class="card-body">
                                    <h6 class="card-title"><strong>Evento:</strong> {{$ev->descricao}}</h6>
                                    <p class="card-text"><strong>Data:</strong> {{date( 'd/m/Y' , strtotime($ev->dataevento))}}</p>
                                    <p class="card-text"><strong>Início:</strong> {{date( 'H:i' , strtotime($ev->horainicio))}}</p>
                                    <p class="card-text"><strong>Término:</strong> {{date( 'H:i' , strtotime($ev->horafim))}}</p>
                                </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                    <br/>
                        <div class="col-sm-12">
                        <br/>
                            <p class="text-center">Nenhum agendamento!</p>
                        </div>
                    @endif        
            </div>

        </div>
    </div>
    
</div>
