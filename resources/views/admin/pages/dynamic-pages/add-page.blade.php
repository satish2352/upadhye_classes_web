@extends('admin.layout.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Dynamic Page
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Dynamic Page</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action='{{ route('add-dynamic-page') }}' method="post"
                                enctype="multipart/form-data" id="regForm">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">

                                                <label for="menu_name_english">Main Menu</label>&nbsp<span
                                                    class="red-text">*</span>
                                                <select class="form-select form-control" name="menu_data" id="menu_data"
                                                    aria-label="Default select example" value="{{ old('menu_data') }}">
                                                    <option selected>Select Name</option>
                                                    @foreach ($main_menu_data as $key => $data)
                                                        <option value="{{ $data['menu_id'] }}_{{ $data['main_sub'] }}"
                                                            {{ old('menu_data') == $data['menu_id'] ? 'selected' : '' }}>
                                                            {{ $data['menu_name_english'] }}({{ $data['menu_name_marathi'] }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('menu_data'))
                                                    <span class="red-text"><?php echo $errors->first('menu_data', ':message'); ?></span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="english_title">Title</label>&nbsp<span
                                                        class="red-text">*</span>
                                                    <input type="text" class="form-control" name="english_title"
                                                        id="english_title" placeholder="Enter the Tilte"
                                                        value="{{ old('english_title') }}" />
                                                    @if ($errors->has('english_title'))
                                                        <span class="red-text"><?php echo $errors->first('english_title', ':message'); ?></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="marathi_title">शीर्षक</label>&nbsp<span
                                                        class="red-text">*</span>
                                                    <input type="text" class="form-control" name="marathi_title"
                                                        id="marathi_title" placeholder="शीर्षक प्रविष्ट करा "
                                                        value="{{ old('marathi_title') }}" />
                                                    @if ($errors->has('marathi_title'))
                                                        <span class="red-text"><?php echo $errors->first('marathi_title', ':message'); ?></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="english_description">Page Content </label>&nbsp<span
                                                class="red-text">*</span>
                                            <textarea class="form-control" name="english_description" id="summernote1" placeholder="Enter Page Content ">{{ old('english_description') }}</textarea>
                                            @if ($errors->has('english_description'))
                                                <span class="red-text"><?php echo $errors->first('english_description', ':message');
                                                ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="marathi_description">पृष्ठ सामग्री</label>&nbsp<span
                                                class="red-text">*</span>
                                            <textarea class="form-control" name="marathi_description" id="summernote2" placeholder="पृष्ठ सामग्री प्रविष्ट करा ">{{ old('marathi_description') }}</textarea>
                                            @if ($errors->has('marathi_description'))
                                                <span class="red-text"><?php echo $errors->first('marathi_description', ':message');
                                                ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="meta_data">Page Meta Data</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input type="text" class="form-control" name="meta_data"
                                                placeholder="Enter Page Meta Data" value="{{ old('meta_data') }}" />
                                            @if ($errors->has('meta_data'))
                                                <span class="red-text"><?php echo $errors->first('meta_data', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="publish_date">Publish Date</label>&nbsp<span
                                                class="red-text">*</span>
                                            <input type="date" class="form-control" placeholder="YYYY-MM-DD"
                                                name="publish_date" id="publish_date" value="{{ old('publish_date') }}">
                                            @if ($errors->has('publish_date'))
                                                <span class="red-text"><?php echo $errors->first('publish_date', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success">Save &amp; Submit</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-dynamic-page') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- include summernote css/js -->
        
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        {{-- <link rel="stylesheet" href="{{ asset('assets/vendors/summernote/dist/summernote.min.css') }}" />
        <script src="{{ asset('assets/vendors/summernote/dist/summernote.min.js') }}"></script> --}}
            
        <!-- Summernote Editor -->
        <script>
            $('#summernote1').summernote({
                placeholder: 'Enter Content',
                tabsize: 2,
                height: 100
            });
        </script>
        <!-- Summernote Editor End -->
        <!-- Summernote Editor -->
        <script>
            $('#summernote2').summernote({
                placeholder: 'सामग्री प्रविष्ट करा',
                tabsize: 2,
                height: 100
            });
        </script>
        <!-- Summernote Editor End -->

        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>
    @endsection
