@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="flex flex-col">
                <x-addRainfallForm />
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <h1 class="text-center text-2xl font-bold mb-6">Neerslag van de afgelopen maanden</h1>
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mb-6">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Naam
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Datum
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Neerslag
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($rainfalls as $rainfall)
                                        <x-rainfall :rainfall="$rainfall" />
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $rainfalls->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
