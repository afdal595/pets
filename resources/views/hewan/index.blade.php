<!-- resources/views/hewan/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Hewan</h1>
    
    <div class="mb-3">
        <form action="{{ route('hewan.search') }}" method="GET">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Cari hewan...">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
    </div>

    <div class="row">
        @foreach($hewan as $item)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $item->gambar_utama ?? asset('images/default-pet.png') }}" 
                     class="card-img-top" alt="{{ $item->nama }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama }}</h5>
                    <p class="card-text">
                        <strong>Ras:</strong> {{ $item->ras->nama }}<br>
                        <strong>Jenis:</strong> {{ $item->ras->jenisHewan->nama }}
                    </p>
                    <a href="{{ route('hewan.show', $item->id) }}" class="btn btn-primary">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $hewan->links() }}
</div>
@endsection