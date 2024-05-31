@extends('layouts.app')
  
@section('title', 'Edit Patient')
  
@section('contents')
    <h1 class="mb-0">Edit Patient</h1>
    <hr />
    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $patient->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $patient->age }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Gender</label>
                <input type="text" name="gender" class="form-control" placeholder="Gender" value="{{ $patient->gender }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address" placeholder="Address">{{ $patient->address }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
