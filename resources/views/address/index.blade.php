@extends('address.layout')
 
 @section('content')
     <div class="row">
         <div class="col-lg-12 margin-tb">
             <div class="pull-left">
                 <h2>Address Book</h2>
             </div>
             <div class="pull-right">
                 <a class="btn btn-success" href="{{ route('address.create') }}"> Add New Address</a>
             </div>
         </div>
     </div>
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif
    
     <table class="table table-bordered">
         <tr>
             <th>No</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phone</th>
             <th>Street</th>
             <th>Zipcode</th>
             <th>City</th>
             <th width="280px">Action</th>
         </tr>
         @foreach ($addresses as $address)
         <tr>
             <td>{{ ++$i }}</td>
             <td>{{ $address->first_name }} {{ $address->last_name }}</td>
             <td>{{ $address->email }}</td>
             <td>{{ $address->phone }}</td>
             <td>{{ $address->street }}</td>
             <td>{{ $address->zipcode }}</td>
             <td>{{ $address->city }}</td>

             <td>
                 <form action="{{ route('address.destroy',$address->id) }}" method="POST">
    
                     <a class="btn btn-primary" href="{{ route('address.edit',$address->id) }}">Edit</a>
    
                 </form>
             </td>
         </tr>
         @endforeach
     </table>
   
     {!! $addresses->links() !!}
       
 @endsection