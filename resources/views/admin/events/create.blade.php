@extends('../layouts/back/adminlayout')

@section('admin')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><a class="back-to" href="admin/events"><em
                                        class="icon ni ni-arrow-left"></em><span>Events</span></a></div>
                            <h2 class="nk-block-title fw-normal">Add Events</h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">

                        <div class="card">
                            <div class="card-inner">
                                <form method="POST" action="{{ route('events.store') }}" class="form-validate" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Full Name</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name"
                                                        name="name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="description">Message</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" id="description" name="description" placeholder="Write your message"
                                                        required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Start date</label>
                                                <div class="form-control-wrap">
                                                    <div class="input-group">                                                        
                                                        <input type="date" name="start_time" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-subject">End Date</label>
                                                <div class="form-control-wrap">
                                                    <input type="date" class="form-control" id="fv-subject"
                                                        name="end_time" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="location">Location</label>
                                                <div class="form-control-wrap ">
                                                    <input type="text" class="form-control" id="fv-subject"
                                                    name="location" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Main Photo</label>
                                            <input type="file" name="photo" class="form-control-file">
                                        </div>
            
                                        <div class="form-group">
                                            <label for="photos">Gallery Photos</label>
                                            <input type="file" name="photos[]" class="form-control-file" multiple>
                                        </div>                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
@endsection
