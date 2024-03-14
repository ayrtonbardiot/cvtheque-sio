<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionnelRequest;
use App\Models\Competence;
use App\Models\Metier;
use App\Models\Professionnel;
use Illuminate\Http\Request;

class ProfessionnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = "")
    {
        $professionels = $slug ? Metier::where('slug', $slug)->firstOrFail()->professionnels()->get()
            : Professionnel::get();

        $metiers = Metier::all();

        $data = [
            'title' => 'Les professionnels de ' . config('app.name'),
            'description' => 'Retrouvez tous les professionnels de ' . config('app.name'),
            'professionnels' => $professionels,
            'metiers' => $metiers,
            'slug' => $slug
        ];

        return view('professionnels.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $competences = Competence::all();
        $metiers = Metier::all();
        return view('professionnels.create', ['metiers' => $metiers, 'competences' => $competences]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessionnelRequest $request)
    {
        $validateData = $request->validated();
        $validateData['domaine'] = implode(",", $request->input('domaine'));
        $professionnel = Professionnel::create($validateData);
        $professionnel->competences()->attach($validateData['competences']);
        return redirect()->route('professionnels.index')->with('information', 'Création du professionnel avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professionnel $professionnel)
    {
        $professionnel->domaine = explode(",", $professionnel->domaine);
        $competences = Competence::all();
        $data = [
            'title' => 'Les professionnels de ' . config('app.name'),
            'description' => 'Retrouver tous les professionnels de ' . config('app.name'),
            'professionnel' => $professionnel,
            'competences' => $competences
        ];

        return view('professionnels.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professionnel $professionnel)
    {
        $metiers = Metier::all();
        $competences = Competence::all();
        $professionnel->domaine = explode(",", $professionnel->domaine);

        $data = [
            'title' => 'Les professionnels de ' . config('app.name'),
            'description' => 'Retrouver tous les professionnels de ' . config('app.name'),
            'professionnel' => $professionnel,
            'metiers' => $metiers,
            'competences' => $competences
        ];

        return view('professionnels.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessionnelRequest $request, Professionnel $professionnel)
    {
        $validateData = $request->validated();
        $validateData['domaine'] = implode(",", $request->input('domaine'));
        $professionnel->update($validateData);
        $professionnel->competences()->sync($request->competences);
        return redirect()->route('professionnels.index')->with('information', 'Modification du professionnel avec succès.');
    }

    /**
     * Show the view page for delete safe.
     */
    public function delete(Professionnel $professionnel)
    {
        $competences = Competence::all();

        $data = [
            'title' => 'Les professionnels de ' . config('app.name'),
            'description' => 'Retrouver tous les professionnels de ' . config('app.name'),
            'professionnel' => $professionnel,
            'competences' => $competences
        ];

        return view('professionnels.delete', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professionnel $professionnel)
    {
        $professionnel->delete();

        return redirect()->route('professionnels.index')->with('information', 'Suppression du professionnel avec succès.');
    }
}
