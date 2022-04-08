@extends('admin.master')

<style>
    .rotate{
        transform: rotateY(180deg)!important;
    }
</style>
@php
    define('PAGE','skill')
@endphp
@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-gray d-flex justify-content-between">
                <a>Skill List</a>
                <a href="{{ route('skills.create') }}" class="btn btn-success">Add new</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Skill</th>
                            <th>Percent</th>
                            
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            
                        <tr>
                            <td>{{ $skill->skill }}</td>
                            <td>{{ $skill->percent }}%</td>


                            <td>
                                <a href="{{ route('skills.edit',$skill) }}" class="btn btn-info py-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('skills.destroy',$skill) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                <button class="btn btn-danger py-2"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
