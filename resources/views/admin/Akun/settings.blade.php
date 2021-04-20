@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
{{-- <form action="{{route('akun.update', [$akun->no_akun])}}" method="POST"> --}}
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <fieldset>
        <legend>Setting akun untuk transaksid</legend>
        <table width="500px">
            <tr>
                <td>Transaksi Retur</td>
                <td>211</td>
                <td>
                    <select name="akun" id="akun" class="form-control">
                        <option value="">-- Pilih Akun --</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Transaksi Pembelian</td>
                <td>500</td>
                <td>
                    <select name="akun" id="akun" class="form-control">
                        <option value="">-- Pilih Akun --</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Transaksi Kas</td>
                <td>101</td>
                <td>
                    <select name="akun" id="akun" class="form-control">
                        <option value="">-- Pilih Akun --</option>
                    </select>
                </td>
            </tr>
        </table>
    </fieldset>
    <div class="col-md-10">
        <input type="submit" class="btn btn-primary btn-send" value="Update Setting">
    </div>
    <hr>
{{-- </form> --}}
@endsection
