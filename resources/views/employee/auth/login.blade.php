@extends('template.auth-page')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html" class="text-primary font-weight-bold">ZNERGEE</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form id="login_form">
                    {{-- @csrf --}}
                    <div id="alert_cont"></div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control login_field" placeholder="Email" name="email" id="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger error_text" id="email_error" style="font-size: 13px;"></span>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control login_field" placeholder="Password" name="password"
                                id="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger error_text" id="password_error" style="font-size: 13px;"></span>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" id="login_btn">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#login_form').on('submit', function(e) {
                e.preventDefault();

                let form = new FormData(this);
                form.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    type: "POST",
                    url: "{{ url('auth/login-submit') }}",
                    data: form,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    cache: false,
                    beforeSend: function() {
                        $('.error_text').text('');
                        $('#alert_cont').empty();
                        $('#login_btn').attr('disabled', true);
                    },
                    complete: function() {
                        $('#login_btn').attr('disabled', false);
                    },
                    success: function(response) {
                        console.log(response);
                        if(response.status == 'success') {
                            window.location.href = '{{ url('/') }}';
                        } else if(response.status == 'error') {
                            $.each(response.message, function(field, error) {
                                $(`#${field}_error`).text(`${error}`);
                            });
                        } else if(response.status == 'error_alert') {
                            $('#alert_cont').append(`<div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <span style="font-size: 14px;">${response.message}</span>
                            </div>`);
                        }
                    }
                });
            })
        })
    </script>
@endsection
