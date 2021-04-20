@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<form action="{{route('supplier.update', [$supplier->kd_supp])}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Ubah Data Supplier</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="addkdbrg">Kode Supplier</label>
                <input class="form-control" type="text" name="kd_supp" value="{{$supplier->kd_supp}}" readonly>
            </div>
            <div class="col-md-5">
                <label for="addnmbrg">Nama Supplier</label>
                <input id="addnmbrg" type="text" name="nm_supp" class="form-control" value="{{$supplier->nm_supp}}">
            </div>
            <div class="col-md-5">
                <label for="Harga">Alamat</label>
                <input id="addharga" type="text" name="alamat" class="form-control" value="{{$supplier->alamat}}">
            </div>
            <div class="col-md-5">
                <label for="Stok">Telepon</label>
                <input id="addstok" type="text" name="telepon" class="form-control" value="{{$supplier->telepon}}">
            </div>
    </fieldset>
    <div class="col-md-10">
        <input type="submit" class="btn btn-success btn-send" value="Update">
        <a href="{{ route('supplier.index') }}"><input type="Button" class="btn btn-primary btn-send" value="Kembali"></a>
    </div>
    <hr>
</form>
@endsection
