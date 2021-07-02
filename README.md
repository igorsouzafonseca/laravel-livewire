<h2>Criando projeto</h2>
<br/>
<p class="text-center">
    Primeiro deverá clonar o repositório:<br/><br/>
    <span style="color: #d3d3d3;">$ git clone https://github.com/igorsouzafonseca/laravel-livewire.git</span>
</p>
<hr>
<p>
    Vá até o projeto clonado e faça o download do framework livewire: <br/><br/>
    $ composer require livewire/livewire
    <br/><br/>
    <span>Observação: é necessário ter o composer instalado na sua máquina!</span>
</p>
<hr>
<p>
    Em seguida abra o projeto com a IDE que você tem mais afinidade, abre o arquivo .env e configure a conexão com o banco de dados postgresql, abaixo segue exemplo:<br/><br/>
    linha  9: &nbsp;&nbsp;DB_CONNECTION=pgsql<br/>
    linha 10: DB_HOST=127.0.0.1<br/>
    linha 11: DB_PORT=5432<br/>
    linha 12: DB_DATABASE=projetolivewire<br/>
    linha 13: DB_USERNAME=postgres<br/>
    linha 14: DB_PASSWORD=suasenha<br/><br/>
    <span>Observação: é necessário baixar o postgresql para o correto funcionamento, ou se for usar outro banco de dados, terá que alterar a consulta do arquivo app/http/livewire/Agenda.php a partir da linha 33!</span>
</p>
<hr>
<p>Próximo passo será executar a migrate:<br/><br/>
    $ php artisan migrate
</p>
<hr>
<p>E por fim, basta da start no servidor laravel <br/><br/>
    $ php artisan serve <br/><br/>
    E abrir o navegador no endereço: localhost:8000
</p>    
