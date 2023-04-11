@extends('../layouts/front/frontlayout')

@section('content')

    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>event</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">event</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        EVENT PAGE START
    ==================================-->
    <section class="tf__event_page mt_190 xs_mt_95">
        <div class="container">
            
            <div class="row">
                @foreach ($events as $event)
                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__single_event">
                        <div class="tf__single_event_img">
                            <img src="{{ asset('storage/' . $event->photo) }}" alt="event" class="img-fluid w-100">
                        </div>
                        <div class="tf__single_event_text">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>{{ $event->location }}</li>
                                <li><i class="far fa-clock"></i> {{ $event->start_time }}</li>
                            </ul>
                            <a class="title" href="{{ route('event.show', $event->_id) }}">{{ $event->title }}</a>
                            <p>{{ $event->description }}</p>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="tf__pagination mt_50">
                <div class="row">
                    <div class="col-12">
                        {{ $events->links('vendor.pagination.default') }}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        EVENT PAGE END
    ==================================-->

@endsection    