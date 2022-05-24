<?php

namespace Tests\Feature;

use App\Models\Pelanggan;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PelangganTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_pelanggan_data_masuk()
    {

        $countAwal = Pelanggan::count(); // Menghitung jumlah data awal
        $response = $this->postJson('/api/pelanggan', [
            "nama" => "Agung",
            "kelamin" => "L",
            "phone" => "087123456789",
            "alamat" => "Semarang"
        ]);
        $countAkhir = Pelanggan::count(); // Menghitung jumlah data akhir (setelah penambahan data)
        $this->assertTrue($countAkhir == $countAwal + 1);
        $this->assertEquals($response["nama"], "Agung");
        // $this->assertEquals($response["nama"], "Agung");
    }
}
