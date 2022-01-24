@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Projects
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>City</th>
                                    <th>Company</th>
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($projects as $project)
                                    <tr>
                                        <td>{{ $project->project_id }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->city->name }}</td>
                                        <td>{{ $project->company->name }}</td>
                                        <td>
                                            <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection