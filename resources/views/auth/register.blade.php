@include("sitepartials.header")
        <!-- Body Container -->
        <div class="page-content overflow-hidden">

            <!--Start Breadcrumb Style2-->
            <section class="breadcrumb-area" style="background-image: url('{{asset('assets/frontend/images/innerpage/breadcum-bg.png')}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-content margintop--5 text-center wow fadeInUp animated">
                                <h2 class="fw-700">Register</h2>
                                <div class="breadcrumb-menu">
                                    <ul>
                                        <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                                        <li> <i class="flaticon-next"></i> </li>
                                        <li class="active">Register</li>
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
                                    <h2 class="font-josefin fw-700">Register</h2>
                                    <p class="font-roboto">Already have an account?<a class="font-roboto"
                                            href="{{route('login'}}">Log in</a></p>
                                </div>
                          <form method="POST" action="{{ route('register') }}" class="common-form">
    @csrf

    {{-- Name --}}
    <div class="form-group">
        <input type="text"
               name="name"
               value="{{ old('name') }}"
               class="form-control @error('name') is-invalid @enderror"
               placeholder="Your Name"
               required
               autofocus
               autocomplete="name">
        @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    {{-- Email --}}
    <div class="form-group">
        <input type="email"
               name="email"
               value="{{ old('email') }}"
               class="form-control @error('email') is-invalid @enderror"
               placeholder="Your Email"
               required
               autocomplete="username">
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
               required
               autocomplete="new-password">
        <div class="icon icon-2"><i class="flaticon-view"></i></div>
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    {{-- Confirm Password --}}
    <div class="form-group eye">
        <div class="icon icon-1"><i class="flaticon-hide"></i></div>
        <input type="password"
               name="password_confirmation"
               class="form-control"
               placeholder="Confirm Password"
               required
               autocomplete="new-password">
        <div class="icon icon-2"><i class="flaticon-view"></i></div>
    </div>

    {{-- Terms & Policy --}}
    <div class="checkk">
        <div class="form-check p-0 m-0">
            <input type="checkbox" id="terms" required>
            <label class="p-0 font-roboto" for="terms">
                Accept the Terms and Privacy Policy
            </label>
        </div>
    </div>

    {{-- Submit --}}
    <button type="submit" class="btn--primary style2">Register</button>
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
