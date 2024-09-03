<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Listado de Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <div class="mb-4">
                        <a href="{{ route('patient.create') }}" class="btn btn-primary">Agregar</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full border">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Codigo</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Apellido</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">CURP</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Fecha nacimiento</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Direccion</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Telefono</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Correo</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Genero</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Doctor titular</th>
                                    <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Accion</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->id }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->first_name }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->last_name }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->curp }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->birthdate }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->address }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->phone_number }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->email }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->gender }}</td>
                                        <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $patient->doctor_id }}</td>
                                        <td class="border px-4 py-2 text-center">
                                            <a href="{{ route('patient.show', $patient->id) }}" class="btn btn-primary">Ver</a> |

                                            <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-secondary">Actualizar</a> |

                                            <button onclick="deletePatient({{ $patient->id }})" class="btn btn-danger">Eliminar</button>
                                            <form id="delete-form-{{ $patient->id }}" action="{{ route('patient.destroy', $patient->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @empty($patients)
                                        <p>No hay registros disponibles</p>
                                    @endempty
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function deletePatient(id) {
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
                    "El registro del Paciente ha sido eliminado",
                    "success"
                ).then(() => {
                    document.getElementById('delete-form-' + id).submit();
                });
            }
        });
    }
</script>