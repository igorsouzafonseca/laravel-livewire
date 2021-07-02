<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<style>
.nav .nav-item a:hover{
            color: white;
            background-color: #5e6572;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #ffffff;
            background-color: #00AE9D;
            border-color: #dee2e6 #dee2e6 #f8fafc;
        }
        .nav nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link{
            border-color: #acb0b4 #acb0b4 #acb0b4 #acb0b4;
            color: #00343e;
        }
</style>
    <body>
        <div class="container">
        <br/>
            <livewire:agenda />
        </div>
        @livewireScripts

@include('layouts.script')        
    </body>
</html>
