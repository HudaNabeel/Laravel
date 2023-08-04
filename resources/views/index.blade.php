<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>




</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/students/create" class="nav-link text-light">Student List</a>
                </li>

            </ul>
        </div>

    </nav>

    <div class="content btn" style="float:right;">
        <a href="/students/create" class="btn btn-success mt-2">Add Student</a>

    </div>


    <div class="container">
        <div class="row">
            <div class="col mt-5 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>@foreach ($students as $student ) <tr>
                            <td>

                                {{ $student->id }}

                            </td>
                            <td>
                                {{ $student->first_name .' ' .$student->last_name}}

                            </td>
                            <td>
                                {{ $student->branch }}


                            </td>
                            <td>
                                {{ $student->mobile}}

                            </td>
                            <td>
                                {{$student->email}}

                            </td>
                            <td>
                                <a href="students/{{ $student->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            </td>
                            <td>
                                <a href="students/{{ $student->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</html>