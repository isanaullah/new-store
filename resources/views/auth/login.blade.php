@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">
            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url('{{ asset('assets/frontend/images/innerpage/breadcum-bg.png') }}');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">Login</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">Login</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Breadcrumb Style2-->

            <!--Start Login Page-->
            <section class="login-page pt-120 pb-120 wow fadeInUp animated">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <div class="login-register-form"
                                style="background-image: url('{{asset('assets/frontend/images/innerpage/login-bg.png')}}');">
                                <div class="top-title text-center ">
                                    <h2 class="font-josefin fw-700">Login</h2>
                                    <p class="font-roboto">Don't have an account yet? <a class="font-roboto"
                                            href="{{route('register')}}">Sign up for free</a></p>
                                </div>
                            <form method="POST" action="{{ route('login', ['locale' => app()->getLocale()]) }}" class="common-form">
    @csrf

    {{-- Email --}}
    <div class="form-group">
        <input type="email"
               name="email"
               value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="Your User Name Or Email Address"
               required autofocus>
        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    {{-- Password --}}
    <div class="form-group eye">
        <div class="icon icon-1"><i class="flaticon-hide"></i></div>
        <input type="password"
               id="password-field"
               name="password"
               class="form-control @error('password') is-invalid @enderror"
               placeholder="Password"
               required autocomplete="current-password">
        <div class="icon icon-2"><i class="flaticon-view"></i></div>
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    {{-- Remember Me + Forgot Password --}}
    <div class="checkk">
        <div class="form-check p-0 m-0">
            <input type="checkbox"
                   id="remember"
                   name="remember"
                   {{ old('remember') ? 'checked' : '' }}>
            <label class="p-0 font-roboto" for="remember">Remember Me</label>
        </div>
        <a href="{{ route('password.request', ['locale' => app()->getLocale()]) }}" class="forgot font-roboto">
            Forgot Password?
        </a>
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn--primary style2">Login</button>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Login Page-->
        </div>
        <!-- End Body Container -->
@include("sitepartials.footer")
