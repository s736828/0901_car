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
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <a href="{{ route('foods.h1') }}">
                    <img src="{{ asset('images/01.jpg') }}" alt="" class="w-150">
                </a>
            </div>

            <div class="col-6">
                <a href="{{ route('foods.h2') }}">
                    <img src="{{ asset('images/02.jpg') }}" alt="" class="w-150">
                </a>
            </div>

            <div class="col-6">
                <a href="{{ route('foods.h3') }}">
                    <img src="{{ asset('images/03.jpg') }}" alt="" class="w-150">
                </a>
            </div>

            <div class="col-6">
                <a href="{{ route('foods.h4') }}">
                    <img src="{{ asset('images/04.jpg') }}" alt="" class="w-150">
                </a>
            </div>

        </div>
    </div>

</body>

</html>
