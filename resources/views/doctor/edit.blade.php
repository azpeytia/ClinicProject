{{-- @extends('layouts.doctor')

@section('content')
    <a href="{{ route('doctor.index') }}">Regresar</a>
    <form method="POST" action="{{ route('doctor.update', $doctor->id) }}">
        @method('PUT')
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="name" value="{{ $doctor->name }}" /> <br />

        <label for="">Licencia médica</label>
        <input type="text" name="medical_license" value="{{ $doctor->medical_license }}" /> <br />
        @error('medical_license')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        
        <label for="">Número de teléfono</label>
        <input type="text" name="phone_number" value="{{ $doctor->phone_number }}" /> <br />
        @error('phone_number')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Actualizar" />
    </form>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Actualiza Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <form id="update-form" method="POST" action="{{ route('doctor.update', $doctor->id) }}" class="mx-auto" style="max-width: 24rem;">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nombre completo del Doctor">
                        @error('name')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="medical_license" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cedula</label>
                        <input type="text" name="medical_license" id="medical_license" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cedula profesional">
                        @error('medical_license')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone_number" class="form-label block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                        <input type="text" name="phone_number" id="phone_number" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Telefono del Doctor">
                        @error('phone_number')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <input class="btn btn-primary" type="submit" value="Actualizar registro"> --}}
                    <button type="button" onclick="updateDoctor({{ $doctor->id }})" class="btn btn-secondary">Actualizar</button>
                    <a href="{{ route('doctor.index') }}" class="btn btn-primary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function updateDoctor() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡No podrás revertir esta acción !',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, actualizar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    '¡Actualizado!',
                    'El registro del Doctor ha sido actualizado',
                    'success'
                ).then(() => {
                    document.getElementById('update-form').submit();
                });
            }
        })
    }
</script>