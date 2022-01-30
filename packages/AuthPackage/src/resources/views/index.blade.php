@extends('authPackage::layout.master')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <h3 class="text-center">Registration Form</h3>
                    <form action="{{ route('auth_register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group mt-2">
                                    <label for="firstName">First Name</label>
                                    <input type="text" id="firstName" class="form-control" name="firstName" placeholder="Enter First Name" />
                                </div>

                                <div class="form-group mt-2">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" />
                                </div>

                                <div class="form-group mt-2">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="">-- Choose Option --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" />
                                </div>

                                <div class="form-group mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" />
                                </div>

                                <div class="form-group mt-3 d-grid gap-2">
                                    <input type="submit" value="Register" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

