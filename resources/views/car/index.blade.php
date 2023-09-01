<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-3">
        <h2>Car</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <div class="row mt-5">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('cars.f1') }}" role="button">Link F1</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a class="btn btn-danger" href="{{ route('cars.f2') }}" role="button">Link F2</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <a class="btn btn-warning" href="{{ route('cars.f3') }}" role="button">Link F3</a>
            </div>
        </div>

    </div>
</body>

</html>
