@extends('layouts.app')
  
@section('title', 'Show Patient')
  
@section('contents')
    <h1 class="mb-0">Detail Patient</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $patient->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $patient->age }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $patient->gender }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address" placeholder="Address" readonly>{{ $patient->address }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $patient->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $patient->updated_at }}" readonly>
        </div>
    </div>
@endsection
