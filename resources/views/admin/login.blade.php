<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>Kadipiro Guyup Rukun</title>
    <link rel="icon" type="image/x-icon" href="/img/fav.ico">
</head>

<body>

    <div class="d-flex justify-content-center py-5 my-5">

        <div class="card mb-3 px-2 justify-content-center" style="width: 30rem; margin-top: 8em" >
            <div class="card-body">
                <h3 class="card-title text-center my-3 fw-bold">ADMIN DESA KADIPIRO</h3>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group py-2">
                        <div class="form-label-group">
                            <label class="form-label" for="username">Username </label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="username" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                placeholder="Enter your username" autofocus required>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <div class="form-label-group">
                            <label class="form-label" for="password">Passcode</label>
                        </div>
                        <div class="form-control-wrap">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Enter your passcode" required>
                        </div>
                    </div>
                    <div class="form-group py-3">
                        <button class="btn btn-primary " style="width: 100%" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
