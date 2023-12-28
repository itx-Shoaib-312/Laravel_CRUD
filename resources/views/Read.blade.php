<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Read Data</title>
    <style>
        .table {
            padding: 10%;
            /* border: 1px solid; */
            border-color: black;
        }
    </style>
</head>

<body>
    <div class="table">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Country</th>
                    <th scope="col">Sybject</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            @foreach ($getData as $data)
                <tbody>
                    <tr>
                        <td>{{ $data->firstname }}</td>
                        <td>{{ $data->lastname }}</td>
                        <td>{{ $data->country }}</td>
                        <td>{{ $data->subject }}</td>
                        <td>
                            <form action="{{ route('user.delete', ['id' => $data->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger">Delete</button>
                            </form>
                            <form action="{{ route('user.edit', ['id' => $data->id]) }}" method="get">
                                @csrf
                                @method('GET')
                                <button type="submit"  class="btn btn-success">Update</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>
