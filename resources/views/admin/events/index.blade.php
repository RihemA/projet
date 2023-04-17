@extends('../layouts/back/adminlayout')

@section('admin')
<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Events</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active">Events</li>
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
                        <a href="{{ route('events.create') }}" class="btn btn-primary">Ajouter</a>
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
                                                <a href="{{ route('events.edit', $event->_id) }}" class="btn btn-success">Edit</a>
                                                <form method="POST" action="{{ route('events.destroy', $event->_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
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
