<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Patient; // Change the model to Patient
 
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::orderBy('created_at', 'DESC')->get(); // Change variable name to plural form
  
        return view('patients.index', compact('patients')); // Change the view name to 'patients.index'
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create'); // Change the view name to 'patients.create'
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Patient::create($request->all());
 
        return redirect()->route('patients.index')->with('success', 'Patient added successfully'); // Change the route name to 'patients.index'
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);
  
        return view('patients.show', compact('patient')); // Change the view name to 'patients.show'
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
  
        return view('patients.edit', compact('patient')); // Change the view name to 'patients.edit'
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $patient = Patient::findOrFail($id);
  
        $patient->update($request->all());
  
        return redirect()->route('patients.index')->with('success', 'Patient updated successfully'); // Change the route name to 'patients.index'
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $patient = Patient::findOrFail($id);
  
        $patient->delete();
  
        return redirect()->route('patients.index')->with('success', 'Patient deleted successfully'); // Change the route name to 'patients.index'
    }
}
