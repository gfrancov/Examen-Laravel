@php
use App\Http\Controllers\CasalsController;    
@endphp
@include('includes.head')
<div class="content">
    <div class="space-between">
        <p>Gestió de casals</p>
        <p><a href="{{ action([CasalsController::class, 'formNewCasal']) }}" class="btn">🤠 Afegir</a></p>
    </div>

    <table border="collapse">
        <tr>
            <th>Nom</th>
            <th>Data d'inici</th>
            <th>Data final</th>
            <th>Places</th>
            <th>Ciutat</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach($casals as $casal)

            <tr>
                <td>{{$casal['nom']}}</td>
                <td>{{$casal['data_inici']}}</td>
                <td>{{$casal['data_final']}}</td>
                <td>{{$casal['n_places']}}</td>
                <td>{{$casal['ciutat']}}</td>
                <td><a class="btn btn-blue" href="{{ url('casal/' . $casal['id']) }}">📝 Editar</a></td>
                <td><a class="btn btn-red" href="{{ url('esborrar-casal/' . $casal['id']) }}">🗑️ Eliminar</a></td>
            </tr>

        @endforeach
    </table>
</div>
@include('includes.footer')