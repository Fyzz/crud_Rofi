@extends('layouts.app')

@section('title', 'Daftar Konten')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Konten') }}</div>

                <div class="card-body">
                <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contents as $content)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $content->title }}</td>
                    <td>{{ $content->description }}</td>
                    <td class="hstack">
                        <a href="{{ route('contents.show', $content->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('contents.edit', $content->id) }}" class="btn btn-primary">Ubah</a>
                        <form action="{{ route('contents.destroy', $content->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection