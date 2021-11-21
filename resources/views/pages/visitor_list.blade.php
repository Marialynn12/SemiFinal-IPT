@extends('layouts.app')
@section('content')


<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Purpose</th>
            <th scope="col">Time</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->phone }}</td>
                    <td>{{ $visitor->purpose }}</td>
                    <td>{{ $visitor->time }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
