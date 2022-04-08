@extends('admin.master')

<style>
    .rotate{
        transform: rotateY(180deg)!important;
    }
</style>
@php
    define('PAGE','contact')
@endphp
@section('main-content')
    <div class="container">
        <div class="card">
            <div class="card-header bg-gray d-flex justify-content-between">
                <a>Contact List</a>
                <a href="{{ route('skills.create') }}" class="btn btn-success">Add new</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>subject</th>
                            <th>message</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>


                            <td>
                                <a href="{{ route('contacts.edit',$contact) }}" class="btn btn-info py-2"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('contacts.destroy',$contact) }}" method="POST">
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
