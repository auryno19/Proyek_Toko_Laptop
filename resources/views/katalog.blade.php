@extends('layout.main')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 mb-3 mt-5">
        <form action="/katalog">
            <div class="input-group mb-4 mt-3">
                <input type="text" class="form-control" placeholder="Cari Produk" name="search" value="">
                <button class="btn btn-dark" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>


<div class="card mb-4">
    <div style="max-height: 400px; overflow:hidden">
        <img src="{{ asset('images\item.jpg') }}" class="card-img-top" alt="item" class="img-fluid ">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">Tile</h5>
      <p class="card-text">Name Category</p>
      <p class="card-text">Harga</p>
      {{-- <p class="card-text"><small class="text-muted">Last updated {{ $course[0]->created_at->diffForHumans() }}</small></p> --}}
      <a href="/katalogDetail" class="btn btn-primary">More Info</a>
    </div>
  </div>

    
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="max-height: 500px; overflow:hidden">
                    <img src="{{ asset('images\item.jpg') }}" class="card-img-top" alt="item" class="img-fluid ">
                 </div>
                <div class="card-body">
                <h5 class="card-title">Tile</h5>
                <p class="card-text">Name Category</p>
                <p class="card-text">Harga</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated {{ $p->created_at->diffForHumans() }}</small></p> --}}
                <a href="/katalogDetail" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="max-height: 500px; overflow:hidden">
                    <img src="{{ asset('images\item.jpg') }}" class="card-img-top" alt="item" class="img-fluid ">
                 </div>
                <div class="card-body">
                <h5 class="card-title">Tile</h5>
                <p class="card-text">Name Category</p>
                <p class="card-text">Harga</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated {{ $p->created_at->diffForHumans() }}</small></p> --}}
                <a href="/katalogDetail" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div style="max-height: 500px; overflow:hidden">
                    <img src="{{ asset('images\item.jpg') }}" class="card-img-top" alt="item" class="img-fluid ">
                 </div>
                <div class="card-body">
                <h5 class="card-title">Tile</h5>
                <p class="card-text">Name Category</p>
                <p class="card-text">Harga</p>
                {{-- <p class="card-text"><small class="text-muted">Last updated {{ $p->created_at->diffForHumans() }}</small></p> --}}
                <a href="/katalogDetail" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection