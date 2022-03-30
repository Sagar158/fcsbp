<!doctype html>
<html lang="en">

   <head>
      <meta charset="utf-8" />
      <title>{{trans('general.fcsbp')}} : Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <!-- Bootstrap Css -->
      <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <div class="account-pages my-5 pt-sm-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-8 col-lg-6 col-xl-5">
                  <div class="card overflow-hidden">
                     <div class="bg-primary bg-soft">
                        <div class="row">
                           <div class="col-7">
                              <div class="text-primary p-4">
                                 <h5 class="text-primary">Welcome Back !</h5>
                                 <p>Sign in to continue to {{trans('general.fcsbp')}}.</p>
                              </div>
                           </div>
                           <div class="col-5 align-self-end">
                              <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                           </div>
                        </div>
                     </div>
                     <div class="card-body pt-0">
                        <div class="auth-logo">
                           <a href="{{route('login')}}" class="auth-logo-light">
                              <div class="avatar-md profile-user-wid mb-4">
                                 <span class="avatar-title rounded-circle bg-light">
                                 <img src="{{asset('assets/images/logo-light.svg')}}" alt="" class="rounded-circle" height="34">
                                 </span>
                              </div>
                           </a>
                           <a href="{{route('login')}}" class="auth-logo-dark">
                              <div class="avatar-md profile-user-wid mb-4">
                                 <span class="avatar-title rounded-circle bg-light">
                                 <img src="{{asset('assets/images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                 </span>
                              </div>
                           </a>
                        </div>
                        <div class="p-2">
                             <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                 @csrf
                              <div class="mb-3">
                                 <label for="email" class="form-label">{{trans('general.email')}}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="mb-3">
                                 <label class="form-label">Password</label>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                 <label class="form-check-label" for="remember">
                                     {{ __('Remember Me') }}
                                 </label>

                              </div>
                              <div class="mt-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <!-- end account-pages -->
      <!-- JAVASCRIPT -->
      <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
      <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
      <!-- App js -->
      <script src="{{asset('assets/js/app.js')}}"></script>
   </body>

</html>