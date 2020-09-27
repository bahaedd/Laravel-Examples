
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date wise user report example-codechief</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  </head>
  <body>
    <p class="text-center">Date wise user report - ( {{ $start_date }} - {{ $end_date }} )</p>

     <div class="row">
      <hr style="margin-top: 10px;">
       <table id="example1" class="table table-bordered table-hover">
      <thead>
      <tr class="text-center">
         <th class="text-center">No</th>
         <th class="text-center">Name</th>
         <th class="text-center">Email</th>
      </tr>
      </thead>
     <tbody>

        @foreach ($users as $user)
          <tr class="text-center">
          <td width="5%" class="text-center">{{ $loop->index + 1 }}</td>
          <td width="15%" class="text-center">{{ $user->name }}</td>
          <td width="15%" class="text-center">{{ $user->email }}</td>
         </tr>
        @endforeach
     </tbody>
    </table>
     </div>


     <div class="row">
      <hr style="margin-top: 10px;">
       <table border="0" width="100%">
         <tbody>
           <tr>
             <td style="width: 40%"></td>
             <td style="width: 20%"></td>
             <td style="width: 40%; text-align:center;">
               <p style="text-align: center;">Bahaeddine</p>
             </td>
           </tr>
         </tbody>
       </table>
     </div>
  </body>
</html>
