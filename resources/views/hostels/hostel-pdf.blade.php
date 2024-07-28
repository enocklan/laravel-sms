<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hostel Details</title>
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
            overflow: hidden;
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
<h1>Hostel Information</h1>
<table>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th>Name</th>
        <th>Room Master</th>
        <th>Block</th>
        <th>Room Type</th>
        <th>Room Number</th>
        <th>Number of Beds</th>
        <th>Number of Bathrooms</th>
        <th>Availability</th>
    </tr>
    </thead>
    <tbody>
    @forelse($hostels as $index => $hostel)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{$hostel->name}}</td>
            <td>{{$hostel->room_master}}</td>
            <td>{{$hostel->block}}</td>
            <td>
                @if ($hostel->room_type == 'normal')
                    Normal
                @elseif ($hostel->room_type == 'ac')
                    AC
                @elseif ($hostel->room_type == 'suite')
                    Suite
                @else
                    Unknown
                @endif</td>
            <td>{{$hostel->room_number}}</td>
            <td>{{$hostel->number_of_bed}}</td>
            <td>{{$hostel->number_of_bath}}</td>
            <td>{{ $hostel->availability ? 'Available' : 'Not Available' }}</td>
{{--            <td></td>--}}
        </tr>
    @empty
        <tr>
            <td colspan="5" class="text-center">No Hostel found</td>
        </tr>
    @endforelse
    </tbody>
</table>
</body>
</html>
