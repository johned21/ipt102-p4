@extends('base')

<img src="/images/dash2.png" alt="" class="bg">

@section('content')

@if (session('success'))
    <div class="alert alert-success fixed-bottom">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <div class="row">
        
        <div class="col-md-10 offset-md-1">

            <h1 class="itemtitle">List of Items</h1>
            <a class="btn btn-primary float-end" href="{{ route('items.create') }}" id="btnitem">Add Item</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr></tr>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($items as $item) {{-- Loop items --}}
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->name }}</td>
                        <td>$ {{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>

                            <div class="dropdown"> {{-- Dropdown --}}
                                <button class="btn btn-danger btn-sm dropdown-toggle" role="button" id="navbarDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="actiondropdown">
                                    <li><a class="dropdown-item" href="{{ route('items.show', $item->id) }}">View</a></li> {{-- View --}}
                                    <li><a class="dropdown-item" href="{{ route('items.edit', $item->id) }}">Edit</a></li> {{-- Edit --}}
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form action="{{ route('items.destroy', $item->id) }}" method="post"> {{-- Delete --}}
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection