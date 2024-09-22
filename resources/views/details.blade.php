<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
    <h1>Task Details</h1>
    <div>
        @isset($singleTask)
            <h2>{{ $singleTask->title }}</h2>
            <p>{{ $singleTask->short_description}}</p>
            <p>{{ $singleTask->long_description}}</p>
            <p>{{ $singleTask->created_at}}</p>
            <p>{{ $singleTask->updated_at}}</p>
            <p>{{ $singleTask->completed? 'Yes' : 'No' }}</p>
            <a href="{{ route('all-task') }}">Go Home</a>
        @endisset
    </div>
</body>
</html>
