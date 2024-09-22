<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    @if (session()->has('message'))
        <div id="alert-message" class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    {{-- @if ($message = Session::get('message'))
        <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p>{{ $message }}</p>
        </div>
    @endif --}}

    <h1 class="text-center">List of all Task</h1>
    <div class="d-flex justify-content-end mr-4">
        <a href="{{ route('newTask') }}" class="btn btn-primary my-4" onclick="return confirm('Are you sure you want to add a new task?');">Add New Task</a>

    </div>
    <div class="col-md-10 mx-auto mt-4">
            {{-- <ul>
                <li><a href="{{ route('single-task', $task->id) }}">{{ $task->title }}</a></li>
            </ul> --}}
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th> Task Title </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allTask as $task)
                    <tr>
                        <td><a href="{{ route('single-task', $task->id) }}">{{ $task->title }}</a></td>
                        <td>
                            <a href="{{ route('edit-task',$task->id) }}" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


</body>

</html>
