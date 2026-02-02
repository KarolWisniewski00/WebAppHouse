<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mieszkanie
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
                            Edytowanie dodatku
                        </h1>
                        <a href="{{ route('dashboard') }}" type="button" class="mt-8 mb-4 text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                            <i class="fa-solid fa-chevron-left me-2"></i>Powrót
                        </a>
                    </div>
                    <form action="{{ route('dashboard.extra.update', $extra->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nazwa</label>
                                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 @error('name') is-invalid @enderror" value="{{ old('name', $extra->name) }}" required>
                                @error('name')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Cena</label>
                                <input type="number" step="0.01" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 @error('price') is-invalid @enderror" value="{{ old('price', $extra->price) }}" required>
                                @error('price')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- STATUS -->
                            <div class="md:col-span-2">
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>

                                <!-- Pole tekstowe -->
                                <input type="text" id="status" name="status"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 mb-3 @error('status') is-invalid @enderror"
                                    value="{{ old('status', $extra->status) }}">

                                <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50" role="alert">
                                    Status "W cenie mieszkania" ma kolor zielony - pozostałe neutralny
                                </div>

                                <!-- Przyciski pod inputem -->
                                <div class="flex gap-3">
                                    <button type="button"
                                        class="status-btn bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg text-sm px-4 py-2.5"
                                        data-value="W cenie mieszkania">
                                        W cenie mieszkania
                                    </button>

                                    <button type="button"
                                        class="status-btn bg-gray-400 hover:bg-gray-500 text-white font-medium rounded-lg text-sm px-4 py-2.5"
                                        data-value="Dodatkowo płatne">
                                        Dodatkowo płatne
                                    </button>
                                </div>

                                @error('status')
                                <div class="mt-2 text-sm text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisz
                        </button>
                        <a href="{{ route('dashboard') }}" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                            <i class="fa-solid fa-x mr-2"></i>Anuluj
                        </a>
                    </form>
                    <script>
                        $(function() {
                            $('.status-btn').on('click', function() {
                                const val = $(this).data('value');
                                $('#status').val(val).trigger('input');
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>