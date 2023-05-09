@extends('mahasiswas.layout')

@section('content')
<div class="container mt-3">
    <div class="text-center">
        <h4>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h4>
    </div>
    <h2 class="text-center mt-4 mb-5">KARTU HASIL STUDI (KHS)</h2>
    <div class="row">
        <div class="col">
            <strong>Name: </strong> {{$Mahasiswa->nama}}<br>
            <strong>NIM: </strong> {{$Mahasiswa->nim}}<br>
            <strong>Class: </strong> {{$Mahasiswa->kelas->nama_kelas}}
        </div>
        <div class="col d-flex justify-content-end align-items-end">
            {{-- <a href="/mahasiswas/cetak/{{$Mahasiswa->nim}}" class="btn btn-warning">Cetak PDF</a> --}}
            <a href="{{ route('cetak', ['nim' => $Mahasiswa->nim]) }}" class="btn btn-warning">Cetak PDF</a>
        </div>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">Semester</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Mahasiswa->mataKuliah as $matkul)
            <tr>
                <td>{{ $matkul->nama_matkul }}</td>
                <td>{{ $matkul->sks }}</td>
                <td>{{ $matkul->semester }}</td>
                <td>{{ $matkul->pivot->nilai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('mahasiswas.index') }}" class="btn btn-success">Kembali</a>
</div>
@endsection