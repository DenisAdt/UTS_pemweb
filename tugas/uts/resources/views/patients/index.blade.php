@extends('layouts.app')
  
@section('title', 'Home Patient')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Patients</h1>
        <a href="{{ route('patients.create') }}" class="btn btn-primary">Add Patient</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($patients->count() > 0) <!-- Changed $product to $patients -->
                @foreach($patients as $patient) <!-- Changed $rs to $patient -->
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $patient->name }}</td>
                        <td class="align-middle">{{ $patient->age }}</td>
                        <td class="align-middle">{{ $patient->gender }}</td>
                        <td class="align-middle">{{ $patient->address }}</td> <!-- Adjusted fields -->
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('patients.show', $patient->id) }}" type="button" class="btn btn-secondary">Detail</a> <!-- Changed route to patients.show -->
                                <a href="{{ route('patients.edit', $patient->id) }}" type="button" class="btn btn-warning">Edit</a> <!-- Changed route to patients.edit -->
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No patients found</td> <!-- Adjusted colspan -->
                </tr>
            @endif
        </tbody>
    </table>
@endsection
