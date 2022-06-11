<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="/update/{{$info[0]->item_id}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <lable>Candy Name:</lable>
        <input type="text" name="candyName" value="{{$info[0]->candy_name}}" required>
        <lable>Candy Price:</lable>
        <input type="text" name="candyPrice" value="{{$info[0]->candy_price}}" required>
        <!-- <lable>Candy Quantity:</lable>
        <input type="text" name="candyQuan" required> -->
        <lable>Candy Image:</lable>
        <input type="file" name="candyImage">

        <input type="submit" name="addItem" value="Update">

    </form>
</body>
</html>