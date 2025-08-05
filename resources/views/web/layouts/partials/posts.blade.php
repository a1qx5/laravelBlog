<!-- layout-fixed -->

<div class="layout-fixed"> <!-- blog-regular -->
    <div class="blog-regular">

    <div class="text-center bg-orange-300 rounded-3xl">
        <a
            href="/blog/create"
            class="text-center">Post something!</a>
    </div>

        @foreach ($posts as $post)
        <!-- .hentry -->
        <article class="hentry post">

            <!-- .entry-header -->
            <header class="entry-header">


                <!-- .entry-title -->
                <h1 class="entry-title"><a href="blog-single.html">{{ $post->title }}</a></h1>

                <!-- .entry-meta -->
                <div class="entry-meta">
                    <span class="entry-date">
                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">{{ date('jS M Y', strtotime($post->created_at)) }}</time>
                    </span>
                    <span>
                        Made by {{ $post->user->name }}
                    </span>
                    <span class="read-time"><span class="eta"></span> read</span>
                    <!--<span class="edit-link">
                            <a class="post-edit-link" href="#">Edit</a>
                        </span>-->
                </div>
                <!-- .entry-meta -->

            </header>
            <!-- .entry-header -->

            <!-- .featured-image -->
            <div class="featured-image">
                @if ($post->image_path != Null)
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="blog-image">
                @else
                    <img src="{{ asset('images/blog/01.jpg') }}" alt="no-image">
                @endif
            </div>
            <!-- .featured-image -->

            <!-- .entry-content -->
            <div class="entry-content">

                <p>{{ $post->description }}
                    <span class="more">
                        <a href="/blog/{{ $post->slug }}" class="more-link">Continue reading <span class="meta-nav">→</span></a> <br>

                        @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <form
                            action="/blog/{{ $post->slug }}"
                            method="POST">
                            @csrf
                            @method("delete")
                            <button
                                class="more-link text-red-500"
                                type="submit">
                                Delete
                            </button>
                        </form>

                        <a href="/blog/{{ $post->slug }}/edit" class="more-link">
                            Edit
                        </a>
                        @endif
                    </span>
                </p>

            </div>
            <!-- .entry-content -->

        </article>
        <!-- .hentry -->
        @endforeach

        <!-- post nav -->
        <nav class="navigation" role="navigation">
            <div class="nav-previous"><a href="#"><span class="meta-nav">←</span> Older posts</a></div>
            <!--<div class="nav-next"><a href="#">Newer posts <span class="meta-nav">→</span></a></div>-->
        </nav>
        <!-- post nav -->



    </div>
    <!-- blog-regular -->



</div>
<!-- layout-fixed -->