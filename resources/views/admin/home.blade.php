<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
            @include('admin.content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.footer')
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