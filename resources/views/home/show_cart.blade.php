<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
          .total_deg{
              font-size: 20px;
              padding: 40px;
              text-align: center;
          }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->
         <!-- slider section -->
        
         <!-- end slider section -->
      <!-- why section -->
      <div>
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Sl No</th>
                <th scope="col">Product Title</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $totalprice=0; ?>

                @foreach ($cart as $key=>$cart)
                    
                
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>$ {{$cart->price}}</td>
                <td><img style="height: 80px;" src="product/{{$cart->image}}" alt=""></td>
                <td><a href="{{url('/remove_cart',$cart->id)}}" onclick="return confirm('Are you sure to remove this product?')" class="btn btn-primary">Remove</a>
                <a href="" class="btn btn-primary">Buy</a></td>
              </tr>
              <?php $totalprice=$totalprice + $cart->price ?>
              @endforeach
              
            </tbody>
            
          </table>
          <h1 class="total_deg">Total Price : $ {{$totalprice}}</h1>
      </div>
      <!-- footer start -->
      
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>