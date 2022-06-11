<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
</head>
<body>
    <form action="/added" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <label>Candy Name:</label>
        <input type="text" name="candyName" required>
        <label>Candy Price:</label>
        <input type="text" name="candyPrice" required>
        <!-- <label>Candy Quantity:</label>
        <input type="text" name="candyQuan" required> -->
        <label>Candy Image:</label>
        <input type="file" name="candyImage" required>

        <input type="submit" name="addItem" value="Add">

    </form>
</body>
</html>