<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mieszkania
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    @include('admin.module.alerts')
                    <x-application-logo class="block h-12 w-auto" />
                    <div class="flex flex-row justify-between">
                        <h1 class="mt-8 mb-4 text-2xl font-medium text-gray-900">
                            Mieszkania
                        </h1>
                        <a href="{{route('dashboard.flat.create')}}" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-green-100 transition-colors duration-150 bg-green-500 rounded-full focus:shadow-outline hover:bg-green-600">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Segment
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Mieszkanie
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Metraż
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Cena
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Plik
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Umowa
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Podgląd na stronie użytkownika
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Edycja
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Usuwanie
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tables as $key => $table)
                                <tr>
                                    <td class="px-6 py-4">
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
                                    <td class="px-6 py-4">
                                        {{$table->flat}}

                                    </td>
                                    <td class="px-6 py-4">
                                        {{$table->surface}}

                                    </td>
                                    <td class="px-6 py-4">
                                        @if($table->status == 'avaiable')
                                        <span class="text-emerald-400">Dostępny</span>
                                        @else
                                        <span class="text-rose-400">Niedostępny</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$table->price}}

                                    </td>
                                    <td class="px-6 py-4">
                                        @if(Storage::exists('public/'.$table->file_pdf))
                                        <a href="{{ asset('storage/'.$table->file_pdf) }}" download type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-file-pdf"></i></a>
                                        @else
                                        <p class="text-rose-400">Plik PDF nie istnieje.</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @if(Storage::exists('public/'.$table->file_priv))
                                        <a href="{{ asset('storage/'.$table->file_priv) }}" download type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-file-pdf"></i></a>
                                        @else
                                        <p class="text-rose-400">Plik PDF nie istnieje.</p>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('invest.show', $table->id) }}" type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-600 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('dashboard.flat.edit', $table->id) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 focus:outline-none dark:focus:ring-indigo-800">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('dashboard.flat.delete', $table->id) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz to usunąć?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
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