@extends('siswa.layout')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show </h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>

            </div>

        </div>

    </div>

   
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
        <tr>
            <td>{{$siswa->nis}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->jns_kelamin}}</td>
            <td>{{$siswa->temp_lahir}}</td>
            <td>{{$siswa->alamat}}</td>
            <td>{{$siswa->asal_sekolah}}</td>
            <td>{{$siswa->kelas}}</td>
            <td>{{$siswa->jurusan}}</td>
        </tr>
    </table>

@endsection