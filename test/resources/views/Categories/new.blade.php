<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container fs-2">
        <h2>New Category</h2>
       <div class="row">
           <div class="col-sm-4">
               <form method = "POST" action="{{ route('store') }}">
                   @csrf
                   <label>Title</label>
                   <input type="text" name="title" class="form-control" />
                   <button class="btn btn-info mt-6" type="submit">Create</button>
               </form>
           </div>
       </div>
    </div>

</body>

</html>
