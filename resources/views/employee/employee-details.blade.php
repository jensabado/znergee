@extends('template.base')

@section('content')
    <style>
        table thead tr th,
        table tfoot tr th {
            font-size: 13px;
            text-align: center;
            /* color: #61cfee; */
        }

        table tbody tr td {
            font-size: 14px;
            text-align: center;
        }
    </style>

    <div class="container-fluid mb-3">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="change-password-tab" data-toggle="pill" href="#change-password"
                            role="tab" aria-controls="change-password" aria-selected="true">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="persoanal-information-tab" data-toggle="pill" href="#persoanal-information"
                            role="tab" aria-controls="persoanal-information" aria-selected="false">Personal
                            Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="vlsl-tab" data-toggle="pill"
                            href="#vlsl" role="tab" aria-controls="vlsl"
                            aria-selected="false">VLSL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="statutory-tab" data-toggle="pill"
                            href="#statutory" role="tab" aria-controls="statutory"
                            aria-selected="false">Statutory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="logs-tab" data-toggle="pill"
                            href="#logs" role="tab" aria-controls="logs"
                            aria-selected="false">202 Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="medical-tab" data-toggle="pill"
                            href="#medical" role="tab" aria-controls="medical"
                            aria-selected="false">Medical</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade active show" id="change-password" role="tabpanel"
                        aria-labelledby="change-password-tab">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" name="" id="" class="form-control" placeholder="Enter Old Password">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="" id="" class="form-control" placeholder="Enter New Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Re-type Password</label>
                                        <input type="password" name="" id="" class="form-control" placeholder="Re-type Password">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="persoanal-information" role="tabpanel"
                        aria-labelledby="persoanal-information-tab">
                        <h6 class="text-primary">General Information</h6>
                        <hr>
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Individual ID</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="231129-021153" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Sabado">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Jennifer">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Fernandez">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Software Engineer" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="jennifer.sabado@atomitsoln.com" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="" id="" class="form-control"
                                            value="2000-12-22" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Block 130 Bagong Kampi St. Green Valley, San Nicolas III">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Bacoor">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="Cavite">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>Philippines</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>English</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Timezone</label>
                                        <select name="" id="" class="form-control">
                                            <option value="" selected>(GMT+08:00) Manila, Beijing, Hongkong</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-primary">Contact Details</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Landline Number</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="09764574222" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fax Number</label>
                                        <input type="text" name="" id="" class="form-control"
                                            value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="vlsl" role="tabpanel"
                        aria-labelledby="vlsl-tab">
                        <h6 class="text-primary">VLSL Information</h6>
                        <hr>
                        <div class="bg-primary text-white text-center p-2 mb-2 font-weight-bold" style="font-size: 14px;">
                            <i class="fa-regular fa-calendar-days p-2"></i>As of <span id="datetime"></span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>LEAVE</th>
                                        <th>ENTITLED</th>
                                        <th>EARNED</th>
                                        <th>USAGE</th>
                                        <th>BALANCE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VL</td>
                                        <td>6.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <td>SL</td>
                                        <td>6.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                        <td>0.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="statutory" role="tabpanel"
                        aria-labelledby="statutory-tab">
                        <h6 class="text-primary">Statutory - all ready only</h6>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Company ID</label>
                                    <input type="text" name="" id="" class="form-control" value="231129-021153" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>TIN ID</label>
                                    <input type="text" name="" id="" class="form-control" value="638-769-970" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>SSS ID</label>
                                    <input type="text" name="" id="" class="form-control" value="35-2782819-9" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Philhealth ID</label>
                                    <input type="text" name="" id="" class="form-control" value="01-026505085-4" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pag-ibig</label>
                                    <input type="text" name="" id="" class="form-control" value="121328430692" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>HMO ID</label>
                                    <input type="text" name="" id="" class="form-control" value="N/A" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="logs" role="tabpanel"
                        aria-labelledby="logs-tab">
                        <h6 class="text-primary">202 Logs</h6>
                        <hr>
                    </div>
                    <div class="tab-pane fade" id="medical" role="tabpanel"
                        aria-labelledby="medical-tab">
                        <h6 class="text-primary">Medical</h6>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        setInterval(() => {
            const now = new Date();
            const datetime = now.toLocaleString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: true
            });
            document.getElementById("datetime").innerHTML = datetime;
        }, 1000);
    </script>
@endsection
