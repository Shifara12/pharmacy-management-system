<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
</head>
<body>

    <h1>Pharmacy Management System</h1>
    <h2>Add Medicine</h2>

    <form action="{{ route('medicines.store') }}" method="POST">
        @csrf

        <label>Medicine Name:</label><br>
        <input type="text" name="medicine_name" required>
        <br><br>

        <label>Category:</label><br>
        <input type="text" name="category" required>
        <br><br>

        <label>Supplier:</label><br>
        <input type="text" name="supplier">
        <br><br>

        <label>Price:</label><br>
        <input type="number" name="price" step="0.01" required>
        <br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required>
        <br><br>

        <label>Expiry Date:</label><br>
        <input type="date" name="expiry_date" required>
        <br><br>

        <button type="submit">Save Medicine</button>
    </form>

    <br>

    <a href="{{ route('medicines.index') }}">Back to Medicines</a>

</body>
</html>
