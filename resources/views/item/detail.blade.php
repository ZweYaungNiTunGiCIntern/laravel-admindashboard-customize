@extends('dashboard.index')

@section('category')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">


                    <div class="card-body align-items-center m-4">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="fw-bold fs-4">Name</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-7">{{ $item->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="fw-bold fs-4">Price</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-7">{{ $item->price }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="fw-bold fs-4">Category ID</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-7">{{ $item->category->name }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="fw-bold fs-4">Expire Date</div>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-7">{{ $item->expire_date }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
