@extends('layout/main')
@section('classnavitemberita', 'active')
@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Detail Berita</h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Home</a>
                        <a href="{{('/berita/id_berita')}}">Detail Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area p_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <center><img class="img-fluid" src="{{$berita->gambar}}" style="width: 50%" alt=""></center>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a class="active" href="#">{{$berita->kategori}}</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li>
                                        <a href="#">Dinkes DIY
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">{{$berita->created_at}}
                                            <i class="lnr lnr-calendar-full"></i>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>{{$berita->judul}}</h2>
                            <?php
                                echo "$berita->berita";
                            ?>
                        </div>
                       
                    </div>
                   
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Pengumuman Terbaru</h4>
                            <ul class="list cat-list">
                                @foreach($pengumumans->slice(0,5) as $pengumumans)
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>{{ $loop->iteration }}. {{$pengumumans->judul}}</p>
                                        <p>{{$pengumumans->created_at}}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Berita Terbaru</h3>
                            @foreach($beritans->slice(0,4) as $beritans)
                                <div class="media post_item">
                                    <img src="{{$beritans->gambar}}" style="width:100px;height:60px;" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html">
                                            <h3>{{$beritans->judul}}</h3>
                                        </a>
                                        <p>{{$beritans->updated_at}}</p>
                                    </div>
                                </div>  
                            @endforeach
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Artikel Terbaru</h3>
                            @foreach($artikels->slice(0,4) as $artikels)
                                <div class="media post_item">
                                    <img src="{{$artikels->gambar}}" style="width:100px;height:60px;" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html">
                                            <h3>{{$artikels->judul}}</h3>
                                        </a>
                                        <p>{{$artikels->created_at}}</p>
                                    </div>
                                </div>  
                            @endforeach
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

@endsection