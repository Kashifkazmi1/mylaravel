<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>Customer registatin</title>
  </head>
  <body>
   <h1 class="text-info text-center my-5">Customer Registration form </h1>

    <div class="container col-md-5">
        <form method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">city</label>
              <input type="text" class="form-control" name="city" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">country</label>
              <input type="text" class="form-control" name="country" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">state</label>
              <input type="text" class="form-control" name="state" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
<label for="form-chek">Gender</label>
         <div class="form-check" name="gender">
            <label class="form-check-label" for="flexRadioDefault1">
                Male
              </label>
            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            </div>
          <div class="form-check">
            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
             Female
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
             other
            </label>
          </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Date of birth</label>
              <input type="datetime-local" name="dob" id="datetime-local" class="form-control"  aria-describedby="emailHelp">
         </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


  </body>
</html>
