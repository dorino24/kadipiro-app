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
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group mt-2">
                        <label class="form-label" for="name">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" name="name"
                                class="form-control  rounded-top @error('name') is-invalid @enderror"
                                id="name" placeholder="name" required value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group  mt-2">
                        <label class="form-label" for="username">Username</label>
                        <div class="form-control-wrap">
                            <input type="text" name="username"
                                class="form-control  rounded-top @error('username') is-invalid @enderror"
                                id="username" placeholder="username" required
                                value="{{ old('username') }}">
                        </div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2 ">
                        <label class="form-label" for="email">Email</label>
                        <div class="form-control-wrap">
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="name@example.com" required value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <label class="form-label" for="password">Passcode</label>
                        <div class="form-control-wrap">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" required>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <button class="btn btn-lg btn-primary btn-block">Register</button>
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
