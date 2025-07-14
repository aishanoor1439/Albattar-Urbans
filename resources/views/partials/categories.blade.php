    <section class="section-margin mt-0">
        <div class="container">
            <div class="section-intro pb-60px">
                <h2>Top <span class="section-intro__style">Categories</span></h2>
            </div>
            <div class="owl-carousel owl-theme hero-carousel">
                @foreach($categories as $category)
                <div class="hero-carousel__slide">
                    <img src="{{$category->image_url}}" alt="{{$category->name}}" class="img-fluid">
                    <a href="{{ route('categories.show', $category->id) }}" class="hero-carousel__slideOverlay">
                        <h3>{{$category->name}}</h3>
                        <p>{{$category->desctipion}}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>