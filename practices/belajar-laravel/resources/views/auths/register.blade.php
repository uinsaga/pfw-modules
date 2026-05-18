<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <a href="/" class="btn btn-link"><- Back To Home</a><br>
        <a href="/login" class="btn btn-link"><- Login Page</a>

        <h1 class="text-center mb-5">Register User</h1>
        <form action="{{ route("auth.register") }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ old("name") }}"
                            class="form-control @error("name") is-invalid @enderror" id="inputName"
                            aria-describedby="nameHelp">
                        @error("name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" value="{{ old("email") }}"
                            class="form-control @error("email") is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error("email")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control @error("password") is-invalid @enderror" id="inputPassword">
                        @error("password")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="inputpasswordConfirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error("password_confirmation") is-invalid @enderror"
                            id="inputpasswordConfirmation">
                        @error("password_confirmation")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>