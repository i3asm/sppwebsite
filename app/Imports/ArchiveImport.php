<?php

namespace App\Imports;

use App\archive;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArchiveImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Model|null
     */
    public function model(array $row)
    {
        return new archive([
            'year' => $row['year'],
            'name' => $row['Name'],
            'position' => $row['position'],
            'twitter' => $row['twitter'],
            'linkedin' => $row['linkedin'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);
    }
}
