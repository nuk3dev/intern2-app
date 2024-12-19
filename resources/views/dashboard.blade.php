@extends('template.template')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Voornaam
                </th>
                <th scope="col" class="px-6 py-3">
                    Achternaam
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefoonnummer
                </th>
                <th scope="col" class="px-6 py-3">
                    E-mailadres
                </th>
                <th scope="col" class="px-6 py-3">
                    Omschrijving
                </th>
                <th scope="col" class="px-6 py-3">
                    Actie
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $lead)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $lead->voornaam }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $lead->achternaam }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->telefoonnummer }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->emailadres }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $lead->omschrijving }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
