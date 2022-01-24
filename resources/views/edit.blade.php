@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Edit Project
                    </div>
                    <div class="card-body">
                        <form action="{{ route('projects.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpName" value="{{ old('name', $project->name) }}">
                                <small id="helpName" class="form-text text-muted">Enter the project name</small>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City:</label>
                                <input type="text" class="form-control" name="city" id="city" aria-describedby="helpCity" value="{{ old('city', $project->city->name) }}">
                                <small id="helpCity" class="form-text text-muted">Enter the project city</small>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Company:</label>
                                <input type="text" class="form-control" name="company" id="company" aria-describedby="helpCompany" value="{{ old('company', $project->company->name) }}">
                                <small id="helpCompany" class="form-text text-muted">Enter the project company</small>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection