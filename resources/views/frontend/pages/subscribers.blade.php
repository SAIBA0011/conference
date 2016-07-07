@extends('master')

@section('content')
    <section class="section">
       <div class="container">
           <div class="col-md-12">
               <table class="table">
                   <thead>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                   </thead>
                   <tbody>
                    @if(count($subscribers))
                        @foreach($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber->first_name }}</td>
                                <td>{{ $subscriber->last_name }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>{{ $subscriber->phone }}</td>
                            </tr>
                        @endforeach
                    @endif
                   </tbody>
               </table>
           </div>
       </div>
    </section>
@endsection