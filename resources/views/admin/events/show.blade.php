@extends('../layouts/back/adminlayout')

@section('admin')
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Event Details</h3>                            
                        </div>
                        <div class="nk-block-head-content">
                            <a href="/admin/events"
                                class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="/admin/events"
                                class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                    class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-inner">
                            <div class="row pb-5">
                                <div class="col-lg-6">
                                    <div class="product-gallery me-xl-1 me-xxl-5">
                                        <img src="{{ asset('storage/' . $event->photo) }}" class="rounded w-100" alt="">
                                        
                                    </div><!-- .product-gallery -->
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="product-info mt-5 me-xxl-5">
                                        <h2 class="product-title">{{ $event->title }}</h2>
                                        <div class="product-rating">
                                            
                                        </div><!-- .product-rating -->
                                        
                                    </div><!-- .product-info -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                            <hr class="hr border-light">
                            <div class="row g-gs flex-lg-row-reverse pt-5">
                                <div class="col-lg-5">
                                    
                                </div><!-- .col -->
                                <div class="col-lg-7">
                                    <div class="product-details entry me-xxl-3">
                                        <h3>Event Description</h3>
                                        <p>{{ $event->description}}</p>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
