<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="center">List of all Task</h1>
    @foreach ($allTask as $task )
        <div>
            <ul>
                <li><a href="{{ route('single-task',$task->id)}}">{{ $task->title }}</a></li>
            </ul>
        </div>
    @endforeach
</body>
</html>
