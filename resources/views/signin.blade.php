<?php $page = 'signin'; ?>
@extends('layout.mainlayout')
@section('content')
            <div class="account-content">
				<div class="login-wrapper bg-img">
                    <div class="login-content authent-content">
                        <form action="{{url('index')}}">
                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                   <img src="{{URL::asset('build/img/logo.svg')}}" alt="img">
                               </div>
                               <a href="{{url('index')}}" class="login-logo logo-white">
                                   <img src="{{URL::asset('build/img/logo-white.svg')}}"  alt="Img">
                               </a>
                               <div class="login-userheading">
                                   <h3>Sign In</h3>
                                   <h4 class="fs-16">Access the Dreamspos panel using your email and passcode.</h4>
                               </div>
                                <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger"> *</span></label>
                                    <div class="input-group">
                                        <input type="text" value="" class="form-control border-end-0">
                                        <span class="input-group-text border-start-0">
                                            <i class="ti ti-mail"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password <span class="text-danger"> *</span></label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input form-control">
                                        <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                                    </div>
                                </div>
                               <div class="form-login authentication-check">
                                   <div class="row">
                                       <div class="col-12 d-flex align-items-center justify-content-between">
                                           <div class="custom-control custom-checkbox">
                                               <label class="checkboxs ps-4 mb-0 pb-0 line-height-1 fs-16 text-gray-6">
                                                   <input type="checkbox" class="form-control">
                                                   <span class="checkmarks"></span>Remember me
                                               </label>
                                           </div>
                                           <div class="text-end">
                                               <a class="text-orange fs-16 fw-medium" href="{{url('forgot-password')}}">Forgot Password?</a>
                                           </div>
                                       </div>                                    
                                   </div>
                               </div>
                               <div class="form-login">
                                   <button type="submit" class="btn btn-primary w-100">Sign In</button>
                               </div>
                               <div class="signinform">
                                   <h4>New on our platform?<a href="{{url('register')}}" class="hover-a"> Create an account</a></h4>
                               </div>
                               <div class="form-setlogin or-text">
                                   <h4>OR</h4>
                               </div>
                               <div class="mt-2">
                                   <div class="d-flex align-items-center justify-content-center flex-wrap">
                                       <div class="text-center me-2 flex-fill">
                                           <a href="javascript:void(0);"
                                               class="br-10 p-2 btn btn-info d-flex align-items-center justify-content-center">
                                               <img class="img-fluid m-1" src="{{URL::asset('build/img/icons/facebook-logo.svg')}}" alt="Facebook">
                                           </a>
                                       </div>
                                       <div class="text-center me-2 flex-fill">
                                           <a href="javascript:void(0);"
                                               class="btn btn-white br-10 p-2  border d-flex align-items-center justify-content-center">
                                               <img class="img-fluid m-1" src="{{URL::asset('build/img/icons/google-logo.svg')}}" alt="Facebook">
                                           </a>
                                       </div>
                                       <div class="text-center flex-fill">
                                           <a href="javascript:void(0);"
                                               class="bg-dark br-10 p-2 btn btn-dark d-flex align-items-center justify-content-center">
                                               <img class="img-fluid m-1" src="{{URL::asset('build/img/icons/apple-logo.svg')}}" alt="Apple">
                                           </a>
                                       </div>
                                   </div>
                               </div>
                               <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright &copy; 2025 DreamsPOS</p>
                            </div>
                           </div>
                        </form>
                    </div>
                </div>
			</div>
@endsection
