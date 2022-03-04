@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $theme->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
            </p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset($theme->randomPath()['path']) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $theme->description !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="edica-landing-section edica-landing-blog">
                        <div class="container">
                            <h2 class="edica-landing-section-title aos-init aos-animate" data-aos="fade-up">Фотографии в теме</h2>
                            <div class="row">
                                @foreach($photos as $photo)
                                <div class="col-md-4 landing-blog-post aos-init aos-animate" data-aos="fade-right">
                                    <img src="{{ asset($photo->path) }}" alt="blog post" class="blog-post-thumbnail">
                                    <p class="blog-post-category">Blog post</p>
                                    <h4 class="blog-post-title">{{ $photo->description }}</h4>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
