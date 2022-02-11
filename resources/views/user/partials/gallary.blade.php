<section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              @foreach ($sliders as $slider)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endIf"></li>
              @endforeach
              </ol>
            <div class="carousel-inner">
              @foreach ($sliders as $slider)
                <div class="carousel-item h-25 @if($loop->first) active @endIf">
                  <img class="d-block w-100" src="{{ asset('images/slider/' . $slider->url) }}">
                </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
</section>