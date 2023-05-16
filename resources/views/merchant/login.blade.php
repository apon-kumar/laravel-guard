<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Merchant Login</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="fw-bold text-secondary">Login</h2>
                    </div>
                    <div class="card-body">
                        <div id="login_alert">
    
                        </div>
                        <form action="{{ route('merchant.login') }}" id="login_form" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="email" id="email" name="email" class="form-control rounded-0" placeholder="E-mail">
                                @error('email')
                                    <font color= 'red'>{{ $message }}</font>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <input type="password" id="password" name="password" class="form-control rounded-0" placeholder="Password">
                                @error('password')
                                    <font color= 'red'>{{ $message }}</font>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <a href="/forgot-pass" class="text-decoration-none">Forgot Password?</a>
                            </div>
    
                            <div class="mb-3 d-grid">
                                <input type="submit" value="Login" id="login_btn" class="btn btn-dark rounded-0">
                            </div>
    
                            <div class="text-center text-secondary">
                                <div>Don't have an account? <a href="/register" class="text-decoration-none">Register</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>