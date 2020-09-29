<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Search Multiple Models using Spatie Searchable Package</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  <div class="card-header">Test</div>
                    <div class="card-body">
                        <form action="{{ route('search') }}" method="GET">
                            @csrf
                            <input type="text" name="query" class="form-control" />
                            <input type="submit" class="btn btn-sm btn-primary" value="Search" style="margin-top: 10px;" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
