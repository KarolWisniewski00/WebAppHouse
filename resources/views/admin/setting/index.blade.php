<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ustawienia
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
                            Ustawienia
                        </h1>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
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
                                @foreach($tables as $key => $table)
                                <tr>
                                    <td class="px-6 py-4">
                                        {{$key+1}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$table->place}}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($table->type == 'photo')
                                        <img class="w-auto h-12" alt="" src="{{asset('asset/photo/'.$table->content)}}">
                                        @elseif(Str::startsWith($table->content, '<'))
                                        {!! $table->content !!}
                                        @else
                                        {{$table->content}}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        @if($table->type != 'photo')
                                        <a href="{{ route('dashboard.setting.edit', $table) }}" class="text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @else
                                        <a href="{{ route('dashboard.setting.edit.photo', $table) }}" class="text-white bg-emerald-500 hover:bg-emerald-600 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  focus:outline-none ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4 py-2">
                            {{ $tables->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>