<?php

namespace App\Imports;

use App\archive;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

//use Maatwebsite\Excel\Concerns\OnEachRow;
//use Maatwebsite\Excel\Row;

class ArchiveImport implements WithHeadingRow, ToModel
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
            'name' => $row['name'],
            'position' => $row['position'],
            'twitter' => $row['twitter'],
            'linkedin' => $row['linkedin'],
            'email' => $row['email'],
            'phone' => $row['phone'],
        ]);
    }

//    /**
//     * @inheritDoc
//     */
//    public function onRow(Row $row)
//    {
//        dd($row);
//        try {
//            archive::updateOrCreate(
//            // this is the keys.
//                [
//                    'year' => $row[0],
//                    'name' => $row[1],
//                ],
//                //this is the additional values
//                [
//                    'position' => $row[2],
//                    'twitter' => $row[3],
//                    'linkedin' => $row[4],
//                    'email' => $row[5],
//                    'phone' => $row[9],
//                ]);
//
//        }catch (\Exception $e){
//            dump($e);
//            dd('no can do!');
//
//        }
//    }

}
