<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompetenceRequest;
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
        $competences = Competence::paginate(5);

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
    public function store(CompetenceRequest $request)
    {
//        $validateData = $request->validated();
//        Competence::create($validateData);
//        return redirect()->route('competences.index')->with('information', 'Création de la compétence avec succès.');
        // Autre alternative
        $competence = new Competence();
        $competence->intitule = $request->intitule;
        $competence->description = $request->description;
        $competence->save();
        $succes = 'Enregistrement effecuté avec succès';
        return redirect()->route('competences.index')->withInformation($succes);
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
    public function edit(Competence $competence)
    {
        $data = [
            'title' => 'Les compétences de ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de ' . config('app.name'),
            'competence' => $competence
        ];

        return view('competences.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompetenceRequest $request, Competence $competence)
    {
        $validateData = $request->all();
        $competence->update($validateData);
        $succes = 'Modification effectuée avec succès';

        return redirect()->route('competences.index')->withInformation($succes);
    }

    /**
     * Show the view page for delete safe.
     */
    public function delete(Competence $competence) {

        $data = [
            'title' => 'Les compétences de ' . config('app.name'),
            'description' => 'Retrouver toutes les compétences de ' . config('app.name'),
            'competence' => $competence
        ];

        return view('competences.delete', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Competence $competence)
    {
        $competence->delete();

        return redirect()->route('competences.index')->withInformation('Suppression effectuée avec succès');
    }
}
