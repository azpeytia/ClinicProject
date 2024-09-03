{{-- @extends('layouts.doctor')

@section('content')
    <a href="{{ route('doctor.index') }}">Regresar</a>
    <h1>{{ $doctor->name }}</h1>
    <p>{{ $doctor->medical_license }}</p>
    <p>{{ $doctor->phone_number }}</p>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Muestra Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="#" class="mx-auto" style="max-width: 24rem;">
                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="name">
                            Nombre
                        </label>
                        <input id="name" type="text" name="name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $doctor->name }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="medical_license">
                            Licencia Médica
                        </label>
                        <input id="medical_license" type="text" name="medical_license" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $doctor->medical_license }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="phone_number">
                            Telefono
                        </label>
                        <input id="phone_number" type="text" name="phone_number" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $doctor->phone_number }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <a href="{{ route('doctor.index') }}" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>