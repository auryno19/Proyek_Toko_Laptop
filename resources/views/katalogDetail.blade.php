@extends('layout.main')

@section('content')

  <!-- Modal -->
<h1 class="mt-3 mb-3 text-center text-light">
    <b> Detail </b>
</h1>

<div class="container mt-3 mb-3">
    <div class="row justify-content-center align-items-center">
        <div class="card"  style="width: 30rem;">
            <img src="{{ asset('images\item.jpg') }}" class="card-img-top" alt="item">
            <div class="card-header">
                <b>Merek</b>
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kategori : </b>Kategori</li>
                    <li class="list-group-item"><b>Tipe : </b>Tipe</li>
                    <li class="list-group-item"><b>Deskripsi : </b>Deskripsi</li>
                    <li class="list-group-item"><b>Harga : </b>Harga</li>
            </div>

            <div class="card-footer text-muted">
                <a class="btn btn-danger my-2" href="/katalog"><i class="bi bi-arrow-bar-left me-2"></i>kembali</a>
            </div>
            
        </div>
    </div>
</div>




@endsection