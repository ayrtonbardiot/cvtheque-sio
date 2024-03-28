{{--Directive blade spécifiant l'héritage --}}
@extends('cvtheque')

{{--directive blade specifiant l'inclusion--}}
@section('contenu')
    <div class="flex flex-wrap -mx-3 h-[80vh]">
        <div class="flex-none w-full max-w-full px-3">
            @if(session('information'))
                <div class="w-full max-w-full px-3 mb-6">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-4">
                            <div class="flex flex-row -mx-3 items-center">
                                <div class="flex-none w-2/3 max-w-full px-3 ">
                                    <div>
                                        <h5 class="mb-0 font-bold">
                                            {{ session('information') }}
                                        </h5>
                                    </div>
                                </div>
                                <div class="px-3 text-right basis-1/3">
                                    <div
                                        class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
                                        <i class="ni leading-none text-lg relative top-3.5 text-white ni-check-bold"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Accueil</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="flex flex-row items-center">
                        <label for="selectM" class="ml-6">Rechercher un professionnel...</label>
                        <select id="selectM"
                                onchange="location.href=this.value"
                                name="professionnel"
                                autocomplete="off"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                            @foreach($professionnels as $professionnel)
                                <option
                                    value="{{ route('professionnels.show', $professionnel->id) }}">{{ strtoupper($professionnel->nom) . ' ' . $professionnel->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
