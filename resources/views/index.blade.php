@extends('layouts.app')

@section('content')

<div class="container-fluid" >
    <div class="text-center text-dark">

        <h3>Online shopping</h3>
    </div>
    <div class="row"  >
        @foreach ($items as $item)
      <!-- Card 1 -->
        <div class="col-md-2" >
        <div class="card"  style="height: 300px ;">
            <img src="{{ asset('storage/gallery/'. $item->image) }}" alt="{{ $item->name }}" class="card-img-top" style="max-height: 200px" >
          <div class="card-body" >
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->price }}</p>
            <div class="d-flex justify-content-center align-items-center">
                <!-- Left-aligned button -->


                <!-- Right-aligned button -->
                <div>
                  <button class="btn btn-sm btn-primary"><i class="fa fa-check-circle" aria-hidden="true"></i> Buy</button>
                </div>
              </div>
          </div>
        </div>
      </div>


      @endforeach

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              @foreach($items as $item)


              <tbody>
                <tr>
                  <td>{{$item->name  }}</td>
                  <td>{{ $item->price }}</td>
                </tr>

              </tbody>
              @endforeach
              <tfoot>
                <tr>
                  <td><strong>Total</strong></td>
                  <td><strong>{{ $items->sum('price') }}</strong></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




  @endsection
