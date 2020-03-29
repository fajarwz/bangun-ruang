<?php
namespace Fajarwz\BangunRuang\Tests;

use Fajarwz\BangunRuang\Tests\TestCase;
use Fajarwz\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
    public function testHitungLuas()
    {
        $panjang = 10;
        $lebar = 5;

        $hasil = PersegiPanjang::hitungLuas($panjang, $lebar);

        $this->assertEquals($hasil, 50);
    }

    public function testHitungKeliling()
    {
        $panjang = 3;
        $lebar = 2;

        $hasil = PersegiPanjang::hitungKeliling($panjang, $lebar);
        
        $this->assertEquals($hasil, 10);
    }
}

?>