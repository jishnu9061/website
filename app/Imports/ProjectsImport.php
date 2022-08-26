<?php

namespace App\Imports;

use App\model\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');


class ProjectsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Project([
            'Employee Code'     => $row['Employee Code'],
            'PresentDays' => $row['Present Days'],
            'Absent Days'    => $row['Absent Days'],
            'Normal Working Hours'    => $row['Normal Working Hours'],
            'OT Hours'    => $row['OT Hours'],
            'CL'    => $row['CL'],
            'PL'    => $row['PL'],
            'SL'    => $row['SL'],
            'Total Leave'    => $row['Total Leave'],
            'Late Coming Days'    => $row['Late Coming Days'],
            'Late Coming Hours'    => $row['Late Coming Hours'],
            'Early Going Days'    => $row['Early Going Days'],
            'Early Going Hours'    => $row['Early Going Hours'],
            'Weekly Off'    => $row['Weekly Off'],
            'Weekly Off Present'    => $row['Weekly Off Present'],
            'Holiday'    => $row['Holiday'],
            'Holiday Present'    => $row['Holiday Present'],

        ]);
    }
}
