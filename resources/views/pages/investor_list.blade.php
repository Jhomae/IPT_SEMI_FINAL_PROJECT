@extends('layouts.app')
@section('content')

<div class="container mt-1">
    <table class="table border table-striped">
        <thead class="bg-primary">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Investment</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($investorList as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->address }}</td>
                    <td>{{ $list->phone }}</td>
                    <td>{{ $list->investment }}</td>

                </tr>
            @endforeach
        </tbody>
      </table>

</div>




@endsection
