
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <div class="container" style="margin-top: 50px; margin-left: 300px">
            <div class="row">
                <div class="col-lg-6">

                    <form action="">
                        <h4>Category</h4>
                        <select class="browser-default custom-select" name="category" id="category">
                            <option selected>Select category</option>
                            @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>

                        <h4>Subcategory</h4>
                        <select class="browser-default custom-select" name="subcategory" id="subcategory">

                        </select>
                    </form>

                </div>
            </div>
        </div>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function () {

                $('#category').on('change',function(e) {

                 var cat_id = e.target.value;

                 $.ajax({

                       url:"{{ route('subcat') }}",
                       type:"POST",
                       data: {
                           cat_id: cat_id
                        },

                       success:function (data) {

                        $('#subcategory').empty();

                        $.each(data.subcategories[0].subcategories,function(index,subcategory){

                            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
                        })

                       }
                   })
                });

            });
        </script>
    </body>
</html>
