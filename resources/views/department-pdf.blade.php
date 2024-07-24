<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department Details</title>
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
<h1>Department Details</h1>
<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th>Name</th>
        <th>HOD</th>
        <th>Year Started</th>
        <th>Students</th>
    </tr>
    </thead>
    <tbody>
    @forelse($departments as $index => $department)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $department->name }}</td>
            <td>{{ $department->HOD }}</td>
            <td>{{ $department->year_started }}</td>
            <td>{{ $department->student_count }}</td>
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
