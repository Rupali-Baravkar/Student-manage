@extends('app')
@section('style')

@endsection
@section('content')
<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
</style>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Student</h3>
                        <form action="{{ route('students.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="firstName" name="first_name" value="{{ old('first_name')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="firstName">First Name</label>
                                        @error('first_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="lastName" name="last_name" value="{{old('last_name')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="lastName">Last Name</label>
                                        @error('last_name')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 d-flex align-items-center">

                                    <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <input type="text" class="form-control form-control-lg" name="dob" value="{{old('dob')}}" id="birthdayDate" />
                                        <label for="birthdayDate" class="form-label">Birthday</label>
                                        @error('dob')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <h6 class="mb-2 pb-1">Gender: </h6>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                            value="female" />
                                        <label class="form-check-label" for="femaleGender">Female</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                            value="male" />
                                        <label class="form-check-label" for="maleGender">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                            value="other" />
                                        <label class="form-check-label" for="otherGender">Other</label>
                                    </div>
                                    @error('gender')
                                    <div>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" id="emailAddress" name="email" value="{{old('email')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="emailAddress">Email</label>
                                        @error('email')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4 pb-2">

                                    <div data-mdb-input-init class="form-outline">
                                        <input type="tel" id="phoneNumber" name="phone" value="{{old('phone')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="phoneNumber">Phone Number</label>
                                        @error('phone')
                                        <div>
                                            <span class="text-danger">{{$message}}</span>
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">

                                    <select class="select form-control-sm" name="choose_subject">
                                        <option value="" disabled {{ old('choose_subject') == '' ? 'selected' : '' }}>Choose option</option>
                                        <option value="1" {{ old('choose_subject') == '1' ? 'selected' : '' }}>Subject 1</option>
                                        <option value="2" {{ old('choose_subject') == '2' ? 'selected' : '' }}>Subject 2</option>
                                        <option value="3" {{ old('choose_subject') == '3' ? 'selected' : '' }}>Subject 3</option>
                                        <option value="4" {{ old('choose_subject') == '4' ? 'selected' : '' }}>Subject 4</option>
                                    </select>
                                    <label class="form-label select-label">Choose option</label>
                                    @error('choose_subject')
                                    <div>
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4 pt-2">
                                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                <a href="{{route('students.index')}}"><button type="button" class="btn btn-secondary btn-lg">Cancel</button></a>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection