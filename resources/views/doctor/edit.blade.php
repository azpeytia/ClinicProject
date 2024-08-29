@extends('layouts.doctor')

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
@endsection