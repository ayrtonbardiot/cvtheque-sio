{{--Directive blade spécifiant l'héritage --}}
@extends('cvtheque')

{{--directive blade specifiant l'inclusion--}}
@section('contenu')

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                    <h6 class="mb-0">Fiche création métier</h6>
                </div>
                <div class="flex-auto p-4 pt-6">
                    <div class="flex-auto p-2">
                        <form role="form" method="post" action="{{ route('metiers.store') }}">
                            @method('POST')
                            @csrf
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Nom du métier</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="libelle"
                                       name="libelle"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('libelle') border-red-600 @enderror"
                                       placeholder="Nom du métier" aria-label="Nom du métier" value="{{old('libelle')}}"/>
                                @error('libelle')
                                    <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700">Slug</label>
                            <div class="mb-4">
                                <input type="text"
                                       id="slug"
                                       name="slug"
                                       class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('slug') border-red-600 @enderror"
                                       placeholder="Slug" aria-label="Slug" value="{{old('slug')}}"/>
                                @error('slug')
                                    <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700" for="description">Description du métier</label>
                            <div class="mb-4">
                                <textarea
                                    id="description"
                                    name="description"
                                    class="focus:shadow-soft-primary-outline textarea text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow @error('description') border-red-600 @enderror"
                                    placeholder="Description du métier">{{old('description')}}</textarea>
                                @error('description')
                                 <p class="text-red-500" role="alert">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="text-center flex flex-row">
                                <a href="{{ route('metiers.index') }}"
                                   class="inline-block w-1/4 px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Retour
                                </a>
                                <button type="submit"
                                        class="ml-auto w-1/4 inline-block px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">
                                    Créer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
