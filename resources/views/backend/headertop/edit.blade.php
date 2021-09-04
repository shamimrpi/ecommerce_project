@extends('backend.master')
@section('main_content')
<div class="content-wrapper">
      <div class="container"> 
        <div class="row">
          <div class="col-md-8 grid-margin stretch-card m-auto">
            <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Header Top Form</h4>
                    <p class="card-description"> Edit Header Top Section </p>
                    <form class="forms-sample" action="{{ route('headertop.update') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $headertop->phone }}" placeholder="Phone Number">
                         @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('phone')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $headertop->email }}" placeholder="Email Address">
                        @if($errors->has('email'))
                          <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" class="form-control" id="imgload">
                         @if($errors->has('logo'))
                          <span class="text-danger">{{$errors->first('logo')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="logo">Show Logo</label>
                        
                        <img id="showImage" class="form-control"  style="height: 150px;width: 170px;border: 1px solid #eee">
                      </div>
                    
                      <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                      
                    </form>
                  </div>
                </div>
              </div>
        </div>
      </div>    
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function(){
     // image show javascript
     $("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
  });
</script>
@endsection