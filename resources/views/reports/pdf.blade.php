<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <style>
        body{
            font-family: DejaVu Sans, sans-serif;
            font-size:12px;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table,th,td{
            border:1px solid black;
        }

        th,td{
            padding:8px;
        }

        th{
            background:#eeeeee;
        }
    </style>
</head>

<body>
<h2>Application Report</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Developer</th>
            <th>Version</th>
            <th>Description</th>
        </tr>
    </thead>

    <tbody>
    @foreach($applications as $app)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->developer }}</td>
            <td>{{ $app->version }}</td>
            <td>{{ $app->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<p style="margin-top:25px;">
Generated :
{{ now()->format('d F Y') }}
</p>

</body>
</html>