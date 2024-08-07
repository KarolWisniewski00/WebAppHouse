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
                    @if(Str::startsWith($table1->content, '<')) <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
                        <i class="fa-solid fa-circle-info"></i>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                            Ikony są dostępne <a href="https://fontawesome.com/search?o=r&m=free" class="font-semibold underline hover:no-underline">tutaj</a>.
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8" onclick="closeAlertBox('#alert-1')" data-dismiss-target="#alert-1" aria-label="Close">
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
                        Edytowanie treści {{ $table1->place }}
                    </h1>
                    <a href="{{ route('dashboard.setting') }}" type="button" class="mt-8 mb-4 text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        <i class="fa-solid fa-chevron-left me-2"></i>Powrót
                    </a>
                </div>
                <form action="{{ route('dashboard.setting.update', $table1 ) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-6">
                        <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Treść</label>
                        <textarea name="content" id="content" rows="4" placeholder="Wprowadź treść" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">{{ old('content', $table1->content) }}</textarea>
                        @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2">
                        <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisz
                    </button>
                    <a href="{{ route('dashboard.setting') }}" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        <i class="fa-solid fa-x mr-2"></i>Anuluj
                    </a>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>