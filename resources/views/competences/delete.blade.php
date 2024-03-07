{{--Directive blade spécifiant l'héritage --}}
@extends('cvtheque')

{{--directive blade specifiant l'inclusion--}}
@section('contenu')

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <h6 class="mb-0">Fiche suppression compétence</h6>
                </div>
                <div class="flex-auto p-4 pt-6">
                    <div class="flex-auto p-2">
                        <form role="form">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Nom de la compétence</label>
                            <div class="mb-4">
                                <input type="text"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Nom de la compétence" aria-label="Nom de la compétence" value="{{ $competence->intitule }}" disabled/>
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700" for="description">Description de la compétence</label>
                            <div class="mb-4">
                                <textarea
                                        id="description"
                                       name="description"
                                       class="focus:shadow-soft-primary-outline textarea text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
                                       placeholder="Description" disabled>{{ $competence->description }}</textarea>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('competences.index') }}"
                                        class="inline-block w-1/4 px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Retour
                                </a>
                            </div>
                        </form>
                        <form method="post" action="{{ route('competences.destroy', $competence->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="inline-block w-1/4 px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                Supprimer cette compétence
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
