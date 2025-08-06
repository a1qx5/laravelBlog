@extends('web.layouts.master')

@section('content')
<!-- site-main -->
        <div id="main" class="site-main">
        	            
            <!-- primary -->
        	<div id="primary" class="content-area">
            	
                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- post-slider -->
                    <!--<div class="post-slider owl-carousel" data-items="3" data-loop="false" data-center="false" data-mouse-drag="true" data-nav="false" data-dots="false" data-autoplay="true" data-autoplay-speed="600" data-autoplay-timeout="2000">-->
                    <div class="post-slider owl-carousel" data-items="3" data-loop="true" data-dots="false" data-nav="true" data-nav-prev-text="prev" data-nav-next-text="next">
                    	
                        @foreach ($posts as $post)
                            @if ($post->is_promoted)
        
                            <!-- post -->
                            <div class="post-thumbnail" style="background-image:url('{{ $post->image_path && file_exists(public_path("images/{$post->image_path}")) ? asset("images/{$post->image_path}") : asset("images/blog/01.jpg") }}')">
                                    
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    <!-- .entry-title -->
                                    <h1 class="entry-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h1>
                                </header>
                                <!-- .entry-header -->
                                
                            </div>
                            <!-- post -->    
                            
                            @endif
                        @endforeach
                            
                    </div>
                    <!-- post-slider -->
                    
                    <!--posts-->
                    @include('web.layouts.partials.posts')

                </div>
                <!-- site-content -->
                
            </div>
            <!-- primary -->    

        </div>
        <!-- site-main -->
@endsection