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
                      <div class="card">
                        <div class="card-header"><b>{{ $searchResults->count() }} results found for "{{ request('query') }}"</b></div>

                        <div class="card-body">

                            @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                                <h2>{{ ucfirst($type) }}</h2>

                                @foreach($modelSearchResults as $searchResult)
                                    <ul>
                                        <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
                                    </ul>
                                @endforeach
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
