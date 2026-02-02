<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel Główny
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
                    <div class="flex flex-row justify-between align-center items-center mt-8 mb-4">
                        <div>
                            <h1 class="text-2xl font-medium text-gray-900">
                                Pobierz CSV
                            </h1>
                            <p>
                                Danych dotyczący cen mieszkań (stan na 22.07.2025)
                            </p>
                        </div>
                        <a href="{{ route('export.csv') }}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-orange-100 transition-colors duration-150 bg-orange-500 rounded-full focus:shadow-outline hover:bg-orange-600">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                    <hr class="my-12">
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Dodaki
                        </h1>
                        <a href="{{route('dashboard.extra.create')}}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-full focus:shadow-outline hover:bg-green-600">
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
                                        Nazwa
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Cena
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Status
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Edycja
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Usuwanie
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($extras as $key => $table)
                                <tr>
                                    <td class="px-4 py-2">
                                        {{$key + 1}}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->name}}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->price}}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->status}}
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('dashboard.extra.edit', $table->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1 focus:outline-none">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('dashboard.extra.delete', $table->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz to usunąć?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 py-2">

                        </div>
                    </div>
                    <hr class="my-12">
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Prywatne pliki
                        </h1>
                        <a href="{{route('dashboard.files.create')}}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-blue-100 transition-colors duration-150 bg-blue-500 rounded-full focus:shadow-outline hover:bg-blue-600">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="flex flex-col">
                        @foreach ($files as $file)
                        <div class="flex justify-between mb-3 align-center items-center">
                            <div class="h3">
                                {{ $file }}
                            </div>
                            <div>
                                <form action="{{ route('dashboard.files.delete', $file) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz to usunąć?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Zarządzaj widocznością A1 A2 A3
                        </h1>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Miejsce
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Zawartość
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edycja
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4">
                                    a1
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['a1']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/339" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    a2
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['a2']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/340" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    a3
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['a3']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/341" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Zarządzaj aktywnością przycisku dzwonienia
                        </h1>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Miejsce
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Zawartość
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edycja
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4">
                                    Po kliknięciu dzowoń
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['moduldzwonienie']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/342" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Zarządzaj aktywnością wykończenia wnętrz
                        </h1>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Miejsce
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Zawartość
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edycja
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4">
                                    Wykończenia wnętrz
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['wykonczenia']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/343" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Zarządzaj aktywnością banneru
                        </h1>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Miejsce
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Zawartość
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edycja
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-6 py-4">
                                    Banner włącz wyłącz
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['banner']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/344" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">
                                    Banner zdjęcie
                                </td>
                                <td class="px-6 py-4">
                                    {{$setting['banner_photo']}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('dashboard') }}/setting/edit/photo/345" class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>