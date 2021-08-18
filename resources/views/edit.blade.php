@extends('layouts.main')
@section('content')

@if($errors->any())
  @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
  @endforeach
@endif
<div class="container">
  <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Edit Student Information:</h4>
        <form class="needs-validation" novalidate action="{{ route('update', $student->id) }}" method="post">
          {{ csrf_field() }}
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName">First name</label>
              <input type="text" class="form-control" name="firstname" placeholder="" value="{{ $student->first_name }}" required>
            </div>

            <div class="col-sm-6">
              <label for="lastName">Last name</label>
              <input type="text" class="form-control" name="lastname" placeholder="" value="{{ $student->last_name }}" required>
            </div>

            <div class="col-12">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ $student->email }}">
            </div>

            <div class="col-12">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="XXXXXX1294" required value="{{ $student->phone }}">
            </div>
            <div class="text-center col-md 2">
              <button class="w-3-display-middle btn btn-primary btn-lg" type="submit">Update</button>
            </div>
          </div>
        </form>
  </div>
</div>
@endsection
