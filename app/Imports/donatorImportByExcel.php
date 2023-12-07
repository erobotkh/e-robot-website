<?php

namespace App\Imports;

use App\Models\Donator;
use Maatwebsite\Excel\Concerns\ToModel;


class donatorImportByExcel implements ToModel
{

    public function model(array $row)
    {
        return new Donator([
            'name' => $row[0],
            'amount'=> $row[1],
            'currency_type'=> $row[2],
        ]);
    }
}
