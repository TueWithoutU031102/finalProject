<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="">
        <div class="input-box">
            <label for="name" class="form-label">Your name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="input-box">
            <label for="phonenumber" class="form-label">Phonenumber:</label>
            <input type="text" class="form-control" id="phonenumber" name="phonenumber">
        </div>
        <div class="input-box">
            <label for="numberofPeople" class="form-label">Number of people:</label>
            <input type="text" class="form-control" id="numberofPeople" name="numberofPeople">
        </div>
        <div class="input-box">
            <label for="arrivalTime" class="form-label">Arrival time:</label>
            <input type="datetime-local" class="form-control" value="{{ old('arrivalTime') }}" id="arrivalTime"
                name="arrivalTime">
        </div>
        <div class="button-action">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
