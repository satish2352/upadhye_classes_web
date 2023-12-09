@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Disaster Forecast
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Update Disaster Forecast</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action='{{ route('update-disasterforcast') }}' method="post"
                                id="regForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="english_title">Title English <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="english_title"
                                                id="english_title" placeholder="Enter the Title"
                                                value="@if (old('english_title')) {{ old('english_title') }}@else{{ $disasterforcast->english_title }} @endif">
                                            @if ($errors->has('english_title'))
                                                <span class="red-text"><?php echo $errors->first('english_title', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="marathi_title">Title Marathi <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="marathi_title"
                                                id="marathi_title" placeholder="शीर्षक प्रविष्ट करा"
                                                value="@if (old('marathi_title')) {{ old('marathi_title') }}@else{{ $disasterforcast->marathi_title }} @endif">
                                            @if ($errors->has('marathi_title'))
                                                <span class="red-text"><?php echo $errors->first('marathi_title', ':message');
                                                ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="english_description">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control " name="english_description" id="english_description" placeholder="Enter the Description"
                                                name="english_description">
@if (old('english_description'))
{{ old('english_description') }}@else{{ $disasterforcast->english_description }}
@endif
</textarea>
                                            @if ($errors->has('english_title'))
                                                <span class="red-text"><?php echo $errors->first('english_title', ':message');
                                                ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label> वर्णन <span class="text-danger">*</span></label>
                                            <textarea class="form-control " name="marathi_description" id="marathi_description" placeholder="वर्णन प्रविष्ट करा">
@if (old('marathi_description'))
{{ old('marathi_description') }}@else{{ $disasterforcast->marathi_description }}
@endif
</textarea>
                                            @if ($errors->has('english_description'))
                                                <span class="red-text"marathi_description><?php echo $errors->first('english_description', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success">Save &amp; Update</button>
                                        {{-- <button type="reset" class="btn btn-danger"><a
                                            href="{{ route('list-disasterforcast') }}"
                                            class="text-light">Cancel</a></button> --}}
                                        <span><a href="{{ route('list-disasterforcast') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" class="form-control"
                                    value="{{ $disasterforcast->id }}" placeholder="">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
