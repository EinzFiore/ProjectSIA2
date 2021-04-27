<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        $akun = \App\Akun::All();
        $setting = \App\Setting::All();
        return view('admin.setting.setting',
            ['akun' => $akun,
                'setting' => $setting]);
    }
    public function simpan(Request $request)
    {
        $kode = $request->kode;
        $akun = $request->akun;
        foreach ($akun as $key => $no) {
            $input['no_akun'] = $akun[$key];
            Setting::where('id_setting', $kode[$key])->update($input);
        }
        Alert::warning('Pesan ', 'Setting Akun telah dilakukan ');
        return redirect('setting');
    }
}