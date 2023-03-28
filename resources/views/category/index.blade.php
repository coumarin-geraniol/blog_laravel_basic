@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up-left">categories</h1>
            <section class="edica-landing-section edica-landing-about ">
                <div class="col-md-6" data-aos="fade-up-right">
                    <ul class="landing-about-list ">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category.post.index', $category->id) }}"
                                   class="link-muted">{{ $category->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </section>

        </div>

    </main>
@endsection
