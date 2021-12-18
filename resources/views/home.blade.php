
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ URL::asset('favicon.png') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@300&family=Source+Sans+Pro:wght@300;400&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
        <title>{{ config('app.name') }}</title>
        <style>

        </style>
    </head>

    <body>
        <div class="topnav">
            <div class="left-lnk">
                <a href="{{ url('/home') }}">
                    <img class="brandlogo" src="{{ URL::asset('img/brand.png') }}"></i>
                </a>
            </div>
            <a href="{{ url('/home') }}">
                <p class="brand">GoonieOnlineMarket</p></i>
            </a>
            <div class="right-lnk">
                <a>
                    <p class="nav-icon"><i class="fas fa-shopping-cart"></p></i>
                </a>

                <a>
                    <p class="login-text">&nbsp; &nbsp; </p></i>
                </a>
                <a href="{{ route('login') }}">
                    <p class="login-text">{{ Auth::user()->name }}</p></i>
                </a>

                <a>
                    <p class="login-text">&nbsp; &nbsp; </p></i>
                </a>

                <a style="padding-top:25px;padding-right:20px " class="login-text" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>

            </div>

        </div>
        <div style="margin-top:120px;" class="thirdblock">
            <div class="shopping-card detail-block col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shopping-card col-3">
                <div class="img-container">
                    <img src="{{ URL::asset('img/brand.png') }}"
                        alt="">
                </div>
                <div class="body-container">
                    <div class="row">
                        <h2>SHOPPING CART</h2>
                    </div>
                    <div class="row">
                        <p class="price"><sup>5000</sup><sup>KS</sup></p>
                    </div>
                    <div class="row">
                        <button type="button" onclick="window.location = '{{ url('/detail') }}';">BUY NOW</button>
                        <button>ADD TO CART</button>
                    </div>
                </div>
            </div>





        </div>
        <center><button onclick="window.location = '{{ url('/home') }}';" class="show-btn">SHOW MORE</button></center>


        <div class="footer">
            <div class="inner-footer">


                <div class="footer-items">
                    <h1>Goonie</h1>
                    <p>Online-Shopping-Marketin-Myanmar.</p>
                </div>


                <div class="footer-items">
                    <h3>About Us</h3>
                    <div class="border1"></div>

                    <ul>
                        <a href="#">
                            <li>Home</li>
                        </a>
                        <a href="#">
                            <li>Search</li>
                        </a>
                        <a href="#">
                            <li>Contact</li>
                        </a>
                        <a href="#">
                            <li>About</li>
                        </a>
                    </ul>
                </div>


                <div class="footer-items">
                    <h3>Services</h3>
                    <div class="border1"></div>
  
                    <ul>
                        <a href="#">
                            <li>example</li>
                        </a>
                        <a href="#">
                            <li>example</li>
                        </a>
                        <a href="#">
                            <li>example</li>
                        </a>
                        <a href="#">
                            <li>example</li>
                        </a>
                    </ul>
                </div>

   
                <div class="footer-items">
                    <h3>Contact us</h3>
                    <div class="border1"></div>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Yangon, Myanmar</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>goonie@gmail.com</li>
                    </ul>

                    <div class="social-media">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-google-plus-square"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                Copyright &copy; 2022.
            </div>
        </div>


        <script src="{{ URL::asset('js/main.js') }}"></script>
    </body>

    </html>


