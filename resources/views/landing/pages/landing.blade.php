<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ====== Favicon ====== -->
    <link
      rel="shortcut icon"
      <img src="{{ asset('admin/assets/img/favicon-32x32.png') }}" alt=""> 
    <!-- ====== Boxicons ====== -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- ====== Swiper CSS ====== -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- ====== Custom CSS ====== -->
  
    <link href="{{ asset('admin/assets/css/styles.css') }}" rel="stylesheet">
    <title>Fashion Shop</title>
  </head>
  <body>
    <!-- ====== Header ====== -->
    <header class="header">
      <!-- ====== Navigation ====== -->
      <nav class="navbar">
        <div class="row container d-flex">
          <div class="logo">
            
          <img src="{{ asset('admin/assets/img/logo.svg') }}" alt="">

            
          </div>

          <div class="nav-list d-flex">
          <a href="{{URL::to('/')}}">login</a>
            
            <a href="{{URL::to('s')}}">Register</a>
            <a href="">Payment</a>
            
            <a href="">Cart</a>

            <div class="close">
              <i class="bx bx-x"></i>
            </div>
            <a class="user-link">Login</a>
          </div>

          <div class="icons d-flex">
            <div class="icon d-flex"><i class="bx bx-search"></i></div>
            <div class="icon user-icon d-flex">
              <i class="bx bx-user"></i>
            </div>
            <div class="icon d-flex">
              <i class="bx bx-bell"></i>
              <span></span>
            </div>
          </div>

          <!-- Hamburger -->
          <div class="hamburger">
            <i class="bx bx-menu-alt-right"></i>
          </div>
        </div>
      </nav>

      <!-- ====== Hero Area ====== -->
      <div class="hero">
        <div class="row container2 d-flex">
          <div class="col">
            <span class="subtitle">Limited Time Only For Winter</span>
            <h1>fash<span class="i">i</span>on</h1>
            <p>LOOK YOUR BEST ON YOUR BEST DAY</p>

            <button class="btn">Explore Now!</button>
          </div>
          <img src="{{ asset('admin/assets/img/woman-in-cart.png') }}" alt="">
          <img src="./images/woman-in-cart.png" alt="" />
        </div>
      </div>
    </header>
    <!-- ====== Collection ====== -->
    <section class="section collection">
      <div class="title">
        <span>COLLECTION</span>
        <h2>Our Top Collection</h2>
      </div>
      <div class="filters d-flex">
        <div data-filter="Jewellery">Jewellery</div>
        <div data-filter="Accessories">Accessories</div>
        <div data-filter="Dresses">Dresses</div>
        <div data-filter="Footwear">Footwear</div>
      </div>
            
    </section>

    <!-- ====== New Arrival ====== -->
    

    <!-- ====== Statistics ====== -->
    
    <!-- ====== Blogs ====== -->
                    <section class="section blog">
                      
                       <div class="title">
                        <span>BLOGS</span>
                        <h2>Latest News</h2> 
                        </div>                       
                       
                      <div class="row container2">
                      @foreach($products as $product)
                                                                 
                        <div class="col">                          
                            <div class="top">
                                                                                   
                            <a href ="{{URL::to('zoom/'.$product->id)}}"> <img src="img/{{$product->image}}" alt=""> </a>
                            </div>
                            <div class="bottom"> 
                            <a href ="{{URL::to('/zoom'.$product->id)}}"><h3>   {{$product->name}} </h3></a>
                              <h5 class="card-title">{{$product->price}}$</h5>
                              <p class="card-text">{{$product->description}}</p>
                              <button type= a class="btn btn-success" href ="{{URL::to('product-edit/'.$product->id)}}">Add to cart</a>  
                              
                            </div>
                            
                        </div>
                        @endforeach 
                       </div> 
                                            
                    </section>















    <section class="section statistics">
      <div class="title">
        <span>STATS</span>
        <h2>Our Statistics</h2>
      </div>

      <div class="row container2">
        <div class="col">
          <div class="icon">
            <i class="bx bxs-check-square"></i>
          </div>
          <h3>Easy Order System</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>On Time Delievery</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-dollar-circle"></i>
          </div>
          <h3>Money Back Gaurantee</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
        <div class="col">
          <div class="icon">
            <i class="bx bxs-user"></i>
          </div>
          <h3>24/7 Customer Support</h3>
          <p>Lorem Ispum is a placeholder text commomly used as a free text.</p>
        </div>
      </div>
    </section>

    <!-- ====== Footer ====== -->
    <footer class="footer">
      <div class="row container2">
        <div class="col">
          <div class="logo d-flex">
          <img src="{{ asset('admin/assets/img/logo.svg') }}" alt="">
            <img src="./images/logo.svg" alt="logo" />
          </div>
          <p>
            Lorem ispum is a placeholder text <br />
            commonly used as a free text.
          </p>
          <div class="icons d-flex">
            <div class="icon d-flex">
              <i class="bx bxl-facebook"></i>
            </div>
            <div class="icon d-flex"><i class="bx bxl-twitter"></i></div>
            <div class="icon d-flex"><i class="bx bxl-instagram"></i></div>
            <div class="icon d-flex"><i class="bx bxl-youtube"></i></div>
          </div>
          <p class="color">
            Copyrights 2021 <br />
            @Iamabdulqadeer01
          </p>
        </div>
        <div class="col">
          <div>
            <h4>Product</h4>
            <a href="">Download</a>
            <a href="">Pricing</a>
            <a href="">Locations</a>
            <a href="">Server</a>
            <a href="">Countries</a>
            <a href="">Blog</a>
          </div>
          <div>
            <h4>Category</h4>
            <a href="">Men</a>
            <a href="">Women</a>
            <a href="">Kids</a>
            <a href="">Best Seller</a>
            <a href="">New Arrivals</a>
          </div>
          <div>
            <h4>My Account</h4>
            <a href="">My Account</a>
            <a href="">Discount</a>
            <a href="">Returns</a>
            <a href="">Order History</a>
            <a href="">Order Tracking</a>
          </div>
          <div>
            <h4>Contact Us</h4>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-map"></i></div>
              <span>123 Street Trafford, London, UK</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-envelope"></i></div>
              <span>info@sitename.com</span>
            </div>
            <div class="d-flex">
              <div class="icon"><i class="bx bxs-phone"></i></div>
              <span>+456 789 789 001</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- ====== Login and Signup Form ====== -->
    <div class="user-form">
      <div class="close-form d-flex"><i class="bx bx-x"></i></div>
      <div class="form-wrapper container2">
        <div class="user login">
          <div class="img-box">
          <img src="{{ asset('admin/assets/img/login.svg') }}" alt="">
            <img src="./images/login.svg" alt="" />
          </div>
          <div class="form-box">
            <div class="top">
              <p>
                Not a member?
                <span data-id="#ff0066">Register now</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Hello Again!</h2>
                <p>Welcome back you've been missed.</p>
                <input type="text" placeholder="Enter Username" />
                <div>
                  <input type="password" placeholder="Password" />
                  <div class="icon form-icon">
                    <!-- <img src="./images/eye.svg" alt="" /> -->
                  </div>
                </div>
                <span>Recovery Password</span>
                <input type="Submit" value="Login" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/search.svg') }}" alt="">
                    <img src="./images/search.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/apple.svg') }}" alt="">
                    <img src="./images/apple.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/facebook.svg') }}" alt="">
                    <img src="./images/facebook.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/github.svg') }}" alt="">
                    <img src="./images/github.svg" alt="" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- Register -->
        <div class="user signup">
          <div class="form-box">
            <div class="top">
              <p>
                Already a member?
                <span data-id="#1a1aff">Login now</span>
              </p>
            </div>
            <form action="">
              <div class="form-control">
                <h2>Welcome Codevo!</h2>
                <p>It's good to have you.</p>
                <input type="email" placeholder="Enter Email" />
                <div>
                  <input type="password" placeholder="Password" />
                  <div class="icon form-icon">
                  <img src="{{ asset('admin/assets/img/eye.svg') }}" alt="">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <div>
                  <input type="password" placeholder="Confirm Password" />
                  <div class="icon form-icon">
                  <img src="{{ asset('admin/assets/img/eye.svg') }}" alt="">
                    <img src="./images/eye.svg" alt="" />
                  </div>
                </div>
                <input type="Submit" value="Register" />
              </div>
              <div class="form-control">
                <p>Or continue with</p>
                <div class="icons">
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/search.svg') }}" alt="">
                    <img src="./images/search.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/apple.svg') }}" alt="">
                    <img src="./images/apple.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/facebook.svg') }}" alt="">
                    <img src="./images/facebook.svg" alt="" />
                  </div>
                  <div class="icon">
                  <img src="{{ asset('admin/assets/img/github.svg') }}" alt="">
                    <img src="./images/github.svg" alt="" />
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="img-box">
          <img src="{{ asset('admin/assets/img/trial.svg') }}" alt="">
            <img src="./images/trial.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- ====== SwiperJs ====== -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- ====== Custom Script ====== -->
    <script src="./js/product.js"></script>
    <script src="./js/main.js"></script>
  </body>
</html>
