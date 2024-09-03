{{-- @extends('layouts.doctor')

@section('content')
    <a href="{{ route('doctor.create') }}">Alta de un Doctor</a>
    <ul>
        @forelse ($doctors as $doctor)
            <li><a href="{{ route('doctor.show', $doctor->id) }}">{{ $doctor->name }}</a> | 
                <a href="{{ route('doctor.edit', $doctor->id) }}">EDITAR</a> | 
                <form method="POST" action="{{ route('doctor.destroy', $doctor->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="ELIMINAR">
                </form>
            </li>
        @empty
            <p>No hay datos</p>
        @endforelse
    </ul>
@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Doctores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('doctor.create') }}" class="btn btn-primary">Agregar</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Codigo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Licencia</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Telefono</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Accion</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $doctor->id }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $doctor->name }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $doctor->medical_license }}</td>
                                    <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $doctor->phone_number }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-primary">Ver</a> |

                                        <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-secondary">Actualizar</a> |

                                        <button onclick="deleteDoctor({{ $doctor->id }})" class="btn btn-danger">Eliminar</button>
                                        <form id="delete-form-{{ $doctor->id }}" action="{{ route('doctor.destroy', $doctor->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @empty($doctors)
                                    <p>No hay registros disponibles</p>
                                @endempty
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function deleteDoctor(id) {
        Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esta acción !",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    "¡Eliminado!",
                    "El registro del Doctor ha sido eliminado",
                    "success"
                ).then(() => {
                    document.getElementById('delete-form-' + id).submit();
                });
            }
        });
    }
</script>