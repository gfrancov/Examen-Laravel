@php
use App\Http\Controllers\CasalsController;    
@endphp
@include('includes.head')

<div class="space-between">
    <p>Nou Casal</p>
    <p><a href="{{ action([CasalsController::class, 'listarCasals']) }}" class="btn">Tornar</a></p>
</div>

<form method="POST" action="{{route('newCasal')}}">
    @csrf
    <div class="form-camp">
        <label for="nom">Nom del Casal:</label>
        <input type="text" name="nom" placeholder="Nom" id="nom" required />
    </div>
    <div class="form-camp">
        <label for="inici">Data inici:</label>
        <input type="date" name="inici" id="inici" required />
    </div>
    <div class="form-camp">
        <label for="final">Data final:</label>
        <input type="date" name="final" id="final" required />
    </div>
    <div class="form-camp">
        <label for="places">Número de places:</label>
        <input type="number" name="places" placeholder="Places" id="places" required />
    </div>
    <div class="form-camp">
        <label for="ciutat">Ciutat:</label>
        <select name="ciutat" id="ciutat">
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