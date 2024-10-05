@extends('layout.main')
@section('magazine-page')

        <!-- start banner -->
        <section class="no-padding">
            <div class="container-fluid no-padding">
                <div class="owl-carousel owl-theme" id="banner-carousel">
                    <div>
                        <div class="card rounded-0 bg-img box-hover2 cover-background border-0 padding-50px-lr h-100 text-center" data-background="{{ url('style/img/banner/bg3.jpg')}}">
                            <div class="my-auto position-relative z-index-9">
                                <h5 class="text-white font-size30 xs-font-size28 line-height-40">Best surfing spots for apprentice and advanced</h5>
                                <div class="position-relative z-index-9"><a href="standard-post.html" class="btn-blog white">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card rounded-0 bg-img box-hover2 cover-background border-0 padding-50px-lr h-100 text-center" data-background="{{ url('style/img/banner/bg4.jpg')}}">
                            <div class="my-auto position-relative z-index-9">
                                <h5 class="text-white font-size30 xs-font-size28 line-height-40">What to expect from the 2020 oscar nominations</h5>
                                <div class="position-relative z-index-9"><a href="standard-post.html" class="btn-blog white">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card rounded-0 bg-img box-hover2 cover-background border-0 padding-50px-lr h-100 text-center" data-background="{{ url('style/img/banner/bg2.jpg')}}">
                            <div class="my-auto position-relative z-index-9">
                                <h5 class="text-white font-size30 xs-font-size28 line-height-40">Life is full of random situations 
                                </h5>
                                <div class="position-relative z-index-9"><a href="standard-post.html" class="btn-blog white">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card rounded-0 bg-img box-hover2 cover-background border-0 padding-50px-lr h-100 text-center" data-background="{{ url('style/img/banner/bg1.jpg')}}">
                            <div class="my-auto position-relative z-index-9">
                                <h5 class="text-white font-size30 line-height-40">The list of things you need to buy this spring </h5>
                                <div class="position-relative z-index-9"><a href="standard-post.html" class="btn-blog white">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <!-- start blog Section -->
        <section>
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="row portfolio">

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-1.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Entertainment</a></span>

                                        <h5><a href="standard-post.html">Never stop believing</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">26 Mar 2020</span>
                                            <span class="author">By <a href="#!">Dante Guerrero</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-2.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Photography</a></span>

                                        <h5><a href="standard-post.html">Friendship philosophy</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">18 Mar 2020</span>
                                            <span class="author">By <a href="#!">Juan S. Martin</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="grid">

                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-3.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Nature</a></span>

                                        <h5><a href="standard-post.html">Nature photography</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">14 Mar 2020</span>
                                            <span class="author">By <a href="#!">Sean Figueiredo</a></span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-4.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Art</a></span>

                                        <h5><a href="standard-post.html">Who loves native</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">18 Feb 2020</span>
                                            <span class="author">By <a href="#!">Ella Gwin</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-5.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Event</a></span>

                                        <h5><a href="standard-post.html">Architecture projects</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">18 Feb 2020</span>
                                            <span class="author">By <a href="#!">Jay Benjamin</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-6.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Business</a></span>

                                        <h5><a href="standard-post.html">Flyer criativos</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">12 Feb 2020</span>
                                            <span class="author">By <a href="#!">Gloria Torres</a></span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-7.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Event</a></span>

                                        <h5><a href="standard-post.html">Perfect destination</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">11 Jan 2020</span>
                                            <span class="author">By <a href="#!">Stewart Anderson</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="grid">
                                    <div class="grid-img">
                                        <img src="{{ url('style/img/blog/magazine-8.jpg')}}" alt="...">
                                    </div>

                                    <div class="grid-details">

                                        <span class="category"><a href="#!">Entertainment</a></span>

                                        <h5><a href="standard-post.html">Sports equipment</a></h5>
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit.</p>
                                        <div class="d-flex">
                                            <a href="standard-post.html" class="btn-blog">Read More</a>
                                        </div>

                                        <div class="meta">
                                            <span class="date">08 Jan 2020</span>
                                            <span class="author">By <a href="#!">Paul Bachman</a></span>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- end blog section -->
@endsection