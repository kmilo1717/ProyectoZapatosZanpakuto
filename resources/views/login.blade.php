@extends('layouts.layout')
@section('content')
<body>
    <div class="log">
        <form action="{{ route('log')}}" method="POST">
            @csrf
            <p>Acceso Zanpakuto</p>
            <input type="text" name="user" id="user" placeholder="Usuario"> 
            <input type="password" name="pass" id="pass" placeholder="Contraseña"> 
            <span>{{ session('message') }}</span>
            <input type="submit" value="Enviar">
            
        </form>
        
    </div>
</body>
@endsection