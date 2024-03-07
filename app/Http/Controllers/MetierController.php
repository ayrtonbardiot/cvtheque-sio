<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetierRequest;
use App\Models\Metier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metiers = Metier::get();

        $data = [
            'title' => 'Les métiers de ' . config('app.name'),
            'description' => 'Retrouver toutes les métiers de ' . config('app.name'),
            'metiers' => $metiers
        ];

        return view('metiers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MetierRequest $request)
    {
        $validateData = $request->validated();
        Metier::create($validateData);
        return redirect()->route('metiers.index')->with('information', 'Création du métier avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Metier $metier, Request $request)
    {
        $data = [
            'title' => 'Les métiers de ' . config('app.name'),
            'description' => 'Retrouver toutes les métiers de ' . config('app.name'),
            'metier' => $metier
        ];

        if ($request->get('delete')) {
            $data['delete'] = true;
        }

        return view('metiers.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Metier $metier)
    {
        $data = [
            'title' => 'Les métiers de ' . config('app.name'),
            'description' => 'Retrouver toutes les métiers de ' . config('app.name'),
            'metier' => $metier
        ];
        return view('metiers.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MetierRequest $request, Metier $metier)
    {
        $validateData = $request->validated();
        $metier->update($validateData);
        $succes = 'Modification effectuée avec succès';

        return redirect()->route('metiers.index')->withInformation($succes);
    }

    /**
     * Show the view page for delete safe.
     */
    public function delete(Metier $metier)
    {

        $data = [
            'title' => 'Les métiers de ' . config('app.name'),
            'description' => 'Retrouver tous les métiers de ' . config('app.name'),
            'metier' => $metier
        ];

        return view('metiers.delete', $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metier $metier)
    {
        $metier->delete();

        return redirect()->route('metiers.index')->withInformation('Suppression effectuée avec succès');
    }
}
