<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <nav>
        <a href="{{ route('restaurant.index') }}">Home</a>
        <a href="{{ route('restaurant.create') }}">Create</a>
    </nav>
<form action="/restaurant/create" method="POST" class="mb-3">
@csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">Address</label>
        <input type="text" name="adress" id="adress" class="form-control">
    </div>
    <div class="mb-3">
        <label for="zip_code" class="form-label">Zip Code</label>
        <input type="text" name="zip_code" id="zip_code" class="form-control">
    </div>
    <div class="mb-3">
        <label for="town" class="form-label">Town</label>
        <input type="text" name="town" id="town" class="form-control">
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" name="country" id="country" class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="50" rows="20" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="review" class="form-label">Review</label>
        <input type="number" name="review" id="review" min="0" max="5" class="form-control">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
</body>
</html>