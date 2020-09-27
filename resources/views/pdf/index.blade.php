<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Generate PDF exemlpe</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

              @if(session()->has('message'))
                <p class="btn btn-success btn-block btn-sm custom_message text-left" style="margin-top: 10px;">{{ session()->get('message') }}</p>
              @endif

              <legend>Search date wise user</legend>

              <form action="{{ route('report') }}" method="get">

                <div class="col-md-3">
                  <div class="form-group">
                  <label for="">Start Date</label>
                  <input type="date" class="form-control" name="start_date">
                </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                  <label for="">End Date</label>
                  <input type="date" class="form-control" name="end_date">
                </div>
                </div>

                <div class="col-md-2" style="margin-top: 24px;">
                   <div class="form-group">
                     <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </div>
              </form>
            </div>
        </div>
    </div>

</body>
</html>
