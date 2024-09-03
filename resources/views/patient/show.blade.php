<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Muestra Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form action="#" class="mx-auto" style="max-width: 24rem;">
                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="first_name">
                            Nombre
                        </label>
                        <input id="first_name" type="text" name="first_name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->first_name }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="last_name">
                            Apellido
                        </label>
                        <input id="last_name" type="text" name="last_name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->last_name }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="curp">
                            CURP
                        </label>
                        <input id="curp" type="text" name="curp" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->curp }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="birthdate">
                            Fecha nacimiento
                        </label>
                        <input id="birthdate" type="text" name="birthdate" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->birthdate }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="address">
                            Direccion
                        </label>
                        <input id="address" type="text" name="address" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->address }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="phone_number">
                            Telefono
                        </label>
                        <input id="phone_number" type="text" name="phone_number" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->phone_number }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="email">
                            Correo
                        </label>
                        <input id="email" type="text" name="email" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->email }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <div class="mb-3">
                        <label class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gender">
                            Genero
                        </label>
                        <input id="gender" type="text" name="gender" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $patient->gender }}" disabled class="mt-1 block w-full py-2 px-3 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:ring-opacity-50">
                    </div>

                    <a href="{{ route('patient.index') }}" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>