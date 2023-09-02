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
                            Edytowanie treści {{ $table->place }}
                        </h1>
                        <a href="{{ route('dashboard.setting') }}" type="button" class="mt-8 mb-4 text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">
                            <i class="fa-solid fa-chevron-left me-2"></i>Powrót
                        </a>
                    </div>
                    <form action="{{ route('dashboard.setting.upload', $table ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="mb-6">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Obraz</label>
                            <input type="file" name="content" id="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            @if($table->content)
                            <img src="{{ asset('asset/photo/' . $table->content) }}" alt="Aktualne zdjęcie" class="mt-2 max-w-full" id="current-image">
                            @else
                            <img src="" alt="Aktualne zdjęcie" class="mt-2 max-w-full" id="current-image" style="display: none;">
                            @endif
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#image').change(function() {
                                    var input = this;
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            $('#current-image')
                                                .attr('src', e.target.result)
                                                .css('display', 'block');
                                        };

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                });
                            });
                        </script>

                        <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 me-2">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisz
                        </button>
                        <a href="{{ route('dashboard.setting') }}" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <i class="fa-solid fa-x mr-2"></i>Anuluj
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>