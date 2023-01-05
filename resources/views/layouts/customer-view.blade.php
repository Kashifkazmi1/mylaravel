<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Customer data</title>
  </head>
  <body>

    <div class="float-right"><button class="btn text-light my-2 mx-5 btn-sm bg-info">Add</button></div>

   <div class="container">
    <h1 class="text-center text-info">Customer details</h1>
    <table class="table">
        <thead>

          <tr>
            <th scope="col">Sr.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">DOB</th>
            <th scope="col">Country</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $count = 0;
            @endphp
            @foreach ($customers as $customer )

            @php
            $count = $count+1;
        @endphp
          <tr>
            <th scope="row">{{$count}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->dob}}</td>
            <td>{{$customer->country}}</td>
            <td>{{$customer->gender}}</td>
            <td>{{$customer->address}}</td>
            <td>@if ($customer->status == 1)
                <button class='btn-sm btn bg-success text-light'> Active</button>
                @else
                <button class='btn-sm btn bg-warning'> Inactive</button>

            @endif
        </td>
        <td>
            <button class="btn btn-sm bg-info text-light">Edit</button> &nbsp
            <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}"><button class="btn btn-sm bg-danger text-light">Delete</button></a>

        </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>

  </body>
</html>
