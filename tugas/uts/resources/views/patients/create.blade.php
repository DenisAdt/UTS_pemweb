@extends('layouts.app')
  
@section('title', 'Create Patient')
  
@section('contents')
    <h1 class="mb-0">Add Patient</h1>
    <hr />
    <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="gender" class="form-control" placeholder="Gender">
            </div>
            <div class="col">
                <textarea class="form-control" name="address" placeholder="Address"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
