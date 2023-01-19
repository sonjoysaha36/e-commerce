<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css');
    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h1_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color{
            color: black;
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

                <h1 class="h1_font">Add Product</h1>
                <form action="{{url('/update_product',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="div_design">
                        <label for="">Product Title</label>
                        <input class="input_color" type="text" name="title" placeholder="Write a title" required value="{{$product->title}}">
                        </div>

                        <div class="div_design">
                        <label for="">Product Description</label>
                        <input class="input_color" type="text" name="description" placeholder="Write a description" required value="{{$product->description}}">
                        </div>

                        <div class="div_design">
                        <label for="">Product Price</label>
                        <input class="input_color" type="number" name="price" placeholder="Write a price" required value="{{$product->price}}">
                        </div>

                        <div class="div_design">
                        <label for="">Discount Price</label>
                        <input class="input_color" type="number" min="0" name="discount_price" placeholder="Write a Discount is apply" value="{{$product->discount_price}}">
                        </div>

                        <div class="div_design">
                        <label for="">Product Quantity</label>
                        <input class="input_color" type="number" min="0" name="quantity" placeholder="Write a Quantity" required value="{{$product->quantity}}">
                        </div>

                        <div class="div_design">
                        <label for="">Product Category</label>
                        <select class="input_color" name="category" required>
                            <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                            @foreach ($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>    
                            @endforeach
                            
                        </select>
                        </div>

                        <div class="div_design">
                            <label for="">Current Product Image </label>
                            <img style="margin:auto" height="100" width="100" src="/product/{{$product->image}}" alt="">
                        </div>

                        <div class="div_design">
                        <label for="">Change Product Image Here</label>
                        <input type="file" name="image" value="{{$product->image}}">
                        </div>
                        <div class="div_design">
                        <input class="btn btn-success" type="submit" value="Update Product">
                        </div>

                    </form>
              </div>  
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    <!-- End custom js for this page -->
  </body>
</html>
