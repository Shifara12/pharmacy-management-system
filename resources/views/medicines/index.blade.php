<!DOCTYPE html>
<html>
<head>
    <title>Medicine List</title>
</head>

<body>

    <h1>Pharmacy Management System</h1>

    <h2>Medicine List</h2>

    <a href="{{ route('medicines.create') }}">Add Medicine</a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <th>Category</th>
            <th>Supplier</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Expiry Date</th>
        </tr>

        @foreach($medicines as $medicine)
        <tr>
            <td>{{ $medicine->id }}</td>
            <td>{{ $medicine->medicine_name }}</td>
            <td>{{ $medicine->category }}</td>
            <td>{{ $medicine->supplier }}</td>
            <td>{{ $medicine->price }}</td>
            <td>{{ $medicine->quantity }}</td>
            <td>{{ $medicine->expiry_date }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>
