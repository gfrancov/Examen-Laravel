@php
use App\Http\Controllers\CasalsController;    
@endphp
@include('includes.head')

<div class="space-between">
    <p>Nou Casal</p>
    <p><a href="{{ action([CasalsController::class, 'listarCasals']) }}" class="btn">Tornar</a></p>
</div>
<div class="content">
    <form method="POST" action="{{route('newCasal')}}">
        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        @csrf
        <div class="form-camp">
            <label for="nom">Nom del Casal:</label>
            <input type="text" name="nom" placeholder="Nom" id="nom" />
        </div>
        <div class="form-camp">
            <label for="inici">Data inici:</label>
            <input type="date" name="inici" id="inici" />
        </div>
        <div class="form-camp">
            <label for="final">Data final:</label>
            <input type="date" name="final" id="final" />
        </div>
        <div class="form-camp">
            <label for="places">Número de places:</label>
            <input type="number" name="places" placeholder="Places" id="places" />
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
            <input type="submit" class="btn btn-blue" value="Enviar" />
        </div>
    </form>
</div>
@include('includes.footer')