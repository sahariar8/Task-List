<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="col-10 mx-auto">
    <h1 class="text-center text-red-500 text-3xl mt-4">Task Edit FORM</h1>

    <section class="p-5">
        <form method="POST" action="{{ route('taskUpdate',$task->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $task->title }}">
              @error('title')
                    <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Short Description</label>
              <textarea class="form-control" name="short_description" placeholder="Short Description -------" rows="2">{{ $task->short_description }}</textarea>
              @error('short_description')
                    <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Long Description</label>
              <textarea class="form-control" name="long_description" placeholder="Long Description -------" rows="5">{{ $task->long_description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
          </form>
    </section>
</body>
</html>
