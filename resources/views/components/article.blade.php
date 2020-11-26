<article class="single-post wow fadeInUp animated animated" data-wow-delay=".2s"
         style="visibility: visible;-webkit-animation-delay: .2s; -moz-animation-delay: .2s;
                   animation-delay: .2s;">
    @if($news)
        <div class="post-image">
            <img src="@if($news->image) {{ Storage::disk('uploads')->url($news->image) }}
                      @else {{ asset('images/news.jpg') }}
                      @endif" class="img-fluid" alt="">
        </div>
        <h2>{{ $news->title }}</h2>
        {!! $news->content !!}
        <div class="single-post-meta">
            <div class="post-tag">
                <a href="#"><i class="material-icons mdi mdi-bookmark-outline"></i>
                   {{-- TAGS HERE --}}</a>
            </div>
            <div class="share-post text-dark">
                <a href="#"><i class="mdi mdi-facebook"></i></a>
                <a href="#"><i class="mdi mdi-twitter"></i></a>
                <a href="#"><i class="mdi mdi-google-plus"></i></a>
                <a href="#"><i class="mdi mdi-pinterest"></i></a>
            </div>
        </div>
    @else
        <p>{{ __('pages.news.showNewsNotFound') }}</p>
    @endif
</article>
