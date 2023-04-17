@extends('../layouts/back/adminlayout')

@section('admin')
<div class="content container-fluid">
					
    <!-- Page Header -->

    <!-- /Page Header -->

    <div class="row">
        <h2 class="page-title">Bienvenue {{ Auth()->user()->name}}</h2>
    </div>
    
</div>	
@endsection