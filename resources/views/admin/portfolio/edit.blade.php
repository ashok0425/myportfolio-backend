@extends('admin.master')
@section('main-content')
@php
    define('PAGE','portfolio')
@endphp
<div class="container">


    <div class="row">
        

        <div class="col-md-12 col-xl-12">
           
            <div class="card">
                <div class="card-header">
                    <h5 class=" mb-3">Edit Portfolio</h5>
                
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
                  
                    <form action="{{route('portfolios.update',$portfolio)}}" method="POST" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                            
                        <div class="row">
                        
                        <div class="col-md-6 mt-2">
                            <label >Name</label>
                            <input type="text"  class="form-control" name="name" required value="{{ $portfolio->name }}">

                        </div>
                        <div class="col-md-6 mt-2">
                            <label >Client</label>

                            <input type="text"  class="form-control" name="client" required value="{{ $portfolio->client }}">
                            

                        </div>


                            <div class="col-md-6 mt-2">
                            <label >Program</label>
                            <input type="text" class="form-control" name="program" value="{{ $portfolio->program }}">

                        </div>

                        <div class="col-md-6 mt-2">
                            <label >Link</label>
                            <input type="text"  class="form-control" name="link" value="{{ $portfolio->link }}">

                        </div>


                        <div class="col-md-6 mt-2">
                            <label >Type</label>
                            <select name="type" id="" class="form-select form-control">
                                <option value="1" @if ($portfolio->type==1)
                                    selected
                                    
                                @endif>Web</option>
                                <option value="2" @if ($portfolio->type==2)
                                    selected
                                    
                                @endif>App</option>

                            </select>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Image</label>

                            <div class="file-upload-wrapper" data-text="Select your file!">
                            <input name="file" type="file" class="file-upload-field" value="">
                          </div>
                          <img src="{{ asset($portfolio->other) }}" width="100" alt="">
                        </div>

                       
                    
                        <div class="col-md-12 mt-2">
                        <input type="submit" value="save" class="form-control btn btn-primary">
                        </div>
                    </form>

                
                </div>

            </div>
        </div>
    </div>

</div>
@endsection