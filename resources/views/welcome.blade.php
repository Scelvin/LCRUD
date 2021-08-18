@extends('layouts.main')
@section('content')

@if (session('successMsg'))
  <div class="alert alert-success" role="alert">
    {{ session('successMsg') }}
  </div>
@endif

<div class="container">
   <h1>Dashboard</h1>
   <table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">First Name</th>
         <th scope="col">Last Name</th>
         <th scope="col">Email</th>
         <th scope="col">Mobile</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody>
       @foreach($students as $student)
       <tr>
         <th scope="row">{{ $student->id }}</th>
         <td>{{ $student->first_name }}</td>
         <td>{{ $student->last_name }}</td>
         <td>{{ $student->email }}</td>
         <td>{{ $student->phone }}</td>
         <td><a href="{{ route('edit', $student->id) }}"
           style="background-color: khaki; color:black; border:2px solid black; padding:2px 15px; display:inline-block;">Edit</a> |
             <form method="POST" id="delete-form-{{ $student->id }}" action="{{ route('delete', $student->id) }}"
               style="display: none;">
              {{ csrf_field() }}
              {{ method_field('delete') }}
             </form>
             <button onclick="if (confirm('Are you sure you want to delete?!')) {
               event.preventDefault();
               document.getElementById('delete-form-{{ $student->id }}').submit();
             } else {
               event.preventDefault();
             }">Delete
           </button>
         </td>
       </tr>
       @endforeach
     </tbody>
   </table>
</div>

@endsection
