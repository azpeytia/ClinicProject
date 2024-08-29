@extends('layouts.doctor')

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
@endsection