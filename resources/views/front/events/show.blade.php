@extends('../layouts/front/frontlayout')

@section('content')

			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Blog Details</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
				
					<div class="row">
						<div class="mx-auto col-lg-8 col-md-12">
							<div class="blog-view">
								<div class="blog blog-single-post">
									<div class="">
										<a href="javascript:void(0);"><img height="600px" width="100%" alt="" src="{{ asset('storage/' . $event->photo) }}" ></a>
									</div>
									<h1 class="blog-title">{{ $event->title }}</h1>
									<div class="blog-info clearfix">
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
									</div>
									<div class="blog-content">
                                        <p>{{ $event->description }}</p>
									</div>
								</div>
																
								
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

			</div>		
			<!-- /Page Content -->

@endsection    