<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .text-center {
            text-align: center;
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>
<h1>Teachers Details</h1>
<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Teacher ID</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    @forelse($teachers as $index => $teacher)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->phoneNumber}}</td>
            <td>{{$teacher->employee_id}}</td>
            <td>{{$teacher->department}}</td>
        </tr>

    @empty
        <tr>
            <td colspan="5" class="text-center">No Departments found</td>
        </tr>
    @endforelse
    </tbody>
</table>
</body>
</html>
