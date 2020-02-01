@extends('client.layouts.main')
@section('content')
<section class="blog_post">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a title="Go to Home Page" href="/">Trang Chủ</a><span>&raquo;</span></li>
                        <li class=""> <a title="Go to Home Page" href="{{ route('client.post') }}">Khuyến Mại</a><span>&raquo;</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="center_column col-xs-12 col-sm-12" id="center_column">
                <div class="page-title">
                    <br>
                </div>
                <ul style="list-style: none" class="blog-posts">
                    @foreach ($posts as $post)
                        <li class="post-item wow fadeInUp">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="entry-thumb image-hover2"> <a href="{{ route('client.post.show', $post->id) }}">
                                                <figure><img src="{{ $post->image }}" alt="Blog"></figure>
                                            </a> </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h3 class="entry-title"><a href="{{ route('client.post.show', $post->id) }}">{{ $post->title }}</a></h3>
                                        <div class="entry-meta-data">
                                            <span class="author"> <i class="fa fa-user"></i>&nbsp; by: Admin</span> | 
                                            <span class="date"><i class="fa fa-calendar"></i>&nbsp; {{ date_format($post->created_at,'d-m-Y H:i:s') }}</span>
                                        </div>
                                        <div class="entry-excerpt cutstring">
                                            {!! $post->content !!}
                                        </div>
                                        <div class="entry-more"> <a href="{{ route('client.post.show', $post->id) }}" class="button">Xem Thêm &nbsp;
                                            <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
