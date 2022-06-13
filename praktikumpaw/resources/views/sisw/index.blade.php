@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Mahasiswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NRP</th>
            <th width="250px"class="text-center">Nama</th>
            <th width="250px"class="text-center">Email</th>
            <th width="250px"class="text-center">Alamat</th>
        </tr>
        @foreach ($sisw as $siswa)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $siswa->nrp }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td class="text-center">
                <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">

                    <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit',$siswa->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sisw->links() !!}

@endsection