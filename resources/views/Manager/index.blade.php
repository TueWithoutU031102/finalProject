<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index Manager page</title>
</head>

<body>
    manager page
    <div class="container">
        <br>
        <h1 class="display-4" style="text-align: center; font-weight: bold">Manage Account</h1><br>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert"><strong>{{ Session::get('success') }}</strong></div>
        @endif
        <div class="create-btn">
            <a type="button" href="" class="btn btn-primary" style="font-weight: bold; font-size: 20px;">+</a>
        </div>
        <br><br>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($users as $user)
                    <tr>
                        <td>
                            <ul class="img">
                                <li>
                                    <img src="{{ asset($user->image) }}">
                                </li>
                            </ul>
                        </td>
                        <td>{{ $books->name }}</td>
                        <td>{{ $books->email }}</td>
                        <td>{{ $books->}}</td>

                        <td>
                            <a href="/admin/showAcc/{{ $user->id }}" title="View Profile"
                                class="btn btn-info btn-sm"><i aria-hidden="true"><i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/admin/editAcc/{{ $user->id }}" title="Edit Account"
                                class="btn btn-primary btn-sm"><i aria-hidden="true"><i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="/admin/deleteAcc/{{ $user->id }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure to delete {{ $user->name }} !!!???')">
                                @csrf
                                <button class="btn btn-danger btn-sm"><i aria-hidden="true"><i
                                            class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>

    </div>
</body>

</html>
