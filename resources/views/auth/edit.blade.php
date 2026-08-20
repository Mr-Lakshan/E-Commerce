```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit User</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

<section class="h-100 bg-dark">
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-xl-8">

                <div class="card my-4">

                    <div class="card-body p-md-5">

                        <h3 class="mb-5 text-uppercase">
                            Edit Student
                        </h3>

                        {{-- Validation Errors --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('/users/' . $user->id) }}" method="POST">

                            @csrf

                            @method('PUT')


                            {{-- First Name & Last Name --}}
                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label for="first_name">
                                        First Name
                                    </label>

                                    <input
                                        type="text"
                                        id="first_name"
                                        name="first_name"
                                        class="form-control form-control-lg"
                                        value="{{ old('first_name', explode(' ', $user->name)[0]) }}"
                                        required
                                    >

                                </div>


                                <div class="col-md-6 mb-4">

                                    <label for="last_name">
                                        Last Name
                                    </label>

                                    <input
                                        type="text"
                                        id="last_name"
                                        name="last_name"
                                        class="form-control form-control-lg"
                                        value="{{ old('last_name', implode(' ', array_slice(explode(' ', $user->name), 1))) }}"
                                        required
                                    >

                                </div>

                            </div>


                            {{-- Mother's Name & Father's Name --}}
                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label for="mothername">
                                        Mother's Name
                                    </label>

                                    <input
                                        type="text"
                                        id="mothername"
                                        name="mothername"
                                        class="form-control form-control-lg"
                                        value="{{ old('mothername', $user->mothername) }}"
                                        required
                                    >

                                </div>


                                <div class="col-md-6 mb-4">

                                    <label for="fathername">
                                        Father's Name
                                    </label>

                                    <input
                                        type="text"
                                        id="fathername"
                                        name="fathername"
                                        class="form-control form-control-lg"
                                        value="{{ old('fathername', $user->fathername) }}"
                                        required
                                    >

                                </div>

                            </div>


                            {{-- Email --}}
                            <div class="mb-4">

                                <label for="email">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="form-control form-control-lg"
                                    value="{{ old('email', $user->email) }}"
                                    required
                                >

                            </div>


                            {{-- Address --}}
                            <div class="mb-4">

                                <label for="address">
                                    Address
                                </label>

                                <textarea
                                    id="address"
                                    name="address"
                                    class="form-control form-control-lg"
                                    rows="3"
                                    required
                                >{{ old('address', $user->address) }}</textarea>

                            </div>


                            {{-- State & City --}}
                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label for="state">
                                        State
                                    </label>

                                    <select
                                        name="state"
                                        id="state"
                                        class="form-select form-select-lg"
                                        required
                                    >

                                        <option value="">
                                            Select State
                                        </option>

                                        <option
                                            value="chandigarh"
                                            {{ old('state', $user->state) == 'chandigarh' ? 'selected' : '' }}
                                        >
                                            Chandigarh
                                        </option>

                                        <option
                                            value="telangana"
                                            {{ old('state', $user->state) == 'telangana' ? 'selected' : '' }}
                                        >
                                            Telangana
                                        </option>

                                        <option
                                            value="karnataka"
                                            {{ old('state', $user->state) == 'karnataka' ? 'selected' : '' }}
                                        >
                                            Karnataka
                                        </option>

                                    </select>

                                </div>


                                <div class="col-md-6 mb-4">

                                    <label for="city">
                                        City
                                    </label>

                                    <select
                                        name="city"
                                        id="city"
                                        class="form-select form-select-lg"
                                        required
                                    >

                                        <option value="">
                                            Select City
                                        </option>

                                        <option
                                            value="chandigarh"
                                            {{ old('city', $user->city) == 'chandigarh' ? 'selected' : '' }}
                                        >
                                            Chandigarh
                                        </option>

                                        <option
                                            value="hyderabad"
                                            {{ old('city', $user->city) == 'hyderabad' ? 'selected' : '' }}
                                        >
                                            Hyderabad
                                        </option>

                                        <option
                                            value="bangalore"
                                            {{ old('city', $user->city) == 'bangalore' ? 'selected' : '' }}
                                        >
                                            Bangalore
                                        </option>

                                    </select>

                                </div>

                            </div>


                            {{-- DOB & Pincode --}}
                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label for="dob">
                                        Date of Birth
                                    </label>

                                    <input
                                        type="date"
                                        id="dob"
                                        name="dob"
                                        class="form-control form-control-lg"
                                        value="{{ old('dob', $user->dob) }}"
                                        required
                                    >

                                </div>


                                <div class="col-md-6 mb-4">

                                    <label for="pincode">
                                        Pincode
                                    </label>

                                    <input
                                        type="number"
                                        id="pincode"
                                        name="pincode"
                                        class="form-control form-control-lg"
                                        value="{{ old('pincode', $user->pincode) }}"
                                        required
                                    >

                                </div>

                            </div>


                            {{-- Gender --}}
                            <div class="mb-4">

                                <h6 class="mb-3">
                                    Gender:
                                </h6>

                                <div class="form-check form-check-inline">

                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="gender"
                                        id="female"
                                        value="female"
                                        {{ old('gender', $user->gender) == 'female' ? 'checked' : '' }}
                                        required
                                    >

                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>

                                </div>


                                <div class="form-check form-check-inline">

                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="gender"
                                        id="male"
                                        value="male"
                                        {{ old('gender', $user->gender) == 'male' ? 'checked' : '' }}
                                    >

                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>

                                </div>


                                <div class="form-check form-check-inline">

                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="gender"
                                        id="other"
                                        value="other"
                                        {{ old('gender', $user->gender) == 'other' ? 'checked' : '' }}
                                    >

                                    <label class="form-check-label" for="other">
                                        Other
                                    </label>

                                </div>

                            </div>


                            {{-- Buttons --}}
                            <div class="d-flex justify-content-end pt-3">

                                <a
                                    href="{{ url('/users') }}"
                                    class="btn btn-light btn-lg"
                                >
                                    Cancel
                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-warning btn-lg ms-2"
                                >
                                    Update User
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

</body>
</html>
```
