<?php

namespace App\Imports;

use App\archive;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;

class ArchiveImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Model|null
     */
    public function model(array $row)
    {
        return new archive([
            'year' => $row[0],
            'name' => $row[1],
            'position' => $row[2],
            'twitter' => $row[3],
            'linkedin' => $row[4],
            'email' => $row[5],
            'phone' => $row[6],
        ]);
    }
}
