<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportInventoryExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    private $results;

    public function __constructs($results)
    {
        $this->results = $results;
    }

    public function view(): View
    {
        return view('admin.reports.exports.inventory_xlsx', [
            'products' => $this->results,
        ]);
    }
}
