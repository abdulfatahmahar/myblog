@extends('layout.main')
@section('index-page')
        <!-- start blog Section -->
        <section>
            <div class="container">
                <div class="row">

                    <!--  start blog left-->
                    <div class="col-lg-8 col-md-12 sm-margin-50px-bottom">

                        <div class="row portfolio">

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-1.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                        <span class="category"><a href="{{route('standard_post')}}">Family</a></span>

                                        <h5><a href="{{route('standard_post')}}">Cute family in beach</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="{{route('standard_post')}}" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">26 Mar 2024</span>
                                            <span class="author">By <a href="{{route('standard_post')}}">Luis Shaw</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-3.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="{{route('standard_post')}}">Adventure</a></span>

                                        <h5><a href="standard-post.html">Best forest in monsoon</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">21 Mar 2024</span>
                                            <span class="author">By <a href="#!">Kathlene Tank</a></span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-4.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="{{route('standard_post')}}">Solo</a></span>

                                        <h5><a href="{{route('standard_post')}}">Start with travelling</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="{{route('standard_post')}}" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">18 Mar 2024</span>
                                            <span class="author">By <a href="{{route('standard_post')}}">Sophia Chaisson</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-8.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="{{ route('standard_post') }}">Luxury</a></span>

                                        <h5><a href="{{ route('standard_post') }}">Boat view on lake</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="{{ route('standard_post') }}" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">08 Jul 2024</span>
                                            <span class="author">By <a href="#!">Joe Lomax</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-7.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="{{route('standard_post')}}">Adventure</a></span>

                                        <h5><a href="{{route('standard_post')}}">Best mountain view</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="{{route('standard_post')}}" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">18 Aug 2024</span>
                                            <span class="author">By <a href="{{route('standard_post')}}">Sidney Gasser</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/travel-9.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="{{route('standard_post')}}">Family</a></span>

                                        <h5><a href="{{route('standard_post')}}">Snowman winter</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="{{route('standard_post')}}" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">12 spt 2024</span>
                                            <span class="author">By <a href="{{route('standard_post')}}">Edward Simon</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        

                    </div>
                    <!--  end blog left-->

                    <!--  start blog right-->
                    <div class="col-lg-4 col-md-12">
                        <div class="side-bar padding-30px-left md-no-padding-left">
                            <div class="widget search padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Search</h3>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Type here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="button-addon2"><span class="ti-search"></span></button>
                                    </div>
                                </div>
                            </div>


                            <div class="widget padding-30px-all md-padding-20px-all shadow-theme">
                                <div class="widget-title margin-35px-bottom">
                                    <h3>Recent Posts</h3>
                                </div>
                                                                <div class="media margin-20px-bottom">
                                    <img src="{{ url('style/img/blog/blog-7.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">Craft a life you love</a></h5>
                                        <span class="font-size14">12 Mar, 2020</span>
                                    </div>
                                </div>
                                <div class="media margin-20px-bottom">
                                    <img src="{{ url('style/img/blog/blog-8.jpg')}}" class="mr-4" alt="" />
                                    <div class="media-body">
                                        <h5 class="no-margin-top margin-5px-bottom font-size15 font-weight-500"><a href="#" class="text-extra-dark-gray">Wonderland of ice place</a></h5>
                                        <span class="font-size14">17 Feb, 2024</span>
                                    </div>
                                </div>
                                
                            </div>

                            
                            

                           

                            <div class="widget">
                                <div class="bg-img text-center padding-30px-all cover-background" data-overlay-dark="5" data-background="{{ url('style/img/content/testimonial.jpg')}}">
                                    <div class="owl-carousel owl-theme" id="testmonials-carousel">
                                        <div>
                                            <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                            <p class="text-white">Stotam rem aperiam, eaquelim ipsa quae ab illo inventore veritatis et architecto.</p>
                                            <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- John Mariya</h6>
                                        </div>
                                        <div>
                                            <i class="fas fa-quote-left font-size24 text-white margin-30px-bottom"></i>
                                            <p class="text-white">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit onsequuntur.</p>
                                            <h6 class="no-margin-bottom text-white font-size18 font-weight-400">- Maria Parker</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  end blog right-->

                </div>
            </div>
        </section>
        <!-- end blog section -->

        <!-- start portfolio section -->
        <section class="no-padding">
            <div class="container-fluid no-padding">
                <div class="owl-carousel owl-theme" id="portfolio-carousel">
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/1.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/2.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/3.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/4.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/5.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/6.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/7.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                    <div class="insta-photo">
                        <a href="#">
                            <img src="{{ url('style/img/portfolio/8.jpg')}}" alt="" />
                        </a>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
@endsection