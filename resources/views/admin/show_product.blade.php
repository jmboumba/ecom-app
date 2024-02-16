<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .center{
            margin: auto;
            width:60%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size{
            width: 150px;
            height: 100px;
        }
        .th_color{
            background: skyblue;
        }
        .th_deg{
            padding: 20px;
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
                
                <h2 class="font_size">All Products</h2>
                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">title</th>
                        <th class="th_deg">Description</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Catagory</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Discount price</th>
                        <th class="th_deg">Product image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Edit</th>
                    </tr>

                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->catagory}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}">
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this product ?')" class="btn btn-danger" href="{{url('/delete_product', $product->id)}}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('/update_product', $product->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
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