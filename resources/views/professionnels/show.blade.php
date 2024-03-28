{{--Directive blade spécifiant l'héritage --}}
@extends('cvtheque')

{{--directive blade specifiant l'inclusion--}}
@section('contenu')

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <h6 class="mb-0">Fiche consultation professionnel</h6>
                </div>
                <div class="flex-auto p-4 pt-6">
                    <div class="flex-auto p-2">
                        <form role="form">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Nom du professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="nom"
                                       name="nom"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Nom du métier" aria-label="Nom du professionnel"
                                       value="{{ $professionnel->nom }}" disabled/>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Prénom du professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="prenom"
                                       name="prenom"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Prénom du professionnel" aria-label="Prénom du professionnel"
                                       value="{{ $professionnel->prenom }}" disabled/>
                            </div>
                            <div class="text-center flex flex-row">
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Code postal du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="cp"
                                               name="cp"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                               placeholder="Code postal du professionnel" aria-label="Code postal du professionnel"
                                               value="{{ $professionnel->cp }}" disabled/>
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Ville du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="ville"
                                               name="ville"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                               placeholder="Ville du professionnel" aria-label="Ville du professionnel"
                                               value="{{ $professionnel->ville }}" disabled/>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center flex flex-row">
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Téléphone du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="telephone"
                                               name="telephone"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                               placeholder="Téléphone du professionnel"
                                               aria-label="Téléphone du professionnel" value="{{ $professionnel->telephone }}" disabled/>
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="email"
                                               name="email"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                               placeholder="Email du professionnel" aria-label="Email du professionnel"
                                               value="{{ $professionnel->email }}" disabled/>
                                    </div>
                                </div>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Date de naissance du
                                professionnel</label>
                            <div class="mb-4">
                                <input type="date"
                                       id="naissance"
                                       name="naissance"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Date de naissance du professionnel"
                                       aria-label="Date de naissance du professionnel" value="{{ $professionnel->naissance }}" disabled/>
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Domaine d'activité</label>
                                <select id="selectO"
                                        name="domaine"
                                        multiple
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" disabled>
                                    <option value="S" @if(in_array("S", $professionnel->domaine)) selected @endif>Système</option>
                                    <option value="D" @if(in_array("D", $professionnel->domaine)) selected @endif>Développement</option>
                                    <option value="R" @if(in_array("R", $professionnel->domaine)) selected @endif>Réseau</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Compétences</label>
                                <select id="select2" multiple
                                        name="competences[]"
                                        autocomplete="off"
                                        disabled
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                    @foreach($competences as $competence)
                                        <option value="{{ $competence->id }}" @if(in_array($competence->id, old('competences', $professionnel->competences->pluck('id')->toArray()))) selected @endif>{{ $competence->intitule }}</option>
                                    @endforeach
                                </select>
                                @error('competences')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Source du
                                professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="source"
                                       name="source"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Source du professionnel"
                                       aria-label="Source du professionnel" value="{{ $professionnel->source }}" disabled/>
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Métier</label>
                                <select id="selectO"
                                        name="metier_id"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" disabled>
                                        <option value="{{ $professionnel->metier->id }}">{{ $professionnel->metier->libelle }}</option>
                                </select>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Observation sur le professionnel</label>
                            <div class="mb-4">
                                <textarea
                                       id="observation"
                                       name="observation"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Observation sur le professionnel"
                                       aria-label="Observation sur le professionnel" disabled>{{ $professionnel->observation }}</textarea>
                            </div>
                            <div class="min-h-6 mb-0.5 block pl-12 mt-2">
                                <input id="formation"
                                       name="formation"
                                       class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                       type="checkbox" checked="{{ $professionnel->formation }}" disabled/>
                                <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                                       for="formation">Formation déjà effectuée ?</label>
                            </div>
                            @if($cvExists)
                                <a href="../storage/cv/cv_{{ $professionnel->id }}.pdf" class="mb-2 ml-1 font-bold text-lg text-slate-700 mb-4">Voir le CV</a>
                            @else
                                <span class="mb-2 ml-1 font-bold text-lg text-slate-700">Aucun CV</span>
                            @endif
                            <div class="text-center flex flex-row">
                                <a href="{{ route('professionnels.index') }}"
                                   class="inline-block w-1/4 px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Retour
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
