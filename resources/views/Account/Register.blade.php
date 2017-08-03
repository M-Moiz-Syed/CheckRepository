{{--@extends("layout")--}}

@section('header')
@endsection

@section('footer')
@endsection

@section("content")
    <div class="lightbox" style="display:block;">
        <div class="lb-wrap">
            <a href="{{ URL::route('Splash') }}"  class="close">x</a>
            <div class="lb-content">
                <form action="http://www.tourplanner.pk/Account/Signup" method="post">                <h1>Register</h1>
                    <div class="f-item">
                        <label for="f_name">First Name</label>
                        <input type="text" id="FirstName" name="FirstName" required="required">
                    </div>
                    <div class="f-item">
                        <label for="l_name">Last name</label>
                        <input type="text" id="LastName" name="LastName" required="required">
                    </div>
                    <div class="f-item">
                        <label for="email">E-mail address</label>
                        <input type="email" id="Email" name="Email" required="required">
                    </div>
                    <div class="f-item">
                        <label for="password">Password</label>
                        <input type="password" id="Password" name="Password" required="required">
                    </div>
                    <div class="f-item checkbox">
                        <div class="checker" id="uniform-newsletter"><span><input type="checkbox" id="newsletter" name="newsletter" style="opacity: 0;"></span></div>
                        <label for="newsletter">Tell me about inspiring travel news, and exclusive discounts!</label>
                    </div>
                    <p>By clicking "Create Account" you confirm that you accept the <a href="http://www.tourplanner.pk/Account/Signup#">Terms of Service</a> and <a href="http://www.tourplanner.pk/Account/Signup#">Privacy Policy</a>. </p>
                    <input type="submit" id="register" name="register" value="Create Account" class="gradient-button">
                </form>
            </div>
        </div>
    </div>
@stop