<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
                <br>
                <table class="table table-dark">
                    <thead>
                        <tr>
                          <th scope="col">SL No:</th>
                          <th scope="col">Category Name</th>
                          <th scope="col">Action</th>
                          
                        </tr>
                      </thead>
                      @foreach ($data as $key=>$data)
                      <tbody>
                        <tr>
                          <th scope="row">{{ ++$key}}</th>
                          <td>{{$data->category_name}}</td>
                          <td>
                              <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                              <a class="btn btn-danger" href="">Edit</a>
                          </td>
                          
                        </tr>
                    </tbody>
                    @endforeach

                </table>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
