<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ciutats;
use App\Models\Casals;

class CasalsController extends Controller
{
    public function listarCasals() {

        $allCasals = Casals::all();
        $allCiutats = Ciutats::all();

        foreach($allCasals as $casal) {
            $casal['ciutat'] = Ciutats::where('id', '=', $casal['id_ciutat'])->first()['nom'];
        }

        return view('casals', array(
            'title' => "Casals",
            'ciutats' => $allCiutats,
            'casals' => $allCasals
        ));

    }

    public function formNewCasal() {

        $ciutats = Ciutats::all();

        return view('formNew', array(
            'title' => "Nou casal",
            'ciutats' => $ciutats
        ));

    }

    public function newCasal(Request $request) {

        Casals::create([
            'nom' => $request->input('nom'),
            'data_inici' => $request->input('inici'),
            'data_final' => $request->input('final'),
            'n_places' => $request->input('places'),
            'id_ciutat' => $request->input('ciutat'),
        ]);

        return redirect('/');

    }

    public function casalInfo($idCasal) {

        $casal = Casals::where('id', '=', $idCasal)->first();
        $ciutats = Ciutats::where('id', '!=', $casal['id_ciutat'])->get();
        $ciutatSelec = Ciutats::where('id', '=', $casal['id_ciutat'])->first()['nom'];

        return view('modify', array(
            'title' => "Nou casal",
            'casal' => $casal,
            'ciutats' => $ciutats,
            'ciutatSelec' => $ciutatSelec
        ));

    }

    public function modifyCasal(Request $request) {

        $casal = Casals::find( $request->input('id') );
        $casal->nom = $request->input('nom');
        $casal->data_inici = $request->input('inici');
        $casal->data_final = $request->input('final');
        $casal->n_places = $request->input('places');
        $casal->id_ciutat = $request->input('ciutat');
        $casal->save();

        return redirect('/');
    }

    public function esborrarCasal($idCasal) {
        Casals::where('id', $idCasal)->delete();
        return redirect('/');
    }
}
