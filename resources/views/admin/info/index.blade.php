@extends('admin.master')
@section('main-content')
@php
    define('PAGE','info')
@endphp
<div class="container">


    <div class="row">
        

        <div class="col-md-12 col-xl-12">
           
            <div class="card">
                <div class="card-header">
                    <h5 class=" mb-3">My Information</h5>
                
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
                  
                    <form action="{{route('infos.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            
                        <div class="row">
                        
                        <div class="col-md-6 mt-2">
                            <label >Name</label>
                            <input type="text" value="{{$info->name}}" class="form-control" name="name" required>

                        </div>
                        <div class="col-md-6 mt-2">
                            <label >Email</label>

                            <input type="email" value="{{$info->email}}" class="form-control" name="email" required>
                            

                        </div>


                            <div class="col-md-6 mt-2">
                            <label >Phone</label>
                            <input type="number" value="{{$info->phone}}" class="form-control" name="phone" required>

                        </div>

                        <div class="col-md-6 mt-2">
                            <label >Facebook</label>
                            <input type="text" value="{{$info->facebook}}" class="form-control" name="facebook" required>

                        </div>


                        <div class="col-md-6 mt-2">
                            <label >Github</label>
                            <input type="text" value="{{$info->github}}" class="form-control" name="github" required>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Twitter</label>
                            <input type="text" value="{{$info->twitter}}" class="form-control" name="twitter" required>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Instagram</label>
                            <input type="text" value="{{$info->instagram}}" class="form-control" name="instagram" required>

                        </div>



                        



                        <div class="col-md-6 mt-2">
                            <label >Linkdein</label>
                            <input type="text" value="{{$info->linkdein}}" class="form-control" name="linkdein" required>

                        </div>


                        <div class="col-md-6 mt-2">
                            <label >Skype</label>
                            <input type="text" value="{{$info->skype}}" class="form-control" name="skype" required>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Nationality</label>
                            <input type="text" value="{{$info->nationality}}" class="form-control" name="nationality" required>

                        </div>


                        <div class="col-md-6 mt-2">
                            <label >Experience</label>
                            <input type="text" value="{{$info->experience}}" class="form-control" name="experience" required>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Project</label>
                            <input type="text" value="{{$info->project}}" class="form-control" name="project" required>
                        </div>




                        <div class="col-md-6 mt-2">
                            <label >Customer</label>
                            <input type="text" value="{{$info->customer}}" class="form-control" name="customer" required>

                        </div>




                        <div class="col-md-6 mt-2">
                            <label >Address</label>
                            <input type="text" value="{{$info->address}}" class="form-control" name="address" required>

                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Age</label>
                            <input type="text" value="{{$info->age}}" class="form-control" name="age" required>

                        </div>


                        
                        <div class="col-md-6 mt-2">
                            <label >Designation</label>
                            <input type="text" value="{{$info->designation}}" class="form-control" name="designation" required>

                        </div>

                        <div class="col-md-6 mt-2">
                            <label >Image</label>

                            <div class="file-upload-wrapper" data-text="Select your file!">
                            <input name="image" type="file" class="file-upload-field" value="">
                          </div>
                          <a href="{{ asset($info->image) }}" download="ashokmehtacv">
                            <img src="{{ asset($info->image) }}" alt="" width="100">
                          </a>
                        </div>



                        <div class="col-md-6 mt-2">
                            <label >Mobile Image</label>

                            <div class="file-upload-wrapper" data-text="Select your file!">
                            <input name="mobile_image" type="file" class="file-upload-field" value="">
                          </div>
                          <a href="{{ asset($info->mobile_image) }}" download="ashokmehtacv">
                            <img src="{{ asset($info->mobile_image) }}" alt="" width="100">
                          </a>
                        </div>

                        <div class="col-md-6 mt-2">
                            <label >Cv</label>

                            <div class="file-upload-wrapper" data-text="Select your file!">
                            <input name="cv" type="file" class="file-upload-field" value="">
                          </div>
                          <a href="{{ asset($info->cv) }}" download="ashokmehtacv">
                            <img src="{{ asset($info->cv) }}" alt="" width="100">
                          </a>
                        </div>

                        <div class="col-md-12 mt-2">
                            <label >About</label>

                         <textarea name="about" id="" cols="30" class="form-control" rows="2">
                             {{ $info->about }}
                         </textarea>
                        </div>
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