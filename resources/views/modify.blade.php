@php
use App\Http\Controllers\CasalsController;    
@endphp
@include('includes.head')

<div class="space-between">
    <p>Informació del Casal</p>
    <p><a href="{{ action([CasalsController::class, 'listarCasals']) }}" class="btn">Tornar</a></p>
</div>

<form method="POST" action="{{route('modifyCasal')}}">
    @csrf
    <div class="form-camp">
        <label for="id">ID del Casal:</label>
        <input type="text" name="id" id="id" required value="{{$casal['id']}}" readonly />
    </div>
    <div class="form-camp">
        <label for="nom">Nom del Casal:</label>
        <input type="text" name="nom" id="nom" required value="{{$casal['nom']}}" />
    </div>
    <div class="form-camp">
        <label for="inici">Data inici:</label>
        <input type="date" name="inici" id="inici" required value="{{$casal['data_inici']}}" />
    </div>
    <div class="form-camp">
        <label for="final">Data final:</label>
        <input type="date" name="final" id="final" required value="{{$casal['data_final']}}" />
    </div>
    <div class="form-camp">
        <label for="places">Número de places:</label>
        <input type="number" name="places" placeholder="Places" id="places" required value="{{$casal['n_places']}}" />
    </div>
    <div class="form-camp">
        <label for="ciutat">Ciutat:</label>
        <select name="ciutat" id="ciutat">
            <option value="{{$casal['id_ciutat']}}">{{$ciutatSelec}}</option>
            @foreach($ciutats as $ciutat)
            <option value="{{$ciutat['id']}}">{{$ciutat['nom']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-camp">
        <input type="submit" value="Enviar" />
    </div>
</form>

@include('includes.footer')