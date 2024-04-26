<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <style>
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="container">
    <table id="myTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->email }}</td>
                    <td><a href="{{ $d->certificate_url }}" class="btn btn-primary" target="_blank">Show Certificate</a></td>
                    <td>
                        <a href="{{ route('data.delete', ['id' => $d->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="{{ asset('assets/js/jquery-3-6-0.min.js') }}"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
