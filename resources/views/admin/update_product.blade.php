<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
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
                <div class='alert alert-success'>
                    {{session()->get('message')}}
                    <button style="float:right" type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        
                  
                </div>
              @endif

                <div class="div_center">
                        <h2 class="h2_font">Update Product</h2>

                        <form action="{{url('update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="div_design">
                                <label>Product Title :</label>
                                <input class="input_color" type="text" name="title" placeholder="Title" required="" value="{{$product->title}}">
                            </div>

                            <div class="div_design">
                                <label>Product Description :</label>
                                <input class="input_color" type="text" name="description" placeholder="Description" required="" value="{{$product->description}}">
                            </div>
                            
                            <div class="div_design">
                                <label>Product Price :</label>
                                <input class="input_color" type="number" name="price" placeholder="Price" required="" value="{{$product->price}}">
                            </div>

                            <div class="div_design">
                                <label>Product Quantity :</label>
                                <input class="input_color" type="number" name="quantity" placeholder="Quantity" required="" value="{{$product->quantity}}">
                            </div>

                            <div class="div_design">
                                <label>Product Catagory :</label>
                                <select class="input_color" name="catagory" required="">
                                    <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>
                                    @foreach($catagory as $catagory)

                                    <option value="">{{$catagory->catagory_name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            
                            <div class="div_design">
                                <label>Discount Price :</label>
                                <input class="input_color" type="number" name="dis_price" placeholder="Discount" required="" value="{{$product->discount_price}}">
                            </div>

                            <div class="div_design">
                                <label> Current Product Image :</label>
                                <img style=" margin: auto" height="100" width="100" src="/product/{{$product->image}}" alt="">
                            </div>

                            <div class="div_design">
                                <label> Change Product Image :</label>
                                <input class="input_color" type="file" name="image" required="" value="{{$product->image}}">
                            </div>

                            <div class="div_design">
                                
                                <input type="submit" class="btn btn-primary" value="Update Product">
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