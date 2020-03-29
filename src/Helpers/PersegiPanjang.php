<?php

namespace Fajarwz\BangunRuang\Helpers;

class PersegiPanjang {
  public function hitungLuas($panjang, $lebar) {
      return $panjang * $lebar;
  }

  public function hitungKeliling($panjang, $lebar)
    {
        return 2 * ($panjang + $lebar);
    }
}

?>