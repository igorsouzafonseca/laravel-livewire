<!DOCTYPE html>
<html lang="pt-br">
@include('layouts.head')   
    @livewireStyles
<body>
<div class="container">
<br/>
<livewire:agenda-create />
</div>

@include('layouts.script') 
<script>
$(document).ready( function () {
    
    $('#diatodo').on('click',  function (e) {
        if($('#diatodo').is(':checked')){
            $('.horainicio').hide();
            $('.horafim').hide();
            $('.diatodo').show();
        }else {
            $('.horainicio').show();
            $('.horafim').show();
            $('.diatodo').show();
        
        }
        
    });
</script>  
@livewireScripts
</body>
</html>