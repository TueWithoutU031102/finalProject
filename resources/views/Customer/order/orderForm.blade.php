<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menu</title>
</head>

<body>
    <h1>Menu</h1>
    <br><br>
    <table class="table table-hover">
        <tbody>
            @php
                $currentType = null;
            @endphp
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                </tr>
                @foreach ($type->menus as $menu)
                    <tr onclick="redirectTo('{{ url('') }}')">
                        <td style="width:20%">
                            <ul class="img">
                                <li>
                                    <img style="width: 600px;height: 400px" src="{{ asset($menu->image) }}">
                                </li>
                            </ul>
                        </td>
                        <td>
                            <h3>{{ $menu->name }}</h3>
                            <p>{{ $menu->price }}</p>
                            <p>{{ $menu->description }}</p>
                        </td>
                        <td>
                            <a href="{{ $menu->id }}" title="View Profile" class="btn btn-info btn-sm"><i
                                    aria-hidden="true"><i class="fa-solid fa-eye"></i></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
</body>

</html>
