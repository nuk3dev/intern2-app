@extends('template.template')

@section('content')


    <div class="max-w-4xl p-8 mx-auto mt-10 text-white rounded-md shadow-lg">

        <h1 class="mb-6 text-2xl font-semibold text-center">Lead Aanmaken</h1>

        @if (session('success'))
            <p class="mb-4 text-green-600">{{ session('success') }}</p>
        @endif

        <form  action="{{url('leads/store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="voornaam" class="block text-sm font-medium text-white">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" value="{{ old('voornaam') }}" required
                    class="block w-full px-4 py-2 mt-1 text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('voornaam') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="achternaam" class="block text-sm font-medium text-white">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" value="{{ old('achternaam') }}" required
                    class="block w-full px-4 py-2 mt-1 text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('achternaam') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="telefoonnummer" class="block text-sm font-medium text-white">Telefoonnummer:</label>
                <input type="text" id="telefoonnummer" name="telefoonnummer" value="{{ old('telefoonnummer') }}" required
                    class="block w-full px-4 py-2 mt-1 text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('telefoonnummer') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="emailadres" class="block text-sm font-medium text-white">E-mailadres:</label>
                <input type="email" id="emailadres" name="emailadres" value="{{ old('emailadres') }}" required
                    class="block w-full px-4 py-2 mt-1 text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('emailadres') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="omschrijving" class="block text-sm font-medium text-white">Omschrijving:</label>
                <textarea id="omschrijving" name="omschrijving" rows="4"
                    class="block w-full px-4 py-2 mt-1 text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ old('omschrijving') }}</textarea>
                @error('omschrijving') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="bijlage" class="block text-sm font-medium text-white">Bijlage:</label>
                <input type="file" id="bijlage" name="bijlage"
                    class="block w-full mt-1 text-sm text-white file:border file:border-gray-300 file:rounded-md file:px-4 file:py-2">
                @error('bijlage') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="akkoord_algemene_voorwaarden" value="1" {{ old('akkoord_algemene_voorwaarden') ? 'checked' : '' }} required
                        class="text-indigo-500 form-checkbox focus:ring-indigo-500">
                    <span class="ml-2 text-sm text-white">Ik ga akkoord met de algemene voorwaarden</span>
                </label>
                @error('akkoord_algemene_voorwaarden') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                class="w-full py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                Lead Aanmaken
            </button>
        </form>
    </div>

@stop
