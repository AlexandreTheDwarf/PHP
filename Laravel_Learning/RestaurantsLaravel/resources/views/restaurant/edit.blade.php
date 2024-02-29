<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <nav>
        <a href="{{ route('restaurant.index') }}">Home</a>
        <a href="{{ route('restaurant.create') }}">Create</a>
    </nav>
<form method="POST" action="{{ route('restaurant.update', $restaurant->id) }}" class="mb-3">
@csrf
@method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $restaurant->name }}">
    </div>
    <div class="mb-3">
        <label for="adress" class="form-label">Address</label>
        <input type="text" name="adress" id="adress" class="form-control" value="{{ $restaurant->adress }}">
    </div>
    <div class="mb-3">
        <label for="zip_code" class="form-label">Zip Code</label>
        <input type="text" name="zip_code" id="zip_code" class="form-control" value="{{ $restaurant->zip_code }}">
    </div>
    <div class="mb-3">
        <label for="town" class="form-label">Town</label>
        <input type="text" name="town" id="town" class="form-control" value="{{ $restaurant->town }}">
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" name="country" id="country" class="form-control" value="{{ $restaurant->country }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="50" rows="20" class="form-control">{{ $restaurant->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="review" class="form-label">Review</label>
        <input type="number" name="review" id="review" min="0" max="5" class="form-control" value="{{ $restaurant->review }}">
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
</form>
</body>
</html>