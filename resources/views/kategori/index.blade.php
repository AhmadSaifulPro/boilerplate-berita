@extends('layout.main')
@section('konten')
    <h3>Ini Halaman Kategori</h3>
    <table class="table table-bordered" id="kategoriTable">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @forelse ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>Data Kategori Tidak Ada</p>
            @endforelse --}}
        </tbody>
    </table>
@endsection
