@extends('backend.master')
@section('main_content')
<div class="content-wrapper">
      <div class="container"> 
        <div class="row">
         
             <div class="col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Product Table</h4>
                     
                      </p>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> #SL </th>
                            <th> Product Name </th>
                            <th> Item Code </th>
                            <th> Category </th>
                            <th> Size </th>
                            <th> Stock </th>
                            <th> Purchase Rate </th>
                            <th> Buying Rate </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($products as $key=> $product)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->item_code }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->size }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->p_rate }}</td>
                            <td>{{ $product->b_rate }}</td>
                            <td>
                              <a href="#" class="btn btn-info">Edit</a>
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