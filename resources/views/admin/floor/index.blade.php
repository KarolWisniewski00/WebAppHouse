<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Piętra
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    @include('admin.module.alerts')
                    @if(count($tables) == 0)
                    <div id="alert-4" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            Baza danych jest pusta, <a href="{{route('dashboard.flat.create')}}" class="font-semibold underline hover:no-underline">utwórz dane</a> aby zapewnić prawidłowe działanie.
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8" onclick="closeAlertBox('#alert-4')" data-dismiss-target="#alert-4" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    @endif
                    <x-application-logo class="block h-12 w-auto" />
                    <div class="flex flex-row justify-between">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Piętra
                        </h1>
                        <a href="{{route('dashboard.flat.create')}}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-full focus:shadow-outline hover:bg-green-600">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                                <tr>
                                    <th scope="col" class="px-4 py-2">
                                        Numer
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Plik
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Edycja
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($tables as $key => $table)
                                <tr>
                                    <td class="px-4 py-3">
                                        {{$table->id}}
                                    </td>
                                    <td class="px-4 py-3">
                                        @if(Storage::exists('public/'.$table->file_pdf) && $table->file_pdf != null)
                                        <a href="{{ asset('storage/'.$table->file_pdf) }}" download type="button" class="px-5 py-2.5 text-center mx-1 my-1 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200"><i class="fa-solid fa-file-pdf"></i></a>
                                        @else
                                        <p class="text-rose-400">Plik PDF nie istnieje.</p>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">
                                        <a href="{{ route('dashboard.floor.edit', $table->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1 focus:outline-none">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 py-2">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>