{{--Directive blade spécifiant l'héritage --}}
@extends('cvtheque')

{{--directive blade specifiant l'inclusion--}}
@section('contenu')

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <h6 class="mb-0">Fiche création professionnel</h6>
                </div>
                <div class="flex-auto p-4 pt-6">
                    <div class="flex-auto p-2">
                        <form role="form" method="post" action="{{ route('professionnels.update', $professionnel) }}">
                            @method('PUT')
                            @csrf
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Nom du professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="nom"
                                       name="nom"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('nom') border-red-600 @enderror"
                                       placeholder="Nom du professionnel" aria-label="Nom du professionnel"
                                       value="{{ old('nom', $professionnel->nom) }}"/>
                                @error('nom')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Prénom du professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="prenom"
                                       name="prenom"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('prenom') border-red-600 @enderror"
                                       placeholder="Prénom du professionnel" aria-label="Prénom du professionnel"
                                       value="{{ old('prenom', $professionnel->prenom) }}"/>
                                @error('prenom')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center flex flex-row">
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Code postal du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="cp"
                                               name="cp"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('cp') border-red-600 @enderror"
                                               placeholder="Code postal du professionnel" aria-label="Code postal du professionnel"
                                               value="{{ old('cp', $professionnel->cp) }}"/>
                                        @error('cp')
                                        <p class="text-red-500" role="alert">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Ville du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="ville"
                                               name="ville"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('ville') border-red-600 @enderror"
                                               placeholder="Ville du professionnel" aria-label="Ville du professionnel"
                                               value="{{ old('ville', $professionnel->ville) }}"/>
                                        @error('ville')
                                        <p class="text-red-500" role="alert">{{ $message }}</p>
                                        @enderror
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
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('telephone') border-red-600 @enderror"
                                               placeholder="Téléphone du professionnel"
                                               aria-label="Téléphone du professionnel" value="{{ old('telephone', $professionnel->telephone) }}"/>
                                        @error('telephone')
                                        <p class="text-red-500" role="alert">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex flex-col w-1/2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Email du
                                        professionnel</label>
                                    <div class="mb-4">
                                        <input type="text"
                                               id="email"
                                               name="email"
                                               class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('email') border-red-600 @enderror"
                                               placeholder="Email du professionnel" aria-label="Email du professionnel"
                                               value="{{ old('email', $professionnel->email) }}"/>
                                        @error('email')
                                        <p class="text-red-500" role="alert">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Date de naissance du
                                professionnel</label>
                            <div class="mb-4">
                                <input type="date"
                                       id="naissance"
                                       name="naissance"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('naissance') border-red-600 @enderror"
                                       placeholder="Date de naissance du professionnel"
                                       aria-label="Date de naissance du professionnel" value="{{ old('naissance', $professionnel->naissance) }}"/>
                                @error('naissance')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Domaine d'activité</label>
                                <select id="selectM" multiple
                                        name="domaine[]"
                                        autocomplete="off"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                    <option value="S" @if(in_array("S", old('domaine', $professionnel->domaine))) selected @endif>Système</option>
                                    <option value="D" @if(in_array("D", old('domaine', $professionnel->domaine))) selected @endif>Développement</option>
                                    <option value="R" @if(in_array("R", old('domaine', $professionnel->domaine))) selected @endif>Réseau</option>
                                </select>
                                @error('domaine')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Source du
                                professionnel</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="source"
                                       name="source"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('source') border-red-600 @enderror"
                                       placeholder="Source du professionnel"
                                       aria-label="Source du professionnel" value="{{ old('source', $professionnel->source) }}"/>
                                @error('source')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Métier</label>
                                <select id="selectO"
                                        name="metier_id"
                                        class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('metier_id') border-red-600 @enderror">
                                    @foreach($metiers as $metier)
                                        <option value="{{ $metier->id }}" @if($professionnel->metier->id == $metier->id) selected @endif>{{ $metier->libelle }}</option>
                                    @endforeach
                                </select>
                                @error('metier_id')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Observation sur le
                                professionnel</label>
                            <div class="mb-4">
                                <textarea
                                    id="observation"
                                    name="observation"
                                    class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('observation') border-red-600 @enderror"
                                    placeholder="Observation sur le professionnel"
                                    aria-label="Observation sur le professionnel">{{ old('observation', $professionnel->observation) }}</textarea>
                                @error('observation')
                                <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="min-h-6 mb-0.5 block pl-12">
                                <input id="formation"
                                       name="formation"
                                       class="mt-0.54 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right"
                                       type="checkbox" @checked(old('formation', $professionnel->formation ))/>
                                <h1>TEST {{ old('formation', $professionnel->formation) }}</h1>
                                <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700"
                                       for="formation">Formation déjà effectuée ?</label>
                            </div>
                            <div class="text-center flex flex-row">
                                <a href="{{ route('professionnels.index') }}"
                                   class="inline-block w-1/4 px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Retour
                                </a>
                                <button type="submit"
                                        class="ml-auto w-1/4 inline-block px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Modifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
