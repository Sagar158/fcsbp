<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>{{$title}}</title>
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <div id="layout-wrapper">

            
            @include('layouts.header')

            @include('layouts.sidebar')

            
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">{{$title}}</h4>
                                </div>

                                <form action="{{route('endusers.update',['userId' => $enduser->id])}}" method="POST">
                                    {{@csrf_field()}}
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="card overflow-auto">
                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                                                        <label>{{trans('general.name')}}</label>
                                                        <input type="text" name="name" class="form-control name @error('name') is-invalid @enderror" autocomplete="off" placeholder="{{trans('general.enter_name')}}" value="{{$enduser->name}}">
                                                        @error('name')
                                                            <div class="text-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                                                        <label>{{trans('general.email')}}</label>
                                                        <input type="text" name="email" class="form-control email @error('email') is-invalid @enderror" autocomplete="off" placeholder="{{trans('general.enter_email')}}" value="{{$enduser->email}}">
                                                        @error('email')
                                                            <div class="text-danger mt-1">{{ $message }}</div>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                    <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                                                        <label>{{trans('general.mobile')}}</label>
                                                        <input type="text" name="mobile" class="form-control mobile @error('mobile') is-invalid @enderror" autocomplete="off" placeholder="{{trans('general.enter_mobile')}}" value="{{$enduser->mobile}}">                                                    
                                                        @error('mobile')
                                                            <div class="text-danger mt-1">{{ $message }}</div>
                                                        @enderror

                                                    </div>

                                                    <div class="col-lg-12 col-sm-12 col-md-12 mt-2">
                                                        <button type="submit" class="btn btn-primary">{{trans('general.submit')}}</button>
                                                        <a href="{{ URL::previous() }}" class="btn btn-light" title="{{trans('general.back')}}">{{trans('general.back')}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div> 
                </div>

                
                @include('layouts.footer')
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>


    </body>

</html>
