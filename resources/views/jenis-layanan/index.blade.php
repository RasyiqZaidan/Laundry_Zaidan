@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addJenis">
                        Tambah Jenis
                    </button>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="addJenis" tabindex="-1" aria-labelledby="addJenisLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addJenisLabel">Tambah Jenis Layanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('jenis-layanan.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" id="id" name="id" value="{{ $data->id ?? '' }}" />
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $data->nama ?? '') }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga', $data->harga ?? '') }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($layanan as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->harga }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="grup" aria-label="Basic Example">
                                    <button type="button" class="btn btn-sm btn-info btn-edit" data-bs-toggle="modal" data-bs-target="#modalEdit{{ $item->id }}"><i class="ti ti-edit"></i> Edit</button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalEdit{{ $item->id }}" tabindex="-1" aria-labelledby="addJenisLayananLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addJenisLayananLabel">Edit Jenis Layanan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('jenis-layanan.update', $item->id) }}" method="POST">
                                                        @method('PUT');
                                                        @csrf
                                                        <input type="hidden" id="id" name="id" value="{{ $item->id ?? '' }}" />
                                                        <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama</label>
                                                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="harga" class="form-label">Harga</label>
                                                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $item->harga }}" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('jenis-layanan.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="ti ti-trash"></i> Delete</button>
                                    </form>                               
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection