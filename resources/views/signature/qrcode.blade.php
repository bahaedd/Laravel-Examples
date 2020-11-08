<!DOCTYPE html>
<html>
<head>
    <title>How to Generate QR Code</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
</head>
<body>

<div class="visible-print text-center">
    <h1>QR Code Generator Example</h1>

    {!! QrCode::size(250)->generate('larocco.ma'); !!}


</div>

</body>
</html>
