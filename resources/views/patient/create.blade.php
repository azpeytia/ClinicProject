<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Crea Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form method="POST" action="{{ route('patient.store') }}" class="mx-auto" style="max-width: 24rem;">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="first_name" id="first_name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del Paciente">
                        @error('first_name')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                        <input type="text" name="last_name" id="last_name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Apellido del Paciente">
                        @error('last_name')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="curp" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">CURP</label>
                        <input type="text" name="curp" id="curp" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="CURP">
                        @error('curp')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="birthdate" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha nacimiento</label>
                        <input type="text" name="birthdate" id="birthdate" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Fecha nacimiento">
                        @error('birthdate')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                        <input type="text" name="address" id="address" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Direccion del Paciente">
                        @error('address')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Telefono del Paciente">
                        @error('phone_number')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                        <input type="text" name="email" id="email" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del Paciente">
                        @error('email')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genero</label>
                        <input type="text" name="gender" id="gender" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del Paciente">
                        @error('gender')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="doctor_id" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Doctor titular</label>
                        <input type="text" name="doctor_id" id="doctor_id" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre del Paciente">
                        @error('doctor_id')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <input class="btn btn-primary" type="submit" value="Agregar registro">
                    <a href="{{ route('patient.index') }}" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>