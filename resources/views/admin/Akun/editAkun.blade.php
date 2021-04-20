@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('akun.update', [$akun->no_akun])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Ubah Data Akun</legend>
        <div class="form-group row">
            <div class="form-group mr-4">
                <label for="exampleFormControlInput1">Kode Akun</label>
                <input type="text" name="no_akun" id="no_akun" value="{{ $akun->no_akun }}" class="form-control" maxlegth="5"
                    id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Akun</label>
                <input type="text" name="nm_akun" id="nm_akun" value="{{ $akun->nm_akun }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
    </fieldset>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <a href="{{ route('akun.index') }}"><input type="Button" class="btn btn-primary btn-send" value="Kembali"></a>
    </div>
    <hr>
</form>
@endsection
