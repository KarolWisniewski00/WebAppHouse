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
                            Dodawanie nowego mieszkania
                        </h1>
                        <a href="{{ route('dashboard') }}" type="button" class="mt-8 mb-4 text-white bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                            <i class="fa-solid fa-chevron-left me-2"></i>Powrót
                        </a>
                    </div>
                    <form action="{{ route('dashboard.flat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <h3 class="mb-5 text-lg font-medium text-gray-900">Piętro</h3>
                            <ul class="grid w-full gap-6 md:grid-cols-1">
                                <li>
                                    <input type="radio" id="floor-4" name="segment" value="floor-4" class="hidden peer" required>
                                    <label for="floor-4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Piętro 3</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="floor-3" name="segment" value="floor-3" class="hidden peer">
                                    <label for="floor-3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Piętro 2</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="floor-2" name="segment" value="floor-2" class="hidden peer">
                                    <label for="floor-2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Piętro 1</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="floor-1" name="segment" value="floor-1" class="hidden peer">
                                    <label for="floor-1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Parter</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                            @error('segment')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <h3 class="mb-5 text-lg font-medium text-gray-900">Pokoje</h3>
                            <ul class="grid w-full gap-6 md:grid-cols-2">
                                <li>
                                    <input type="radio" id="room-4" name="flat" value="room-4" class="hidden peer" required>
                                    <label for="room-4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">4 pokoje</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="room-3" name="flat" value="room-3" class="hidden peer">
                                    <label for="room-3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">3 pokoje</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="room-2" name="flat" value="room-2" class="hidden peer">
                                    <label for="room-2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">2 pokoje</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="room-1" name="flat" value="room-1" class="hidden peer">
                                    <label for="room-1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">1 pokój</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                            @error('flat')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Metraż</label>
                            <input id="surface" value="{{ old('surface') ? old('surface') : '' }}" name="surface" type="number" step="0.01" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="m²" required>
                            @error('surface')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Cena za m²</label>
                            <input id="price_surface" value="{{ old('price_surface') ? old('price_surface') : '' }}" name="price_surface" type="number" step="0.01" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Cena za m²" required>
                            @error('price_surface')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <p id="total_price" class="text-gray-900 text-sm"></p>
                        </div>
                        <script>
                            $(document).ready(function() {
                                // Pobierz wartości metrażu i ceny za metr kwadratowy
                                var surface = parseFloat($('#surface').val());
                                var priceSurface = parseFloat($('#price_surface').val());

                                // Oblicz całkowitą cenę
                                var totalPrice = surface * priceSurface;

                                // Wyświetl wynik na stronie
                                $('#total_price').text('Całkowita cena: ' + totalPrice.toFixed(2) + ' zł'); // Dwa miejsca po przecinku

                                $('#surface, #price_surface').on('input', function() {
                                    // Pobierz wartości metrażu i ceny za metr kwadratowy
                                    var surface = parseFloat($('#surface').val());
                                    var priceSurface = parseFloat($('#price_surface').val());

                                    // Oblicz całkowitą cenę
                                    var totalPrice = surface * priceSurface;

                                    // Wyświetl wynik na stronie
                                    $('#total_price').text('Całkowita cena: ' + totalPrice.toFixed(2) + ' zł'); // Dwa miejsca po przecinku
                                });
                            });
                        </script>
                        <div class="mb-6">
                            <h3 class="mb-5 text-lg font-medium text-gray-900">Status</h3>
                            <ul class="grid w-full gap-6 md:grid-cols-2">
                                <li>
                                    <input type="radio" id="avaiable" name="status" value="avaiable" class="hidden peer" required>
                                    <label for="avaiable" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Dostępne</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="sold" name="status" value="sold" class="hidden peer">
                                    <label for="sold" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Sprzedane</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="reservation" name="status" value="reservation" class="hidden peer">
                                    <label for="reservation" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Rezerwacja</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="disable" name="status" value="disable" class="hidden peer">
                                    <label for="disable" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer  peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 ">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Niedostępne</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                            @error('status')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Wgraj pdf publiczne</label>
                            <input name="file_pdf" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                            @error('file_pdf')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisz
                        </button>
                        <a href="{{ route('dashboard') }}" class="text-red-500 hover:text-white border border-red-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                            <i class="fa-solid fa-x mr-2"></i>Anuluj
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>