@extends('user.master.masterPage')

@section('title')
    Rosewood - Articles
@endsection

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: rgb(255, 30, 30);
  border: none;
  color: white;
  padding: 8px 6px;
  font-size: 10px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    color: red;
    border: 1px solid red;
  background-color: rgb(255, 255, 255);
}
</style>
@endsection

@section('main')
<div class="page-wrapper">
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
                        <h3 style="color: white;">{{$articlesData->title}}</h3>
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
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{ URL::to('/') }}/uploads/articles/{{$articlesData->image1}}" width="738" height="437" alt>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a>{{$articlesData->auther}}</a> </li>
                                    @if(Session::get('user_id'))
                                   <a href="/user/addLike/{{$articlesData->articles_id}}"> <li><button class="btn"><i class="fa fa-heart"></i>Like</button></li></a>
                                    @endif
                                    <li><i class="fi flaticon-comment-white-oval-bubble"></i>  {{$total_comment}} Comments </li>
                                    {{-- <li><i class="fi flaticon-calendar"></i><?php echo date('d-M-Y', strtotime($articlesData->article_date)); ?></li> --}}
                                </ul>
                            </div>
                            <h2>{{$articlesData->title}}</h2>
                            <p>{{$articlesData->description}}</p>
                            {{-- <blockquote>
                                Combined with a handful of model sentence structures, generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </blockquote>
                            <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,</p> --}}

                            <div class="gallery">
                                <div>
                                    <img src="{{ URL::to('/') }}/uploads/articles/{{$articlesData->image1}}" width="361" height="380" alt="">
                                </div>
                                <div>
                                    <img src="{{ URL::to('/') }}/uploads/articles/{{$articlesData->image2}}" width="361" height="380" alt="" >
                                </div>
                            </div>
                        </div>
                        <div class="tag-share-s2 clearfix">
                            <div class="tag">
                                <span>Refrence: </span>
                                <ul>
                                    <li><a href="{{$articlesData->ref_link}}">{{$articlesData->ref_link}}</a></li>
                                    
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->

                        {{-- <div class="author-box">
                            <div class="author-avatar">
                                <a href="#" target="_blank"><img src="assets/images/blog-details/author.jpg" alt></a>
                            </div>
                            <div class="author-content">
                                <a href="#" class="author-name">Author: {{$articlesData->auther}}</a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                                {{-- <div class="socials">
                                    <ul class="social-link">
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- end author-box --> --}}

                        {{-- <div class="more-posts">
                            <div class="previous-post">
                                <a href="blog.html">
                                    <span class="post-control-link">Previous Post</span>
                                    <span class="post-name">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</span>
                                </a>
                            </div>
                            <div class="next-post">
                                <a href="blog-left-sidebar.html">
                                    <span class="post-control-link">Next Post</span>
                                    <span class="post-name">Dignissimos ducimus qui blanditiis praesentiu deleniti atque corrupti quos dolores</span>
                                </a>
                            </div>
                        </div> --}}

                        <div class="comments-area">
                            <div class="comments-section">
                                <h3 class="comments-title">{{$total_comment}} Comments</h3>
                                <ol class="comments">
                                    <li class="comment even thread-even depth-1" id="comment-1">
                                        @foreach ($commentData as $row)
                                            
                                        <div id="div-comment-1">
                                            <div class="comment-main-area">
                                                <div class="comment-wrapper">
                                                    <div class="comments-meta">
                                                        <h4>{{$row->username}} <span class="comments-date">says <?php echo date('M d,Y h:m A', strtotime($row->comment_date)); ?></span></h4>
                                                    </div>
                                                    <div class="comment-area">
                                                        <p>{{$row->comment}}</p>
                                                        {{-- <div class="comments-reply">
                                                            <a class="comment-reply-link" href="#"><span>Reply</span></a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        @endforeach
                                    </li>
                                </ol>
                            </div> <!-- end comments-section -->

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Comment</h3>
                                <form class="comment-form" method="POST" action="/user/addComment">
                                    @csrf
                                    <input type="hidden" value="{{$articlesData->articles_id}}" name="articles_id" type="text">
                                    <input placeholder="Name" type="text"  name="txtname">
                                    <div class="form-textarea">
                                        <textarea id="comment" name="txtcomment" placeholder="Write Your Comments..."></textarea>
                                    </div>
                                    <div class="form-submit">
                                        <input id="submit" value="Post Comment" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end comments-area -->
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="assets/images/blog/about-widget.jpg" alt>
                            </div>
                            <h4>{{$articlesData->auther}}</h4>
                            <p>Hi! beautiful people. I`m an authtor of this blog. Read our post - stay with us</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="widget recent-post-widget">
                            <h3>Related Posts</h3>
                            <div class="posts">
                                @foreach($allArticlesData as $row)
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ URL::to('/') }}/uploads/articles/{{$row->image1}}" width="90" height="80" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="/user/articlesDetaile/{{$row->articles_id}}">{{$row->title}}</a></h4>
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

                        <div class="wpo-contact-widget widget">
                            <h2>How We Can <br> Help You!</h2>
                            <p>labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                            <a href="contact.html">Contact Us</a>
                       </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
@endsection

@section('js')
<script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
<script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>

{{-- <script>
    $(document).ready(function() {
       $(document).on("click",".btn-danger", function() {
           var id = $(this).attr("data-id");
           $("#deleteid").val(id);
       });
   });
</script> --}}
@endsection