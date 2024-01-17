@extends('dashboard.index')

@section('category')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body align-items-center m-4">
                    <form action="{{ route('item.store') }}" method="post">
                        @csrf


                        <div class="mb-3">
                            <label  class="form-label">Name <small class="text-danger"></small></label>
                            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror ">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>

                                @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Price<small class="text-danger"></small></label>
                            <input type="text" name="price" class="form-control @error('name')is-invalid @enderror " value="{{ old('duration') }}">
                                @error('price')
                                    <div class="text-danger">{{ $message }}</div>

                                @enderror
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Category ID<small class="text-danger"></small></label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Expire Date<small class="text-danger"></small></label>
                            <input type="date" name="expire_date" class="form-control @error('expire date')is-invalid @enderror " >
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>

                                @enderror
                        </div>

                        <div class="mb-4">
                            <a href="{{ route('item.index') }}" class="btn btn-outline-dark">Back</a>
                            <button class="btn btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
