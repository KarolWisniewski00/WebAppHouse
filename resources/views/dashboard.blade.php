<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mieszkania
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    @include('admin.module.alerts')
                    @if(count($tables) == 0)
                    <div id="alert-4" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            Baza danych jest pusta, <a href="{{route('dashboard.flat.create')}}" class="font-semibold underline hover:no-underline">utwórz dane</a> aby zapewnić prawidłowe działanie.
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700" onclick="closeAlertBox('#alert-4')" data-dismiss-target="#alert-4" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    @endif
                    <x-application-logo class="block h-12 w-auto" />
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
                                    <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex flex-row justify-between align-center items-center">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Mieszkania
                        </h1>
                        <a href="{{route('dashboard.flat.create')}}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-full focus:shadow-outline hover:bg-green-600">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                                <tr>
                                    <th scope="col" class="px-4 py-2">
                                        Numer
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Piętro
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Pokoje
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Metraż
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Cena za m²
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Cena mieszkania
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Status
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Plik
                                    </th>
                                    <th scope="col" class="px-4 py-2">
                                        Podgląd na stronie użytkownika
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
                                @foreach($tables as $key => $table)
                                <tr>
                                    <td class="px-4 py-2">
                                        {{$table->id}}
                                    </td>
                                    <td class="px-4 py-2">
                                        @if($table->segment == 'floor-4')
                                        Piętro 3
                                        @elseif($table->segment == 'floor-3')
                                        Piętro 2
                                        @elseif($table->segment == 'floor-2')
                                        Piętro 1
                                        @elseif($table->segment == 'floor-1')
                                        Parter
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        @if($table->flat == 'room-4')
                                        4
                                        @elseif($table->flat == 'room-3')
                                        3
                                        @elseif($table->flat == 'room-2')
                                        2
                                        @elseif($table->flat == 'room-1')
                                        1
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->surface}}

                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->price_surface}}
                                    </td>
                                    <td class="px-4 py-2">
                                        {{$table->price}} <span style="font-size: xx-small;">zł</span>
                                    </td>
                                    <td class="px-4 py-2">
                                        @if($table->status == 'avaiable')
                                        <span class="text-emerald-400">Dostępne</span>
                                        @elseif($table->status == 'reservation')
                                        <span class="text-amber-400">Rezerwacja</span>
                                        @elseif($table->status == 'sold')
                                        <span class="text-rose-400">Sprzedane</span>
                                        @else
                                        <span class="text-rose-400">Niedostępne</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        @if(Storage::exists('public/'.$table->file_pdf))
                                        <a href="{{ asset('storage/'.$table->file_pdf) }}" download class="px-5 py-2.5 text-center mx-1 my-1 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-file-pdf"></i></a>
                                        @else
                                        <p class="text-rose-400">Plik PDF nie istnieje.</p>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('invest.show', $table->id) }}" class="px-5 py-2.5 text-center mx-1 my-1 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    <td class="px-4 py-2">
                                        <a href="{{ route('dashboard.flat.edit', $table->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-indigo-800">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td class="px-4 py-2">
                                        <form action="{{ route('dashboard.flat.delete', $table->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz to usunąć?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mx-1 my-1 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>