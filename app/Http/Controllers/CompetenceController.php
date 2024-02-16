<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Competence
};

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        echo "J'arrive sur la liste des compétences";
//        $competences = Competence::all();
//        $competences = Competence::all('intitule'); // SELECT intitule FROM competences;
//        $competences = Competence::get();
//        $competences = Competence::orderByDesc('id')->get();
//        $competences = Competence::where('intitule', '=', 'HTML')->get();
//        $competences = Competence::where('intitule', 'LIKE', '%concevoir%')->get();
//        $competences = Competence::orderByDesc('id')->take(3)->get();
//        $competences = Competence::orderByDesc('id')->limit(3)->get();
//        $competences = Competence::orderByDesc('id')->offset(6)->get();
//        $competences = Competence::orderByDesc('id')->skip(5)->get();
//        $competences = Competence::count();
//        $competences = Competence::where('intitule', 'LIKE', '%concevoir%')->count();
//        $competences = Competence::find(5);
//        $competences = Competence::first();
//        foreach($competences as $competence) {
//            echo $competence->intitule . "<br>";
//        }
        // dump & die
//        dd($competences);
        $competences = Competence::get();

        $data = [
            'title' => 'Les compétences de ' . config('app.name'),
            'description' => 'Retrouver toutes les compérences de ' . config('app.name'),
            'competences' => $competences
        ];

        return view('competences.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('competences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Competence $competence)
    {
        $data = [
            'title' => 'Les compétences de ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de ' . config('app.name'),
            'competence' => $competence
        ];

        return view('competences.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'Modification d\'une compétence';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'Suppression d\'une compétence';
    }
}
