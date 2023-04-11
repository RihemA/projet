@extends('../layouts/front/frontlayout')

@section('content')

    <!--=================================
        BREADCRUMB START
    ==================================-->
    <section class="tf__breadcrumb" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>{{ $event->title }}</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a >{{ $event->title }}</a></li>
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
        EVENT DETAILS PAGE START
    ==================================-->
    <section class="tf__event_details mt_195 xs_mt_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__event_details_img wow fadeInUp" data-wow-duration="1.5s">
                        <img src="{{ asset('storage/' . $event->photo) }}" alt="event details" class="img-fluid w-100">
                    </div>
                    <div class="tf__event_details_text mt_35 wow fadeInUp" data-wow-duration="1.5s">
                        <span class="categories">{{ $event->title }}</span>
                        <ul class="location d-flex flex-wrap">
                            <li><i class="far fa-map-marker-alt"></i> {{ $event->location }}</li>
                            <li><i class="far fa-clock"></i> {{ $event->start_time }}-{{ $event->end_time }}</li>
                        </ul>
                        @if ($subscription)
                        
                        <form action="{{ route('event.unsubscribe', $event) }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $event->id }}" name="id">
                            <button type="submit" class="btn btn-danger">Unsubscribe</button>
                        </form>
                        
                        
                        @else
                        <!-- Show subscribe button -->
                        <form action="{{ route('event.subscribe', $event) }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $event->id }}" name="id">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    @endif

                    <p>{{ $event->description }} </p>
                    <ul>
                        @foreach ($subscribers as $subscriber)
                            <li>{{ $subscriber }}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        EVENT DETAILS PAGE END
    ==================================-->

@endsection    