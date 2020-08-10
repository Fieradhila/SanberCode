
@extends('forum.pertanyaan')

@section('content')
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pertanyaan</h1>
            <a href="{{ url('/pertanyaan/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Input Data</a>
          </div>
          <table class="table">
            <thead>
              <tr class="table-light">
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tgl Dibuat</th>
                <th scope="col">Tgl Diperbaharui</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($questions as $tanya)
              <tr>
                <th scope="row">{{$loop -> iteration}}</th>
                <td>{{$tanya -> judul}}</td>
                <td>{{$tanya -> isi}}</td>
                <td>{{$tanya -> tanggal_dibuat}}</td>
                <td>{{$tanya -> tanggal_diperbaharui}}</td>
                <td>
                  <a href="" class="badge badge-success">Edit</a>
                  <a href="" class="badge badge-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
@endsection