<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-cafe.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl-carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">

    </head>

    <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/index" class="logo">
                            <img src="{{ asset('images/tab-icon-01.png') }}" width="100%" alt="logo">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class=""><a href="/index" class="active">Home</a></li>
                            <li class=""><a href="/index#about">About</a></li>
                            <li class=""><a href="/index#menu">Menu</a></li>
                            <li class=""><a href="/index#reservation">Reservations</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-content py-5">
                        <div class="py-5">
                            <div class="pl-5 pb-2">
                                <h4 class="pb-2">{{$reserved->name}}</h4>
                                <form action="{{ route('delete.reservation', $reserved->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input class="btn btn-outline-light" type="submit" value="Delete Reservation" />
                                 </form>
                            </div>
                        </div>
                        <div class="inner-content contact-form">
                            <form id="contact" action="/update_reservation" method="POST">
                                @method('PUT')
                                @csrf
                              <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="m-3 text-center">Edit Reservation</h3>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input type="hidden" name="id" value="{{$reserved->id}}">
                                    <input name="name" type="text" id="name" placeholder="Your Name*" value="{{$reserved->name}}">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                  <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" value="{{$reserved->email}}">
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input name="phone_number" type="text" id="phone" placeholder="Phone Number*" value="{{$reserved->phone_number}}">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select value="no_of_guests" name="no_of_guests" id="no_of_guests">
                                        <option value="{{$reserved->no_of_guests}}" disabled selected>Number Of Guests</option>
                                        <option value="1" {{$reserved->no_of_guests == '1' ? 'selected' : ''}}>1</option>
                                        <option value="2" {{$reserved->no_of_guests == '2' ? 'selected' : ''}}>2</option>
                                        <option value="3" {{$reserved->no_of_guests == '3' ? 'selected' : ''}}>3</option>
                                        <option value="4" {{$reserved->no_of_guests == '4' ? 'selected' : ''}}>4</option>
                                        <option value="5" {{$reserved->no_of_guests == '5' ? 'selected' : ''}}>5</option>
                                        <option value="6" {{$reserved->no_of_guests == '6' ? 'selected' : ''}}>6</option>
                                        <option value="7" {{$reserved->no_of_guests == '7' ? 'selected' : ''}}>7</option>
                                        <option value="8" {{$reserved->no_of_guests == '8' ? 'selected' : ''}}>8</option>
                                        <option value="9" {{$reserved->no_of_guests == '9' ? 'selected' : ''}}>9</option>
                                        <option value="10" {{$reserved->no_of_guests == '10' ? 'selected' : ''}}>10</option>
                                        <option value="11" {{$reserved->no_of_guests == '11' ? 'selected' : ''}}>11</option>
                                        <option value="12" {{$reserved->no_of_guests == '12' ? 'selected' : ''}}>12</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <div id="filterDate2 date">
                                        <input  name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{$reserved->date}}">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <select value="time" name="type_of_menu" id="time">
                                        <option value="type_of_menu" disabled selected>Time (Menu)</option>
                                        <option value="Breakfast" {{$reserved->type_of_menu == 'Breakfast' ? 'selected' : ''}}>Breakfast</option>
                                        <option value="Lunch" {{$reserved->type_of_menu == 'Lunch' ? 'selected' : ''}}>Lunch</option>
                                        <option value="Dinner" {{$reserved->type_of_menu == 'Dinner' ? 'selected' : ''}}>Dinner</option>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="description" rows="6" id="message" placeholder="Message">{{$reserved->description}}</textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" id="form-submit" class="main-button-icon">Edit Reservation</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('images/slide-01.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('images/slide-02.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="{{ asset('images/slide-03.jpg') }}" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="/index"><img src="{{ asset('images/tab-icon-01.png') }}" width="30%" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright A Cafe Co.

                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area Ends ***** -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <!-- Plugins -->
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/lightbox.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>
  </body>
</html>
