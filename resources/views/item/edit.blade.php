@extends('dashboard.index')

@section('category')
    <div class="container">
        <div class="justify-content-center">
            <div class="col-md-7">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('item.update', $category->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div>
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name <small
                                            class="text-danger">*</small></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name', $category->name) }}" placeholder="Category name">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Price<small class="text-danger"></small></label>
                                    <input type="text" name="price" class="form-control @error('name')is-invalid @enderror " value="{{ old('price') }}">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>

                                        @enderror
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Category ID<small class="text-danger"></small></label>
                                    <select name="category_id" id="category" class="form-control"> >
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Expire Date<small class="text-danger"></small></label>
                                    <input type="date" name="expire_date" class="form-control @error('expire date')is-invalid @enderror "   value="{{ old('expire_date') }}  >
                                        @error('expire_date')
                                            <div class="text-danger">{{ $message }}</div>

                                        @enderror
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-outline-primary" type="button">Update</button>
                                </div>
                            <div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
