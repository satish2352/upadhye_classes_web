@extends('admin.layout.master')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="main-panel">
        <div class="content-wrapper mt-6">
            <div class="page-header">
                <h3 class="page-title">
                    Users Master
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Users Master</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" id="frm_register" name="frm_register" method="post" role="form"
                                action="{{ route('update-users') }}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <div class="row">
                                    {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="u_email">Email ID</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="u_email" id="u_email"
                                            placeholder="" value="{{$user_data['data_users']['u_email']}}">
                                        @if ($errors->has('u_email'))
                                        <span
                                            class="red-text"><?php echo $errors->first('u_email', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div> 
                                          <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="u_uname">User Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="u_uname" id="u_uname"
                                                placeholder="" value="{{ $user_data['data_users']['u_uname'] }}">
                                            @if ($errors->has('u_uname'))
                                                <span class="red-text"><?php echo $errors->first('u_uname', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="u_password">Password</label>&nbsp<span class="red-text">*</span>
                                        <input type="text" class="form-control" name="u_password" id="u_password"
                                            placeholder="" value="{{decrypt($user_data['data_users']['u_password'])}}">
                                        @if ($errors->has('u_password'))
                                        <span
                                            class="red-text"><?php echo $errors->first('u_password', ':message'); ?></span>
                                        @endif
                                    </div>
                                </div> --}}

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="role_id">Role Type</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" id="role_id" name="role_id"
                                                onchange="myFunction(this.value)">
                                                <option>Select</option>
                                                @foreach ($user_data['roles'] as $role)
                                                    <option value="{{ $role['id'] }}"
                                                        @if ($role['id'] == $user_data['data_users']['role_id']) <?php echo 'selected'; ?> @endif>
                                                        {{ $role['role_name'] }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('role_id'))
                                                <span class="red-text"><?php echo $errors->first('role_id', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="f_name">First Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="f_name" id="f_name"
                                                placeholder="" value="{{ $user_data['data_users']['f_name'] }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('f_name'))
                                                <span class="red-text"><?php echo $errors->first('f_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="m_name">Middle Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="m_name" id="m_name"
                                                placeholder="" value="{{ $user_data['data_users']['m_name'] }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('m_name'))
                                                <span class="red-text"><?php echo $errors->first('m_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="l_name">Last Name</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="l_name" id="l_name"
                                                placeholder="" value="{{ $user_data['data_users']['l_name'] }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('l_name'))
                                                <span class="red-text"><?php echo $errors->first('l_name', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="number">Number</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="number" id="number"
                                                placeholder="" value="{{ $user_data['data_users']['number'] }}"
                                                onkeyup="editvalidateMobileNumber(this.value)">
                                            <span id="edit-message" class="red-text"></span>
                                            @if ($errors->has('number'))
                                                <span class="red-text"><?php echo $errors->first('number', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="designation" id="designation"
                                                placeholder="" value="{{ $user_data['data_users']['designation'] }}"
                                                oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @if ($errors->has('designation'))
                                                <span class="red-text"><?php echo $errors->first('designation', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="" value="{{ $user_data['data_users']['address'] }}">
                                            @if ($errors->has('address'))
                                                <span class="red-text"><?php echo $errors->first('address', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="state">State</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="state" id="state">
                                                <option value="">Select State</option>
                                            </select>
                                            @if ($errors->has('state'))
                                                <span class="red-text"><?php echo $errors->first('state', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="city">City</label>&nbsp<span class="red-text">*</span>
                                            <select class="form-control" name="city" id="city">
                                                <option value="">Select City</option>
                                            </select>
                                            @if ($errors->has('city'))
                                                <span class="red-text"><?php echo $errors->first('city', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="pincode">Pincode</label>&nbsp<span class="red-text">*</span>
                                            <input type="text" class="form-control" name="pincode" id="pincode"
                                                placeholder="" value="{{ $user_data['data_users']['pincode'] }}"
                                                onkeyup="editvalidatePincode(this.value)">
                                            <span id="edit-message-pincode" class="red-text"></span>
                                            @if ($errors->has('pincode'))
                                                <span class="red-text"><?php echo $errors->first('pincode', ':message'); ?></span>
                                            @endif
                                        </div>
                                    </div>



                                    <br>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="is_active"
                                                    id="is_active" value="y" data-parsley-multiple="is_active"
                                                    @if ($user_data['data_users']['is_active']) <?php echo 'checked'; ?> @endif>
                                                Is Active
                                                <i class="input-helper"></i><i class="input-helper"></i></label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 user_tbl">
                                        <div id="data_for_role">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 text-center mt-3">
                                        <input type="hidden" class="form-check-input" name="edit_id" id="edit_id"
                                            value="{{ $user_data['data_users']['id'] }}">
                                        <button type="submit" class="btn btn-success">Save
                                            &amp; Submit</button>
                                        {{-- <button type="reset" class="btn btn-danger">Cancel</button> --}}
                                        <span><a href="{{ route('list-users') }}"
                                                class="btn btn-sm btn-primary ">Back</a></span>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function getStateCity(stateId, city_id) {

                $('#city').html('<option value="">Select City</option>');
                if (stateId !== '') {
                    $.ajax({
                        url: '{{ route('cities') }}',
                        type: 'GET',
                        data: {
                            stateId: stateId
                        },

                        success: function(response) {
                            if (response.city.length > 0) {
                                $.each(response.city, function(index, city) {
                                    $('#city').append('<option value="' + city
                                        .location_id +
                                        '" selected>' + city.name + '</option>');
                                });
                                if (city_id != null) {
                                    $('#city').val(city_id);
                                } else {
                                    $('#city').val("");
                                }
                            }
                        }
                    });
                }
            }

            function getState(stateId) {
                $('#state').html('<option value="">Select State</option>');
                if (stateId !== '') {
                    $.ajax({
                        url: '{{ route('states') }}',
                        type: 'GET',
                        data: {
                            stateId: stateId
                        },
                        success: function(response) {
                            if (response.state.length > 0) {
                                $.each(response.state, function(index, state) {
                                    $('#state').append('<option value="' + state
                                        .location_id +
                                        '" selected>' + state.name + '</option>');
                                });
                                $('#state').val(stateId);
                            }
                        }
                    });
                }
            }
        </script>

        <script type="text/javascript">
            function submitRegister() {
                document.getElementById("frm_register").submit();
            }
        </script>
        <script>
            function editvalidateMobileNumber(number) {
                var mobileNumberPattern = /^\d*$/;
                var validationMessage = document.getElementById("edit-message");

                if (mobileNumberPattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Only numbers are allowed.";
                }
            }
        </script>
        <script>
            function editvalidatePincode(number) {
                var pincodePattern = /^\d*$/;
                var validationMessage = document.getElementById("edit-message-pincode");

                if (pincodePattern.test(number)) {
                    validationMessage.textContent = "";
                } else {
                    validationMessage.textContent = "Only numbers are allowed.";
                }
            }
        </script>

        <script>
            $(document).ready(function() {
                myFunction($("#role_id").val());
                getStateCity('{{ $user_data['data_users']['state'] }}', '{{ $user_data['data_users']['city'] }}');
                getState('{{ $user_data['data_users']['state'] }}');

                $("#state").on('change', function() {
                    getStateCity($("#state").val(),'');
                });
            });

            function myFunction(role_id) {
                $("#data_for_role").empty();
                $.ajax({
                    url: "{{ route('list-role-wise-permission') }}",
                    method: "POST",
                    data: {
                        "role_id": role_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $("#data_for_role").empty();
                        $("#data_for_role").append(data);
                    },
                    error: function(data) {}
                });
            }
        </script>
    @endsection
