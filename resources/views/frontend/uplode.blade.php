<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="{{url('/uplode')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file" id="">
            </div>
            <div class="file-group">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
  </body>
</html>