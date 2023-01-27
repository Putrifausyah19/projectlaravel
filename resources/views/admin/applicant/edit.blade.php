{{-- 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>FORM</title>
  </head>
  <body>
    <div class="container mt-5" >
  <form action="{{ route('applicant-update', $applicant->id)}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name"  class="form-control"   placeholder="name" value="{{ $applicant->name }}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address"  class="form-control"  placeholder="Address" value="{{ $applicant->address }}">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input name="phone_number"  class="form-control"  placeholder="phone_number" value="{{ $applicant->phone_number }}">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input name="gender" class="form-control"  placeholder="gender" value="{{ $applicant->gender }}">
  </div>
  <div class="form-group">
    <label for="education_bg">Education Background</label>
    <input name="education_bg" class="form-control"  placeholder="education_bg" value="{{ $applicant->education_bg }}">
  </div>
  <div class="form-group">
    <label for="education_bg">work esp</label>
    <input name="work_exp" class="form-control"  placeholder="tes" value="{{ $applicant->work_exp }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> --}}

@extends('backend.master')

@section('content')

    <form action="{{ route('applicant-update', $applicant->id)}}" method="post">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name"  class="form-control"   placeholder="name" value="{{ $applicant->name }}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input name="address"  class="form-control"  placeholder="Address" value="{{ $applicant->address }}">
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input name="phone_number"  class="form-control"  placeholder="phone_number" value="{{ $applicant->phone_number }}">
  </div>
  <div class="form-group">
    <label for="gender">Gender</label>
    <input name="gender" class="form-control"  placeholder="gender" value="{{ $applicant->gender }}">
  </div>
  <div class="form-group">
    <label for="education_bg">Education Background</label>
    <input name="education_bg" class="form-control"  placeholder="education_bg" value="{{ $applicant->education_bg }}">
  </div>
  <div class="form-group">
    <label for="education_bg">work esp</label>
    <input name="work_exp" class="form-control"  placeholder="tes" value="{{ $applicant->work_exp }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection