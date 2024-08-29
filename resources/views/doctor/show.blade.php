@extends('layouts.doctor')

@section('content')
    <a href="{{ route('doctor.index') }}">Regresar</a>
    <h1>{{ $doctor->name }}</h1>
    <p>{{ $doctor->medical_license }}</p>
    <p>{{ $doctor->phone_number }}</p>
@endsection