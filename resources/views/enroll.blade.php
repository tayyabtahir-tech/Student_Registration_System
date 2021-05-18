<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style type="text/css">
    .container{
      width: 40%;
      border:1px solid green;
      border-radius: 5px;
    }
    @media(max-width: 700px){
      .container{
        width: 100%;
      }
    }

  </style>
    <title>Enrollment</title>
  </head>
  <body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<x-header/>
    <div class="container my-5">
      <form action="submit" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text"  name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput3">Contact</label>
    <input type="number" name="contact" class="form-control" id="exampleFormControlInput3" placeholder="Enter Your Contact Number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect5">Province</label>
    <select class="form-control" name="province" id="exampleFormControlSelect5">
      <option value="punjab">Punjab</option>
      <option value="sindh">Sindh</option>
      <option value="balochistan">Balochistan</option>
      <option value="kpk">KPK</option>
      <option value="balistan&kashmir">Batistan & Kashmir</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea6">Write Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea6" rows="3"></textarea>
     <button type="submit"  class="btn btn-primary">Submit</button>
  </div>

</form>
      
    </div>
    <x-footer/>
  </body>
</html>