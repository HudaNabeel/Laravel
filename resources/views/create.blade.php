<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/index" class="nav-link text-light">Student Registration</a>
                </li>

            </ul>
        </div>

    </nav>

    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif






    </div>

    <div class="form-container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card mt-2 p-2">
                    <div class="mr-3">
                        <form method="POST" action="/students/store" class="was-validated">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="fname" class="form-label">Firstname:</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter your firstname" name="fname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="lname" class="form-label">Lastname:</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter your lastname" name="lname" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile:</label>
                                <input type="number" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="branch" class="form-label">Branch:</label>
                                <input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3">
                                <label>Do you need hostel facility:</label>
                                <label class="wrapper">
                                    <input type="radio" name="hostel_facility" required>
                                    Yes
                                </label>
                                <label class="wrapper">
                                    <input type="radio" name="hostel_facility" required>
                                    No
                                </label>
                            </div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                        <label class="form-check-label" for="myCheck">I agree it.</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </div>
                    <div class="submit" style="float: right;">

                        <button type="submit" class="btn btn-primary " style="display:flex;">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        </form>

    </div>
</body>