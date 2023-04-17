@extends('../layouts/front/frontlayout')

@section('content')

<div class="content">
    <div class="container-fluid">

    <div class="row">
        <div class=" mx-auto col-lg-9 order-md-last order-sm-last order-last map-left">
    
            <div class="row align-items-center mb-4">
                <div class="col-md-6 col">
                    <h4>2245 Mentees found</h4>
                </div>

                <div class="col-md-6 col-auto">
                    <div class="view-icons ">
                        <a href="map-grid.html" class="grid-view active"><i class="fas fa-th-large"></i></a>
                        <a href="map-list.html" class="list-view"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="sort-by d-sm-block d-none">
                        <span class="sortby-fliter">
                            <select class="select">
                                <option>Sort by</option>
                                <option class="sorting">Rating</option>
                                <option class="sorting">Popular</option>
                                <option class="sorting">Latest</option>
                                <option class="sorting">Free</option>
                            </select>
                        </span>
                    </div>
                </div>
            </div>

                <div class="row">
                    @foreach ($events as $event)
                    <div class="col-sm-3 col-md-3 col-xl-3">
                        <div class="profile-widget">
                            <div class="user-avatar">
                                <a href="{{ route('event.show', $event->_id) }}">
                                    <img class="img-fluid" alt="User Image" src="{{ asset('storage/' . $event->photo) }}">
                                </a>
                                <a href="javascript:void(0)" class="fav-btn">
                                    <i class="far fa-bookmark"></i>
                                </a>
                            </div>
                            <div class="pro-content">
                                <h3 class="title">
                                    <a class="title" href="{{ route('event.show', $event->_id) }}">{{ $event->title }}</a>
                                    <i class="fas fa-check-circle verified"></i>
                                </h3>
                                <ul class="available-info">
                                    <p>{{ $event->description }}</p>
                                </ul>
                                <div class="row row-sm">
                                    <div class="col-6">
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('event.show', $event->_id) }}" class="btn book-btn">Afficher</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
        <div class="load-more text-center">
            {{ $events->links('vendor.pagination.default') }}
        </div>
    </div>
    <!-- /content-left-->
</div>
<!-- /row-->

    </div>

</div>	

@endsection    