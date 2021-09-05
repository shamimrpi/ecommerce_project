@extends('backend.master')
@section('main_content')
<div class="content-wrapper">
      <div class="container"> 
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card m-auto">
            <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Post Create Form</h4>
                       <form class="forms-sample" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Post Title</label>
                        <input type="text" class="form-control" name="title" id="phone"  placeholder="Product Name">
                         @if($errors->has('title'))
                        <span class="text-danger">{{$errors->first('title')}}</span>
                        @endif
                      </div>
                    

                      <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <textarea class="form-control" rows="20" cols="20" placeholder="Write Description" name="description"></textarea>
                         @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="logo">Image</label>
                        <input type="file" name="image" class="form-control" id="imgload">
                         @if($errors->has('image'))
                          <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="logo">Show Logo</label>
                        
                        <img id="showImage" class="form-control"  style="height: 150px;width: 170px;border: 1px solid #eee">
                      </div>
                    
                      <button type="submit" class="btn btn-gradient-primary mr-2">Create</button>
                      
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