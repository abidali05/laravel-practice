<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Session Data</title>
  </head>
  <body>
                <a href="get-data">
                    <button
                        class="btn btn-info" type="submit" style="margin-left: 130px; margin-top: 80px;">{{ __('Get Data') }}</button>
                </a>
    <form action="{{ url('store-data') }}" method="post">
      @csrf
      <h1 style="text-align: center; color: blue;">Store data in Session</h1>
      <div class="container my-5">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Your Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Gmail</label>
    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Your Email">
  </div>
  <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                
  </div>
</form>
              

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>