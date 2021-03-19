<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportProductExport implements FromView
{
    private $_results;

    public function __construct($results)
    {
        $this->_results = $results;
    }

    public function view(): View
    {
        return view(
            'admin.reports.exports.product_xlsx',
            [
                'products' => $this->_results,
            ]
        );
    }
}
