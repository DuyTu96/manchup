@extends('client.layouts.main')
@section('content')
<section class="blog_post">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="entry-detail">
                    <div class="page-title">
                        <hr>
                        <h1>{{ $post->title }}</h1>
                        <br>
                    </div>
                    <div class="entry-photo">
                        <figure><img style="width: 80%" src="{{ $post->image }}" alt="{{ $post->title }}"></figure>
                        <hr>
                    </div>
                    <div class="entry-meta-data">
                        <span class="author"><i class="fa fa-user"></i>&nbsp; by: <a href="#">Admin</a></span>
                        <span class="date"><i class="fa fa-calendar">&nbsp;</i>&nbsp; {{ date_format($post->created_at,'d-m-Y H:i:s') }}</span>
                    </div>
                    <div class="content-text clearfix">
                        {!! $post->content !!}
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
