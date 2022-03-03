@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Сайт портфолио</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($themes as $theme)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ $theme->randomPath()['path'] }}" alt="blog post">
                            </div>
                            <p class="blog-post-category"></p>
{{--                            <p class="blog-post-category">{{ $theme->category->title }}</p>--}}
                            <a href="{{ route('theme.show', $theme->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $theme->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -100px;">
                        {{ $themes->links() }}
                    </div>
                </div>
            </section>
        </div>

    </main>
@endsection
