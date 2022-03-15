<div class="module module-login pull-left">
    <a class="btn-popup" data-toggle="modal" data-target="#signupModule">Login</a>


    <div class="modal register-login-modal fade" tabindex="-1" role="dialog" id="signupModule">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login"
                                    data-toggle="tab">login</a>
                            </li>
                            <li><a href="#signup" data-toggle="tab">signup</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="login">
                                <div class="signup-form-container text-center">
                                    {{-- <form class="mb-0" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <a href="#" class="btn btn--facebook btn--block"><i
                                                class="fa fa-facebook-square"></i>Login with
                                            Facebook</a>
                                        <div class="or-text">
                                            <span>or</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control"
                                                name="login-email" id="login-email"
                                                placeholder="Email Address">
                                        </div>
                                        <!-- .form-group end -->
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                name="login-password" id="login-password"
                                                placeholder="Password">
                                        </div>
                                        <!-- .form-group end -->
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                                <span>Remember Me</span>
                                                <input type="checkbox">
                                                <span class="check-indicator"></span>
                                            </label>
                                        </div>
                                        <input type="submit" class="btn btn--primary btn--block"
                                            value="Sign In">
                                        <a href="#" class="forget-password">Forget your
                                            password?</a>
                                    </form> --}}
                                   @include('includes.auth.login')
                                    <!-- form  end -->
                                </div>
                                <!-- .signup-form end -->
                            </div>
                            <div class="tab-pane" id="signup">
                                {{-- <form class="mb-0" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <a href="#" class="btn btn--facebook btn--block"><i
                                            class="fa fa-facebook-square"></i>Register with
                                        Facebook</a>
                                    <div class="or-text">
                                        <span>or</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            name="name" id="full-name"
                                            placeholder="Full Name" required>
                                    </div>

                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                            name="email" id="register-email"
                                            placeholder="Email Address" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            name="password" id="register-password"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            name="password" id="register-password"
                                            placeholder="Confirm Password" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="input-checkbox">
                                        <label class="label-checkbox">
                                            <span>I agree with all <a href="#">Terms &
                                                    Conditions</a></span>
                                            <input type="checkbox">
                                            <span class="check-indicator"></span>
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn--primary btn--block"
                                        value="Register">
                                </form> --}}
                               @include('includes.auth.register')

                                <!-- form  end -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
