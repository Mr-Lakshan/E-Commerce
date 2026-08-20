<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

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
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mother's Name</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Email</th>
                <th scope="col">DOB</th>
                <th scope="col">Address</th>
                <th scope="col">State</th>
                <th scope="col">City</th>
                <th scope="col">Pincode</th>
                <th scope="col">Gender</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->mothername }}</td>
                    <td>{{ $user->fathername }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->state }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->pincode }}</td>
                    <td>{{ $user->gender }}</td>

                    <td>
                        {{-- Edit --}}
                        <a href="{{ url('/users/' . $user->id . '/edit') }}" class="btn btn-primary btn-sm">
                            Edit
                        </a>

                        {{-- Delete --}}
                        <form action="{{ url('/users/' . $user->id) }}" method="POST" style="display: inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this user?')">
                                Delete
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
