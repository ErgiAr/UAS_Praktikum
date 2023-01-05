<?php

namespace Database\Seeders;

use App\Models\DosenModel;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $in['nama_dosen'] = 'Bu Diny';
        $in['nip'] = '538793';
        $in['foto_dosen'] = 'apel';
        DosenModel::create($in);
    }
}
