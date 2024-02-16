<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size:40px;
            padding-bottom:40px;
        }
        .input_color{
            color:black;
            padding-bottom: 20px;
        }
        .center{
          margin: auto;
          width : 50%;
          text-align: center; 
          margin-top:30px;
          border: 3px solid white;
        }
        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      @include('admin.body')
      <!-- partial:partials/_sidebar.html -->
        @include('admin.partials_side')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.partials_nav')
        <!-- partial -->
           
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))
            <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">{{session()->get('message')}}</p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
                
              @endif

                <div class="div_center">
                        <h2 class="h2_font">Add Product</h2>

                        <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="div_design">
                                <label>Product Title :</label>
                                <input class="input_color" type="text" name="title" placeholder="Title" required="">
                            </div>

                            <div class="div_design">
                                <label>Product Description :</label>
                                <input class="input_color" type="text" name="description" placeholder="Description" required="">
                            </div>
                            
                            <div class="div_design">
                                <label>Product Price :</label>
                                <input class="input_color" type="number" name="price" placeholder="Price" required="">
                            </div>

                            <div class="div_design">
                                <label>Product Quantity :</label>
                                <input class="input_color" type="number" name="quantity" placeholder="Quantity" required="">
                            </div>

                            <div class="div_design">
                                <label>Product Catagory :</label>
                                <select class="input_color" name="catagory" required="">
                                    <option value="">Add a catagory here</option>

                                    @foreach($catagory as $catagory)
                                    <option value="{{$catagory->catagory_name}}" name="catagory">{{$catagory->catagory_name}} </option>
                                    @endforeach

                                </select>
                            </div>
                            
                            <div class="div_design">
                                <label>Discount Price :</label>
                                <input class="input_color" type="number" name="dis_price" placeholder="Discount" required="">
                            </div>

                            <div class="div_design">
                                <label>Product Image here :</label>
                                <input class="input_color" type="file" name="image" required="">
                            </div>

                            <div class="div_design">
                                
                                <input type="submit" class="btn btn-primary" value="Add Product">
                            </div>

                        </form>
                        
                </div>

            </div>
          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>