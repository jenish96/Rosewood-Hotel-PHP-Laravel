@extends('user.master.masterPage')

@section('title')
    Rosewood - News
@endsection

@section('css')
@endsection

@section('main')
    <!-- start of breadcumb-section -->

    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>News</h2>
                        <ul>
                            <li><a href="/user/home">Home</a></li>
                            <li><span>News</span></li>
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
                @foreach ($newsData as $row)
                    <div class="col col-lg-10 offset-lg-1">
                        <div class="wpo-blog-content">
                            <div class="post format-standard-image">
                                <div class="entry-media">
                                    <img src="{{ URL::to('/') }}/uploads/news/{{ $row->news_img }}" width="900px"
                                        height="500px" alt>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        {{-- <li><i class="fi flaticon-user"></i> By <a href="#">Jenny Watson</a> </li>
                                                            <li><i class="fi flaticon-comment-white-oval-bubble"></i> Comments 35 </li> --}}
                                        <li><i class="fi flaticon-calendar"></i><?php echo date('d-M-Y', strtotime($row->news_date)); ?></li>
                                    </ul>
                                </div>
                                <div class="entry-details">
                                    <h3><a>{{ $row->title }}</a></h3>
                                    <p>{{ $row->description }}</p>
                                    {{-- <a href="blog-single.html" class="read-more">Read More...</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!-- end container -->
    </section>


    <!-- end wpo-blog-pg-section -->


   
@endsection

@section('js')
@endsection
