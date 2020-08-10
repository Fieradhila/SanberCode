
@extends('forum.pertanyaan')

@section('content')
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action="{{ url('/pertanyaan') }}" >
            @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', '') }}">
                    @error('isi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_dibuat">Tangggal Dibuat</label>
                    <input type="date" class="form-control" id="tgl_dibuat" name="tanggal_dibuat">
                    @error('tanggal_dibuat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tgl_diperbaharui">Tanggal Diperbaharui</label>
                    <input type="date" class="form-control" id="tgl_diperbaharui" name="tanggal_diperbaharui">
                    @error('tanggal_diperbaharui')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="profiles_id">Profile Id</label>
                    <input type="number" class="form-control" id="profiles_id" name="profiles_id">
                    @error('profiles_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-danger" type="reset">Reset</button>
            </form>
            <!--
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>-->
        </div>
    </div>
@endsection