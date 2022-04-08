@extends('admin.master')
@section('main-content')
@php
    define('PAGE','skill')
@endphp
<div class="container">


    <div class="row">
        

        <div class="col-md-12 col-xl-12">
           
            <div class="card">
                <div class="card-header">
                    <h5 class=" mb-3">Add Skill</h5>
                
                            </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                
                <div class="card-body">
                  
                    <form action="{{route('skills.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            
                        <div class="row">
                        
                        <div class="col-md-6 mt-2">
                            <label >Skill</label>
                            <input type="text"  class="form-control" name="skill" required >

                        </div>
                        <div class="col-md-6 mt-2">
                            <label >Percent</label>

                            <input type="text"  class="form-control" name="percent" required>
                            

                        </div>


                        <div class="col-md-12 mt-2">
                        <input type="submit" value="save" class="form-control btn btn-primary">
                        </div>
                    </div>

                    </form>

                
                </div>

            </div>
        </div>
    </div>

</div>
@endsection