@extends('tampil.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 text-center">
                <h2>Data Barang<br>Toko Manda</h2>
            </div>
            <br>
            <br>

            <!-- Form Search -->
            <div class="float-left my-2">
                <form action="{{ route('barang.index') }}" method="GET">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" name="search" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cari</button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- End Form Search -->

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>id_barang</th>
            <th>kode_barang</th>
            <th>nama_barang</th>
            <th>kategori_barang</th>
            <th>harga</th>
            <th>qty</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $Barang)
        <tr>

            <td>{{ $Barang->id_barang }}</td>
            <td>{{ $Barang->kode_barang }}</td>
            <td>{{ $Barang->nama_barang }}</td>
            <td>{{ $Barang->kategori_barang }}</td>
            <td>{{ $Barang->harga }}</td>
            <td>{{ $Barang->qty }}</td>
            <td>
            <form action="{{ route('barang.destroy', $Barang->id_barang) }}" method="POST">
                <a class="btn btn-info" href="{{ route('barang.show', $Barang->id_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barang.edit', $Barang->id_barang) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Anda yakin ingin meghapus data ini ?')"
                class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-center">
        {{$barangs->links()}}
    </div>

@endsection
