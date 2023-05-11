<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/customer/store">
        @csrf
        <div class="input-box">
            <label for="bookName" class="form-label">Your name:</label>
            <input type="text" class="form-control" value="{{ old('bookName') }}" id="bookName" name="bookName">
        </div>
        <div class="input-box">
            <label for="phonenumber" class="form-label">Phonenumber:</label>
            <input type="text" class="form-control" value="{{ old('phonenumber') }}" id="phonenumber"
                name="phonenumber">
        </div>
        <div class="input-box">
            <label for="numberofPeople" class="form-label">Number of people:</label>
            <select class="form-select" value="{{ old('numberofPeople') }}" id="numberofPeople" name="numberofPeople">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="5">3-5</option>
                <option value="10">6-10</option>
                <option value="15">11-15</option>
                <option>More</option>
            </select>
        </div>
        <div class="input-box">
            <label for="arrivalTime" class="form-label">Arrival time:</label>
            <input type="datetime-local" class="form-control" value="{{ old('arrivalTime') }}" id="arrivalTime"
                name="arrivalTime">
        </div>
        <div class="input-box">
            <label for="note" class="form-label">Note:</label>
            <input type="text" class="form-control" value="{{ old('note') }}" id="note" name="note">
        </div>
        <div class="button-action">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>

</html>
