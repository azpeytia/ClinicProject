<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\DoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $doctors = Doctor::all();
        return view('doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request):RedirectResponse
    {
        Doctor::create($request->all());
        return redirect()->route('doctor.index')->with('success', 'Doctor creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor):View
    {
        return view('doctor.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor):View
    {
        return view('doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor):RedirectResponse
    {
        $doctor->update($request->all());
        return redirect()->route('doctor.index')->with('success', 'Doctor actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor):RedirectResponse
    {
        $doctor->delete();
        return redirect()->route('doctor.index')->with('danger', 'Doctor eliminado exitosamente');
    }
}
