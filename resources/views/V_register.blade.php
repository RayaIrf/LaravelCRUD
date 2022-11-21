<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Register | Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin" style="margin-top: 100px;">
                    <form action="/register" method="POST">
                        @csrf
                        <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                            <label for="floatingInput">Full Name</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="Username" value="{{ old('username') }}" required>
                            <label for="floatingInput">Username</label>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
                            <label for="floatingInput">Emial Adderss</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mt-1">
                            <input type="password" class="form-control @error('password') is-invalid @enderror " name="password" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
                    </form>
                    <small class="d-block mt-3">Already Registerd? <a href="/login">Login</a></small>
                </main>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
</html>