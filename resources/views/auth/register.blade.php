@extends('layouts.master')
@section('content')
<section class="page_breadcrumbs ds parallax section_padding_45 column_margin_0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Registration</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">
                            Homepage
                        </a>
                    </li>
                    <li>
                        <a href="#">Shop</a>
                    </li>
                    <li class="active">Registration</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ls ms section_padding_top_100 section_padding_bottom_100">
    <div class="container">

        <div class="row">
            @if(count($errors->all()) > 0)
                <div class="alert alert-danger" role="alert">
                    <p><b>Required Fields Missing!</b></p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}" class="shop-register" >
                @csrf
                <div class="col-sm-6">
                    <div class="form-group validate-required" id="billing_first_name_field">
                        <label for="billing_first_name" class="control-label">
                            <span class="grey">First Name </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="first_name" id="billing_first_name" placeholder="" value="" required >
                    </div>

                    <div class="form-group" id="billing_company_field">
                        <label for="billing_company" class="control-label">
                            <span class="grey">Company Name</span>
                        </label>

                        <input type="text" class="form-control " name="company_name" id="billing_company" placeholder="" value="" required>

                    </div>


                </div>

                <div class="col-sm-6">
                    <div class="form-group validate-required" id="billing_last_name_field">
                        <label for="billing_last_name" class="control-label">
                            <span class="grey">Last Name </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="last_name" id="billing_last_name" placeholder="" value="" required>

                    </div>

                    <div class="form-group validate-required validate-email" id="billing_email_field">
                        <label for="billing_email" class="control-label">
                            <span class="grey">Email Address </span>
                            <span class="required">*</span>
                        </label>

                        <input type="email" class="form-control " name="email" id="billing_email" placeholder="email" value="" required>


                    </div>

                </div>

                <div class="col-sm-12">
                    <div class="form-group address-field validate-required" id="billing_address_fields">
                        <label for="billing_address_1" class="control-label">
                            <span class="grey">Address </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="address" id="billing_address_1" placeholder="Street address" value="" required>

                    </div>

                </div>

                <div class="col-sm-6">

                    <div class="form-group address-field validate-required" id="billing_city_field">
                        <label for="billing_city" class="control-label">
                            <span class="grey">Town / City </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="city" id="billing_city" placeholder="Town / City" value="" required>

                    </div>

                    <div class="form-group address-field validate-required validate-postcode" id="billing_postcode_field">
                        <label for="billing_postcode" class="control-label">
                            <span class="grey">Postcode </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="postcode" id="billing_postcode" placeholder="Postcode / Zip" value="" required>

                    </div>

                    <div class="form-group validate-required validate-phone" id="billing_phone_field">
                        <label for="billing_phone" class="control-label">
                            <span class="grey">Phone </span>
                            <span class="required">*</span>
                        </label>

                        <input type="number" class="form-control " name="phone" id="billing_phone" placeholder="" value="" required>

                    </div>


                    <div class="form-group" id="billing_password_field">
                        <label for="billing_password" class="control-label">
                            <span class="grey">Password</span>
                            <span class="required">*</span>
                        </label>

                        <input type="password" class="form-control " name="password" id="billing_password1"   required>

                    </div>


                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="billing_state" class="control-label">
                            <span class="grey">State/Province </span>
                            <span class="required">*</span>
                        </label>

                        <select class="form-control" name="state" id="billing_state">
                            <option value="">Select a country…</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB" selected="selected">United Kingdom (UK)</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="billing_country" class="control-label">
                            <span class="grey">Country </span>
                            <span class="required">*</span>
                        </label>

                        <select class="form-control" name="country" id="billing_country" required>
                            <option value="">Select a country…</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AL">Albania</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB" selected="selected">United Kingdom (UK)</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="form-group validate-required validate-fax" id="billing_fax_field">
                        <label for="billing_fax" class="control-label">
                            <span class="grey">Fax </span>
                            <span class="required">*</span>
                        </label>

                        <input type="text" class="form-control " name="fax" id="billing_fax" placeholder="" value="" required>

                    </div>


                    <div class="form-group" id="billing_password2_field">
                        <label for="billing_password2" class="control-label">
                            <span class="grey">Confirm Password</span>
                            <span class="required">*</span>
                        </label>

                        <input type="password" class="form-control " name="password_confirmation" id="billing_password2" placeholder=""  required>

                    </div>


                </div>

                <div class="col-sm-12">

                    <button type="submit"  class="theme_button wide_button color1">Register Now</button>
                    <button type="reset" class="theme_button wide_button">Clear Form</button>

                </div>

            </form>


        </div>
    </div>
</section>
    {{--<script>--}}
        {{--var password = document.getElementById("billing_password1");--}}
        {{--var confirm_password = document.getElementById("billing_password2");--}}

        {{--function validatePassword(){--}}
            {{--if(password.value != confirm_password.value) {--}}
                {{--confirm_password.setCustomValidity("Passwords Don't Match");--}}
            {{--} else {--}}
                {{--confirm_password.setCustomValidity('');--}}
            {{--}--}}
        {{--}--}}

        {{--password.onchange = validatePassword;--}}
        {{--confirm_password.onkeyup = validatePassword;--}}
    {{--</script>--}}
@endsection