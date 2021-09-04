@extends('backend.master')
@section('main_content')
<div class="content-wrapper">
      <div class="container"> 
        <div class="row">
          <div class="col-md-10 grid-margin stretch-card m-auto">
            <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Create Form</h4>
                       <form class="forms-sample" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="text" class="form-control" name="name" id="phone"  placeholder="Product Name">
                         @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control" name="category">
                          <option>Select Category</option>
                          <option value="a_cat">A Category</option>
                          <option value="b_cat">B Category</option>
                          <option value="c_cat">C Category</option>
                          <option value="d_cat">D Category</option>
                          <option value="e_cat">E Category</option>
                          <option value="f_cat">F Category</option>
                        </select>
                        @if($errors->has('category'))
                          <span class="text-danger">{{$errors->first('category')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Size</label>
                        <select class="form-control" name="size">
                          <option>Select Category</option>
                          <option value="small">Small</option>
                          <option value="mediam">Mediam</option>
                          <option value="large">Large</option>
                          <option value="xl">XL</option>
                          <option value="2xl">2XL</option>
                          <option value="3xl">3XL</option>
                        </select>
                        @if($errors->has('size'))
                          <span class="text-danger">{{$errors->first('size')}}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Purchase Rate</label>
                        <input type="text" class="form-control" name="p_rate" id="phone"  placeholder="Product Name">
                         @if($errors->has('p_rate'))
                        <span class="text-danger">{{$errors->first('p_rate')}}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Buying Rate</label>
                        <input type="text" class="form-control" name="b_rate" id="phone"  placeholder="Product Name">
                         @if($errors->has('b_rate'))
                        <span class="text-danger">{{$errors->first('b_rate')}}</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="exampleInputUsername1">Stock</label>
                        <input type="text" class="form-control" name="stock" id="phone"  placeholder="Product Name">
                         @if($errors->has('stock'))
                        <span class="text-danger">{{$errors->first('stock')}}</span>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Description</label>
                        <input type="text" class="form-control" name="description" id="phone"  placeholder="Product Name">
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