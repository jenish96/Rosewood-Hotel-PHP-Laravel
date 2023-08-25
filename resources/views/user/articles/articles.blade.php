@extends('user.master.masterPage')

@section('title')
    Rosewood - Articles
@endsection

@section('css')
@endsection

@section('main')
    <!-- start preloader -->
    <div class="preloader">
        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <img src="assets/images/preloader.png" alt="">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- start of breadcumb-section -->

    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Articles</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>Article</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- start wpo-blog-pg-section -->
    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8">
                    <div class="wpo-blog-content">


                        @foreach ($articlesData as $row)
                            <div class="post format-gallery">
                                <div class="entry-media">
                                    <div class="post-slider owl-carousel">
                                        <img src="{{ URL::to('/') }}/uploads/articles/{{ $row->image1 }}" width="738"
                                            height="437" alt>
                                        <img src="{{ URL::to('/') }}/uploads/articles/{{ $row->image2 }}" width="738"
                                            height="437" alt>
                                    </div>

                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">{{ $row->auther }}</a> </li>
                                        {{-- <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li> --}}
                                        <li><i class="fi flaticon-calendar"></i><?php echo date('d-M-Y', strtotime($row->article_date)); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="/user/articlesDetaile/{{ $row->articles_id }}">{{ $row->title }}</a>
                                    </h3>
                                    <p>{{ Str::limit($row->description, 200) }}</p>
                                    {{-- <a href="{{$row->ref_link}}" class="read-more">Read More...</a> --}}
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="post format-video">
                                <div class="entry-media video-holder">
                                    <img src="assets/images/blog/img-6.jpg" alt>
                                    <a href="https://www.youtube.com/embed/bU5DwiZ6RX0" class="video-btn" data-type="iframe">
                                        
                                    </a>

                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                        <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li>
                                        <li><i class="fi flaticon-calendar"></i> 24 Jun 2021</li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a href="blog-single.html">Be Careful About This, When You Are In Snow</a></h3>
                                    <p>Law is a great career path if you want to build a broad skill set that includes everything from critical thinking and strategic planning to communications. If you love rising to a challenge.</p>
                                    <a href="blog-single.html" class="read-more">Read More...</a>
                                </div>
                            </div> --}}
                        {{-- <div class="pagination-wrapper pagination-wrapper-left">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="assets/images/blog/about-widget.jpg" alt>
                            </div>
                            <h4>Articles</h4>
                            <p>Hi! beautiful people. Here We some have Articles. Read our post - stay with us</p>
                            {{-- <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                        {{-- <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div> --}}

                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                @foreach ($articlesData as $row)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ URL::to('/') }}/uploads/articles/{{ $row->image1 }}" width="90"
                                                height="80" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="/user/articlesDetaile/{id}">{{ $row->title }}</a></h4>
                                            <span class="date"><?php echo date('d-M-Y', strtotime($row->article_date)); ?></span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="widget wpo-instagram-widget">
                                <div class="widget-title">
                                    <h3>Discover Our Rooms</h3>
                                </div>
                                <ul class="d-flex">
                                    <li><a href="room-single.html"><img src="assets/images/instragram/1.jpg" alt=""></a></li>
                                    <li><a href="room-single.html"><img src="assets/images/instragram/2.jpg" alt=""></a></li>
                                    <li><a href="room-single.html"><img src="assets/images/instragram/3.jpg" alt=""></a></li>
                                    <li><a href="room-single.html"><img src="assets/images/instragram/4.jpg" alt=""></a></li>
                                    <li><a href="room-single.html"><img src="assets/images/instragram/5.jpg" alt=""></a></li>
                                    <li><a href="room-single.html"><img src="assets/images/instragram/6.jpg" alt=""></a></li>
                                </ul>
                            </div> --}}
                        {{-- <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <ul>
                                    <li><a href="#">Travelling</a></li>
                                    <li><a href="#">Hotel</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="destination.html">Destination</a></li>
                                    <li><a href="#">World Tour</a></li>
                                    <li><a href="#">Hotel Room</a></li>
                                    <li><a href="#">Spa</a></li>
                                    <li><a href="#">Guide</a></li>
                                </ul>
                            </div> --}}
                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                                maecenas accumsan lacus vel facilisis. </p>
                            <a href="/user/ContactUS">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->

        {{-- articles form --}}
        <div class="container">
            <div class="row">
                {{-- <div class="col col-lg-8"> --}}
                <div class="col col-lg-12 col-12 review-form-wrapper">
                    @if (Session::get('user_id'))
                        <div class="review-form">
                            <h2>Add a Article</h2>
                            <p>All fields are Required *</p>
                            <form action="/user/addArticle" id="form1" method="post" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <input type="text" class="form-control" name="txttitle" id="txttitle"
                                        placeholder="Article Title *">
                                </div><br>
                                <div>
                                    <textarea class="form-control" placeholder="Article Description *" name="txtdescription"
                                        id="txtdescription"></textarea>
                                </div>
                                <br>
                                <div>
                                    <input type="file" class="form-control" name="txtimg1" id="txtimg1"
                                        placeholder="Select Image *">
                                </div>
                                <br>
                                <div>
                                    <input type="file" class="form-control" name="txtimg2" id="txtimg2"
                                        placeholder="Select Image *">
                                </div>
                                <br>
                                <div>
                                    <input type="text" class="form-control" name="txtvideoURL" id="txtvideoURL"
                                        placeholder="Article video URL *">
                                </div>
                                <br>
                                <div>
                                    <input type="text" class="form-control" name="txtauther" id="txtauther"
                                        placeholder="Auther Name *">
                                </div>
                                <br>
                                <div>
                                    <input type="text" class="form-control" name="txtRefLink" id="txtRefLink"
                                        placeholder="Article Reference link *">
                                </div>
                                <br>

                                <div class="rating-wrapper">
                                    <div class="submit">
                                        <button type="submit" class="theme-btn-s2">Post
                                            Article</button>
                                    </div>
                                </div>
                            </form>
                          
                        </div>
                    
                    @else
                    {{-- <script type="text/javascript">
                        window.location = "{{ url('/user/error') }}";
                    </script> --}}
                    @endif
                </div>
            </div>
        </div>
        </div>
        {{-- end form --}}
    </section>
    <!-- end wpo-blog-pg-section -->
@endsection

@section('js')
    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
            $("#form1").validate({
                rules: {
                    txttitle: {
                        required: true
                    },
                    txtdescription: {
                        required: true
                    },
                    txtvideoURL: {
                        required: true,
                        url: true
                    },
                    txtauther: {
                        required: true
                    },
                    txtRefLink: {
                        required: true,
                        url: true
                    },
                    txtimg1: {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png,image/gif"
                    },
                    txtimg2: {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png,image/gif"
                    }
                },
                messages: {
                    txttitle: {
                        required: "Enter Article Title"
                    },
                    txtdescription: {
                        required: "Enter Description"
                    },
                    txtvideoURL: {
                        required: "Please Enter URL",
                        url: "Enter url"
                    },
                    txtauther: {
                        required: "Please Enter Auther Name"
                    },
                    txtRefLink: {
                        required: "Please Enter Refrence link",
                        url: "please enter refrence link"
                    },
                    txtimg1: {
                        required: "Please Select Image",
                        accept: "Please select Image"

                    },
                    txtimg2: {
                        required: "Please Select Image",
                        accept: "Please select Image"
                    }
                }
            });
        });
    </script>
@endsection
