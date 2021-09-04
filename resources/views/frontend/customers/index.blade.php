@extends('frontend.master')
@section('main_content')

          <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">CREATE AN ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box box-shadow">
                                        <h1 class="gl-h1">PERSONAL INFORMATION</h1>
                                        <form class="l-f-o__form" action="{{ route('customer.store') }}" method="POST">
                                           @csrf
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                                <input class="input-text " type="text" id="reg-fname" placeholder="First Name" name="first_name">
                                                @if($errors->has('first_name'))
                                                  <span class="text-danger">{{$errors->first('first_name')}}</span>
                                                @endif
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Last Name" name="last_name">
                                                 @if($errors->has('last_name'))
                                                  <span class="text-danger">{{$errors->first('last_name')}}</span>
                                                @endif
                                            </div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <!--====== Date of Birth Select-Box ======-->
                                                    <span class="gl-label">BIRTHDAY</span>
                                                    <input type="date" name="dob" class="input-text input-text--primary-style">
                                                     @if($errors->has('dob'))
                                                  <span class="text-danger">{{$errors->first('dob')}}</span>
                                                @endif
                                                    
                                                    <!--====== End - Date of Birth Select-Box ======-->
                                                </div>
                                                <div class="u-s-m-b-30">

                                                    <label class="gl-label" for="gender">GENDER</label>
                                                    <select class="select-box select-box--primary-style u-w-100" id="gender" name="gender">
                                                        <option value="">Select</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                     @if($errors->has('gender'))
                                                        <span class="text-danger">{{$errors->first('gender')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-email">E-MAIL *</label>

                                                <input class="input-text input-text--primary-style" name="email" type="text" id="reg-email" placeholder="Enter E-mail">
                                                 @if($errors->has('email'))
                                                  <span class="text-danger">{{$errors->first('email')}}</span>
                                                @endif
                                            </div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="reg-password">PASSWORD *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="reg-password" placeholder="Enter Password" name="password">
                                                 @if($errors->has('password'))
                                                  <span class="text-danger">{{$errors->first('password')}}</span>
                                                @endif
                                            </div>
                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">CREATE</button></div>

                                            <a class="gl-link" href="{{ route('home') }}">Return to Store</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
       
@endsection
  

