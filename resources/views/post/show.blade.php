@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200">{{ $date->format('F') }} {{ $date->day }}, {{ $date->year }}
                • {{ $date->format('H:i') }} • Featured • {{ $post->category->title }}</p>

            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200"> {{ $post->comments->count() }}
                Comments
                • {{ $post->liked_users_count }} Likes</p>
            <div class="edica-blog-post-category d-flex justify-content-center" data-aos="fade-up" data-aos-delay="150">
                @auth()
                    <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="border-0 bg-transparent">
                            @if(auth()->user()->likedPosts->contains($post->id))
                                <i class="fas fa-heart fa-lg"></i>
                            @else()
                                <i class="far fa-heart fa-lg"></i>
                            @endif
                        </button>
                    </form>
                @endauth
                @guest()
                    <i class="far fa-heart fa-lg"></i>
                @endguest
            </div>

            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ 'storage/' . $post->image }}" alt="featured image" class="w-100"
                     style="height:400px; object-fit:cover; object-position:center;">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!!  $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    @if($relatedPosts->count() > 0)
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row d-flex justify-content-center">

                                @foreach($relatedPosts as $relatedPost)
                                    @php
                                        $delay = rand(50, 150);
                                    @endphp
                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                                        <img src="{{ 'storage/' . $relatedPost->image }}" alt="related post"
                                             class="post-thumbnail">
                                        <p class="post-category">{{ $relatedPost->category->name }}</p>
                                        <a href="{{ route('post.show', $relatedPost->id) }}"
                                           class="blog-post-permalink">
                                            <h5 class="post-title">{{ $relatedPost->title }}</h5>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    <section class="comment-list">
                        <!-- /.card-body -->
                        <h2 class="section-title mb-4" data-aos="fade-up">Comments ({{ $post->comments->count() }}
                            )</h2>

                        @foreach($post->comments as  $index => $comment)
                            <div class="card-comments bg-transparent" data-aos="fade-left">
                                <div class="card-comment">
                                    <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg"
                                         alt="User Image">

                                    <div class="comment-text"><span class="username">{{ $comment->user->name }}<span
                                                class="text-muted float-right">{{  $comment->dateAsCarbon->diffForHumans() }}</span></span>
                                        {{ $comment->message }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>

                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-4" data-aos="fade-up">Leave a Reply</h2>
                            <form action="{{ route('post.comment.store', $post->id) }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <textarea name="message" id="comment" class="form-control"
                                                  placeholder="Enter Some Comment" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Add Comment" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth


                </div>
            </div>
        </div>
    </main>
@endsection
