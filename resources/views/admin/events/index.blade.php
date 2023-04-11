@extends('../layouts/back/adminlayout')

@section('admin')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Users Lists</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total 2,595 users.</p>

                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="{{ route('events.create') }}" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu">
                                    <em class="icon ni ni-menu-alt-r"></em>Ajouter
                                </a>

                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-stretch">
                        <div class="card-inner-group">
                            <div class="card-inner position-relative card-tools-toggle">

                                <div class="card-title-group">

                                    <div class="card-tools">
                                        <div class="form-inline flex-nowrap gx-3">
                                            <a href="{{ route('events.create') }}"
                                                class="btn btn-icon btn-primary" >
                                                Ajouter
                                            </a>
                                        </div><!-- .form-inline -->
                                    </div><!-- .card-tools -->
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                    data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="toggle-wrap">
                                                    <a href="#" class="btn btn-icon btn-trigger toggle"
                                                        data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                    <div class="toggle-content" data-content="cardTools">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li class="toggle-close">
                                                                <a href="#" class="btn btn-icon btn-trigger toggle"
                                                                    data-target="cardTools"><em
                                                                        class="icon ni ni-arrow-left"></em></a>
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown">
                                                                        <div class="dot dot-primary"></div>
                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                    </a>
                                                                    <div
                                                                        class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                        <div class="dropdown-head">
                                                                            <span class="sub-title dropdown-title">Filter
                                                                                Users</span>
                                                                            <div class="dropdown">
                                                                                <a href="#"
                                                                                    class="btn btn-sm btn-icon">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                            <div class="row gx-6 gy-3">
                                                                                <div class="col-6">
                                                                                    <div
                                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            id="hasBalance">
                                                                                        <label class="custom-control-label"
                                                                                            for="hasBalance"> Have
                                                                                            Balance</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div
                                                                                        class="custom-control custom-control-sm custom-checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="custom-control-input"
                                                                                            id="hasKYC">
                                                                                        <label class="custom-control-label"
                                                                                            for="hasKYC"> KYC
                                                                                            Verified</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="overline-title overline-title-alt">Role</label>
                                                                                        <select
                                                                                            class="form-select js-select2">
                                                                                            <option value="any">Any
                                                                                                Role</option>
                                                                                            <option value="investor">
                                                                                                Investor</option>
                                                                                            <option value="seller">
                                                                                                Seller</option>
                                                                                            <option value="buyer">
                                                                                                Buyer</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-6">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="overline-title overline-title-alt">Status</label>
                                                                                        <select
                                                                                            class="form-select js-select2">
                                                                                            <option value="any">Any
                                                                                                Status</option>
                                                                                            <option value="active">
                                                                                                Active</option>
                                                                                            <option value="pending">
                                                                                                Pending</option>
                                                                                            <option value="suspend">
                                                                                                Suspend</option>
                                                                                            <option value="deleted">
                                                                                                Deleted</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary">Filter</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-foot between">
                                                                            <a class="clickable" href="#">Reset
                                                                                Filter</a>
                                                                            <a href="#">Save Filter</a>
                                                                        </div>
                                                                    </div><!-- .filter-wg -->
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="#"
                                                                        class="btn btn-trigger btn-icon dropdown-toggle"
                                                                        data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-setting"></em>
                                                                    </a>
                                                                    <div
                                                                        class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                        <ul class="link-check">
                                                                            <li><span>Show</span></li>
                                                                            <li class="active"><a href="#">10</a>
                                                                            </li>
                                                                            <li><a href="#">20</a></li>
                                                                            <li><a href="#">50</a></li>
                                                                        </ul>
                                                                        <ul class="link-check">
                                                                            <li><span>Order</span></li>
                                                                            <li class="active"><a href="#">DESC</a>
                                                                            </li>
                                                                            <li><a href="#">ASC</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .dropdown -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .toggle-content -->
                                                </div><!-- .toggle-wrap -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search"
                                                data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none"
                                                placeholder="Search by user or email">
                                            <button class="search-submit btn btn-icon"><em
                                                    class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner p-0">
                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </div>
                                        <div class="nk-tb-col"><span class="sub-text">title</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Description</span></div>
                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Start date</span></div>
                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">End Date</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Location</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span></div>
                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Actions </span>
                                        </div>
                                    </div><!-- .nk-tb-item -->
                                    @foreach ($events as $event)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span>{{ $event->title }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $event->description }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>{{ $event->start_time }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $event->end_time }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>{{ $event->location }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl">
                                                <span>{{ $event->status }}</span>
                                            </div>
                                           
                                            
                                            <div class="nk-tb-col">
                                                <a href="{{ route('events.show', $event->_id) }}" class="btn btn-info">View</a>
                                                <a href="{{ route('events.edit', $event->_id) }}" class="btn btn-success">Edit</a>
                                                <form method="POST" action="{{ route('events.destroy', $event->_id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                            
                                        </div><!-- .nk-tb-item -->
                                    @endforeach

                                </div><!-- .nk-tb-list -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <ul class="pagination justify-content-center justify-content-md-start">
                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><span class="page-link"><em
                                                class="icon ni ni-more-h"></em></span></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul><!-- .pagination -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
