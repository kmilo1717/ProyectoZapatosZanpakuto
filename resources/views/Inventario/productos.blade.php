@extends('./layouts.layouthome')
@section('content')
    <div class="options">
        <ul>
            <li class="line"><a href="{{route('producto.index')}}">Registrar</a></li>
            <li><a class="blue" href="{{route('producto.consulta')}}">Consultar</a></li>
        </ul>
    </div>

    <div class="gestion">
        <h1>Registrar Productos</h1>
        <form action="{{ route('producto.save')}}" method="POST">
            @csrf
            <label for="proveedor">Proveedor</label>
            <input type="text" name="proveedor"><br>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"><br>
            <label for="costo">Costo</label>
            <input type="text" name="costo"><br>
            <label for="medida">Medida</label>
            <input type="text" name="medida"><br>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad"><br>
            <label for="color">Color</label>
            <input type="text" name="color"><br>
            <label for="costo_u">Costo Unitario</label>
            <input type="number" name="costo_u"><br>
            <label>Valor vendido</label>
            <label id="vend">20000</label><br>
            <button type="submit">Registrar</button>
        </form>
        <span class="info">{{ session('message') }} </span>
    </div>
@endsection