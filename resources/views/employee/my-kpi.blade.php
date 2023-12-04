@extends('template.base')

@section('content')

<style>
    table thead tr th, table tfoot tr th {
        font-size: 13px;
        /* color: #61cfee; */
    }

    table tbody tr td {
        font-size: 14px;
    }
</style>
    <div class="container-fluid mb-3">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>YEAR</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected>2023</option>
                                <option value="" selected>2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>BOU</label>
                            <select name="" id="" class="form-control" disabled>
                                <option value="" selected>DEV OPS</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>PERIOD</label>
                            <select name="" id="" class="form-control">
                                <option value="">Q1</option>
                                <option value="">Q2</option>
                                <option value="">Q3</option>
                                <option value="" selected>Q4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>EMPLOYEE</label>
                            <select name="" id="" class="form-control" disabled>
                                <option value="" selected>Sabado, Jennifer</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Key Performance Indicators</th>
                                <th>Weight (%)</th>
                                <th>Target Milestone</th>
                                <th>Binary</th>
                                <th>Target Date Completion</th>
                                <th>Actual MS Achieved</th>
                                <th>Actual Date Completion</th>
                                <th>Self-Score</th>
                                <th>Manager Score</th>
                                <th>Manager Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="11" class="text-center">No KPI Found</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Total</th>
                                <th>0%</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>0%</th>
                                <th>0%</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
