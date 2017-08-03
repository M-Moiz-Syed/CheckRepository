{{--@extends("layout")--}}

@section('header')
@endsection

@section('footer')
@endsection

@section("content")
    <div class="lightbox" style="display:block;">
        <div class="lb-wrap">
            <a href="{{ URL::route('Splash') }}" class="close">x</a>
            <div class="lb-content">
                <form action="http://www.tourplanner.pk/Account/Logon" method="post">
                    <h1>Log in</h1>
                    <div class="f-item">
                        <label for="email">E-mail address</label>
                        <input type="Email" id="Email" name="Email" required="required">
                    </div>
                    <div class="f-item">
                        <label for="password">Password</label>
                        <input type="Password" id="Password" name="Password" required="required">
                    </div>
                    <div class="f-item checkbox">
                        <div class="checker" id="uniform-remember_me"><span><input type="checkbox" id="remember_me" name="checkbox" style="opacity: 0;"></span></div>
                        <label for="remember_me">Remember me next time</label>
                    </div>
                    <p>
                        <a  href="{{ URL::route('ForgotPassword') }}" title="Forgot password?">Forgot password?</a><br>
                        Dont have an account yet? <a href="{{ URL::route('Register') }}" title="Sign up">Sign up.</a>
                    </p>
                    <input type="submit" id="login" name="login" value="login" class="gradient-button">
                </form>
            </div>
        </div>
    </div>

@stop