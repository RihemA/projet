@extends('../layouts/back/adminlayout')

@section('admin')
<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">propositions</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">propositions</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Start time</th>
                                    <th>End Time</th>
                                    <th>Location</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->title}}</td>
                                    <td>{{$event->description}}</td>
                                    <td>{{ $event->start_time }}</td>
                                    <td>{{ $event->end_time }}</td>
                                    <td>{{ $event->location }}</td>
                                    
                                    <td class="text-end">
                                        <div class="actions">
                                           
                                            <a href="{{ route('events.show', $event->_id) }}" class="btn btn-info">View</a>
                                                <form method="POST" action="{{ route('events.updateStatus') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$event->_id}}">
                                                    <input type="hidden" name="status" value="accepted">
                                                    <button type="submit" class="btn btn-success">Accept</button>
                                                </form>
                                                <form method="POST" action="{{ route('events.updateStatus') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$event->_id}}">
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>			
    </div>
</div>
@endsection
