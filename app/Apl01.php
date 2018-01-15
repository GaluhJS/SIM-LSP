<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apl01 extends Model
{
    //
    protected $table = 'apl01';

    protected $fillable = ['id_apl01','nama', 'tempat_lahir', 'tgl_lahir', 'jk', 'kebangsaan', 'alamat', 'kd_pos', 'tlp_rumah', 'tlp_hp' ,'tlp_kantor', 'email', 'pendidikan_terakhir', 'nama_lembaga', 'jabatan', 'alamat_perusahaan', 'kd_pos_lembaga', 'tlp_lembaga', 'fax', 'email_lembaga', 'tujuan_asesmen', 'skema_sertifikasi'];
}
