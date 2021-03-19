<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportRevenueExport implements FromView
{
    private $results;

    public function __construct($results)
    {
        $this->results = $results;
    }

    public function view(): View
    {
        return view('admin.reports.exports.revenue_xlsx', [
            'revenues' => $this->results,
        ]);
    }
}
