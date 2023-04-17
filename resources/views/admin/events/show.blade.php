@extends('../layouts/back/adminlayout')

@section('admin')
<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Event Details</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Event Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <!-- Blog details -->
                    <div class="row">
                        <div class="col-12 blog-details">
                            <span class="course-title">{{$event->title}}</span>
                            <div class="d-flex flex-wrap date-col">
                                <span class="date"><i class="fas fa-calendar-check"></i>Start: {{ $event->start_time}} --</span>
                                <span class="date"><i class="fas fa-calendar-check"></i>End: {{ $event->end_time}}</span>
                            </div>
                            <div class="blog-details-img">
                                <img class="img-fluid" src="{{ asset('storage/' . $event->photo) }}" alt="Post Image">
                            </div>
                            <div class="blog-content">
                                <p>{{ $event->description}}</p>
                                
                            </div>
                        </div>
                    </div>
                    <!-- /Blog details -->

                </div>
            </div>

        </div>			
    </div>
    
</div>
@endsection
