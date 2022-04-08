@extends('admin.master')

<style>
    .rotate{
        transform: rotateY(180deg)!important;
    }
</style>
@php
    define('PAGE','portfolio')
@endphp
@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-gray d-flex justify-content-between">
                <a>Portfolio Data</a>
                <a href="{{ route('portfolios.create') }}" class="btn btn-success">Add new</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Url</th>
                            <th>Client</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            
                        <tr>
                            <td>{{ $portfolio->name }}</td>
                            <td><img src="{{ asset($portfolio->other) }}" width="100"/></td>
                            <td>{{ $portfolio->link }}</td>

                            <td>{{ $portfolio->client }}</td>

                            <td>
                                <a href="{{ route('portfolios.edit',$portfolio) }}" class="btn btn-info py-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('portfolios.destroy',$portfolio) }}" method="POST">
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
