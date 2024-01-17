@extends('dashboard.index')

@section('category')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5 md-4 shadow">
                <div class="card-body">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->get('update'))
                        <div class="alert alert-success">
                            {{ session()->get('update') }}
                        </div>
                    @endif
                    @if(session()->get('delete'))
                        <div class="alert alert-danger">
                            {{ session()->get('delete') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Expire Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <th scope="row"> {{ $loop->index + 1 }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->category->name}}</td>
                                    <td>{{ $item->expire_date}}</td>
                                    <td>
                                        <div class="d-flex justify-content-right">
                                            <a href="{{route('item.edit',$item->id) }}" class="btn btn-outline-warning"">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{route('item.show',$item->id) }}" class="btn btn-outline-primary">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <div>
                                                <form action="{{route('item.destroy',$item->id) }}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this item');" >
                                                    @method('delete')

                                                    @csrf
                                                    <button class="btn btn-outline-danger">

                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            {{ $items->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
