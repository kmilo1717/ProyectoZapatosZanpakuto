@extends('./layouts.layouthome')
@section('content')
    <div class="options">
        <ul>
            <li class="line"><a href="{{route('producto.index')}}">Registrar</a></li>
            <li><a class="blue" href="{{route('producto.consulta')}}">Consultar</a></li>
        </ul>
    </div>

    <div class="gestion">
        <br>
        <h1>Consultar Productos</h1>
        <table class="action" align="center" width="30%" cellpadding="0" cellspacing="0">
            <tr style="border: 1px solid black;">
                <td >hii</td>
                <td>hii</td>
                <td>hii</td>
                <td>hii</td>
            </tr>
            <tr>
                <td>hii</td>
                <td>hii</td>
                <td>hii</td>
                <td>hii</td>
            </tr>
            <tr>
                <td>hii</td>
                <td>hii</td>
                <td>hii</td>
                <td>hii</td>
            </tr>
        </table>
    </div>
@endsection