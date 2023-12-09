@extends('admin.layout.master')

@section('content')
    <?php $data_permission = getPermissionForCRUDPresentOrNot('list-objectivegoals', session('permissions'));
    ?>
    <div class="main-panel">
        <div class="content-wrapper mt-7">
            <div class="page-header">
                <h3 class="page-title">
                    Objective Goals List
                    {{-- @if (in_array('per_add', $data_permission))
                <a href='{{ route('add-objectivegoals') }}' class="btn btn-sm btn-primary ml-3">+
                    Add</a>
                @endif --}}
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">About Us</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Objective Goals</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @include('admin.layout.alert')
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Title </th>
                                                    <th>शीर्षक </th>
                                                    <th>Description </th>
                                                    <th>वर्णन </th>
                                                    <th>Image </th>
                                                    <th>प्रतिमा </th>

                                                    <!-- <th>Status</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($objectivegoals as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ strip_tags($item->english_title) }}</td>
                                                        <td>{{ strip_tags($item->marathi_title) }}</td>
                                                        <td>{{ strip_tags($item->english_description) }}</td>
                                                        <td>{{ strip_tags($item->marathi_description) }}</td>
                                                        <td><img class="img-size"
                                                                src="{{ Config::get('DocumentConstant.OBJECTIVE_GOALS_VIEW') }}{{ $item->english_image }}"
                                                                alt=" {{ strip_tags($item['english_title']) }} Image" />
                                                        </td>
                                                        <td><img class="img-size"
                                                                src="{{ Config::get('DocumentConstant.OBJECTIVE_GOALS_VIEW') }}{{ $item->marathi_image }}"
                                                                alt=" {{ strip_tags($item['marathi_title']) }} प्रतिमा" />
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                @if (in_array('per_update', $data_permission))
                                                                    <a data-id="{{ $item->id }}"
                                                                        class="edit-btn btn btn-sm btn-outline-primary m-1"
                                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                @endif
                                                                <a data-id="{{ $item->id }}"
                                                                    class="show-btn btn btn-sm btn-outline-primary m-1"
                                                                    title="Show"><i class="fas fa-eye"></i></a>
                                                                @if (in_array('per_delete', $data_permission))
                                                                    {{-- <a data-id="{{ $item->id }}"
                                                            class="delete-btn btn btn-sm btn-outline-danger m-1"
                                                            title="Delete"><i
                                                                class="fas fa-archive"></i></a> --}}
                                                                @endif

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
            </div>
        </div>
        <form method="POST" action="{{ url('/delete-objectivegoals') }}" id="deleteform">
            @csrf
            <input type="hidden" name="delete_id" id="delete_id" value="">
        </form>
        <form method="POST" action="{{ url('/show-objectivegoals') }}" id="showform">
            @csrf
            <input type="hidden" name="show_id" id="show_id" value="">
        </form>
        <form method="GET" action="{{ url('/edit-objectivegoals') }}" id="editform">
            @csrf
            <input type="hidden" name="edit_id" id="edit_id" value="">
        </form>
    @endsection
