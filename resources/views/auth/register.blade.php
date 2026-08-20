<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Register</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">

                    <div class="card card-registration my-4">

                        <div class="row g-0">

                            {{-- Image --}}
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Registration" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>

                            {{-- Form --}}
                            <div class="col-xl-6">

                                <div class="card-body p-md-5 text-black">

                                    <h3 class="mb-5 text-uppercase">
                                        Student Registration Form
                                    </h3>

                                    {{-- Success Message --}}
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    {{-- Validation Errors --}}
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ url('/register') }}" method="POST">

                                        @csrf

                                        {{-- First & Last Name --}}
                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="first_name" name="first_name"
                                                        value="{{ old('first_name') }}"
                                                        class="form-control form-control-lg" required />

                                                    <label class="form-label" for="first_name">
                                                        First name
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="last_name" name="last_name"
                                                        value="{{ old('last_name') }}"
                                                        class="form-control form-control-lg" required />

                                                    <label class="form-label" for="last_name">
                                                        Last name
                                                    </label>
                                                </div>
                                            </div>

                                        </div>


                                        {{-- Mother & Father Name --}}
                                        <div class="row">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">

                                                    <input type="text" id="mothername" name="mothername"
                                                        value="{{ old('mothername') }}"
                                                        class="form-control form-control-lg" required />

                                                    <label class="form-label" for="mothername">
                                                        Mother's name
                                                    </label>

                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">

                                                    <input type="text" id="fathername" name="fathername"
                                                        value="{{ old('fathername') }}"
                                                        class="form-control form-control-lg" required />

                                                    <label class="form-label" for="fathername">
                                                        Father's name
                                                    </label>

                                                </div>
                                            </div>

                                        </div>


                                        {{-- Address --}}
                                        <div class="form-outline mb-4">

                                            <input type="text" id="address" name="address"
                                                value="{{ old('address') }}" class="form-control form-control-lg"
                                                required />

                                            <label class="form-label" for="address">
                                                Address
                                            </label>

                                        </div>


                                        {{-- Gender --}}
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">
                                                Gender:
                                            </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">

                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="femaleGender" value="female"
                                                    {{ old('gender') == 'female' ? 'checked' : '' }} required />

                                                <label class="form-check-label" for="femaleGender">
                                                    Female
                                                </label>

                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">

                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="maleGender" value="male"
                                                    {{ old('gender') == 'male' ? 'checked' : '' }} />

                                                <label class="form-check-label" for="maleGender">
                                                    Male
                                                </label>

                                            </div>

                                            <div class="form-check form-check-inline mb-0">

                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="otherGender" value="other"
                                                    {{ old('gender') == 'other' ? 'checked' : '' }} />

                                                <label class="form-check-label" for="otherGender">
                                                    Other
                                                </label>

                                            </div>

                                        </div>


                                        {{-- State & City --}}
                                        <div class="row">

                                            <div class="col-md-6 mb-4">

                                                <select name="state" id="state"
                                                    class="form-select form-select-lg" required>

                                                    <option value="">
                                                        Select State
                                                    </option>

                                                    <option value="chandigarh"
                                                        {{ old('state') == 'chandigarh' ? 'selected' : '' }}>
                                                        Chandigarh
                                                    </option>

                                                    <option value="telangana"
                                                        {{ old('state') == 'telangana' ? 'selected' : '' }}>
                                                        Telangana
                                                    </option>

                                                    <option value="karnataka"
                                                        {{ old('state') == 'karnataka' ? 'selected' : '' }}>
                                                        Karnataka
                                                    </option>

                                                </select>

                                            </div>


                                            <div class="col-md-6 mb-4">

                                                <select name="city" id="city"
                                                    class="form-select form-select-lg" required>

                                                    <option value="">
                                                        Select City
                                                    </option>

                                                    <option value="chandigarh"
                                                        {{ old('city') == 'chandigarh' ? 'selected' : '' }}>
                                                        Chandigarh
                                                    </option>

                                                    <option value="hyderabad"
                                                        {{ old('city') == 'hyderabad' ? 'selected' : '' }}>
                                                        Hyderabad
                                                    </option>

                                                    <option value="bangalore"
                                                        {{ old('city') == 'bangalore' ? 'selected' : '' }}>
                                                        Bangalore
                                                    </option>

                                                </select>

                                            </div>

                                        </div>


                                        {{-- DOB --}}
                                        <div class="form-outline mb-4">

                                            <input type="date" id="dob" name="dob"
                                                value="{{ old('dob') }}" class="form-control form-control-lg"
                                                required />

                                            <label class="form-label" for="dob">
                                                Date of Birth
                                            </label>

                                        </div>


                                        {{-- Pincode --}}
                                        <div class="form-outline mb-4">

                                            <input type="number" id="pincode" name="pincode"
                                                value="{{ old('pincode') }}" class="form-control form-control-lg"
                                                required />

                                            <label class="form-label" for="pincode">
                                                Pincode
                                            </label>

                                        </div>


                                        {{-- Email --}}
                                        <div class="form-outline mb-4">

                                            <input type="email" id="email" name="email"
                                                value="{{ old('email') }}" class="form-control form-control-lg"
                                                required />

                                            <label class="form-label" for="email">
                                                Email ID
                                            </label>

                                        </div>

                                        {{-- Password --}}
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-lg" required />

                                            <label class="form-label" for="password">
                                                Password
                                            </label>
                                        </div>

                                        {{-- Confirm Password --}}
                                        <div class="form-outline mb-4">
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation" class="form-control form-control-lg"
                                                required />

                                            <label class="form-label" for="password_confirmation">
                                                Confirm Password
                                            </label>
                                        </div>
                                        {{-- Buttons --}}
                                        <div class="d-flex justify-content-end pt-3">

                                            <button type="reset" class="btn btn-light btn-lg">
                                                Reset all
                                            </button>

                                            <button type="submit" class="btn btn-warning btn-lg ms-2">
                                                Submit form
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
    </section>

</body>

</html>
