<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>

    <h1>Pharmacy Management System</h1>

    <h2>Add Customer</h2>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <label>Customer Name:</label><br>
        <input type="text" name="customer_name" required>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" required>
        <br><br>

        <label>Address:</label><br>
        <textarea name="address"></textarea>
        <br><br>

        <button type="submit">Save Customer</button>
    </form>

    <br>

    <a href="{{ route('customers.index') }}">Back to Customers</a>

</body>
</html>
