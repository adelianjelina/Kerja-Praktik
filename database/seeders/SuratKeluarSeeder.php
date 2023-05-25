<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('surat_keluars')->insert([
             'nomor_surat' => '001',
                'penerima' => 'John Doe',
                'perihal' => 'Pengajuan Cuti',
                'kategori' => 'Cuti',
                'tanggal' => '2023-05-20',
                'keterangan' => 'Mohon izin cuti selama 3 hari.',
                'file' => 'surat_001.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '002',
                'pengirim' => 'Jane Smith',
                'perihal' => 'Permohonan Izin Sakit',
                'kategori' => 'Izin Sakit',
                'tanggal' => '2023-05-22',
                'keterangan' => 'Saya tidak dapat hadir karena sakit.',
                'file' => 'surat_002.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
    }