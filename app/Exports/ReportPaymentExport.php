<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportPaymentExport implements FromView
{
    private $_results;

    public function __construct($results)
    {
        $this->_results = $results;
    }

    public function view(): View
    {
        return view(
            'admin.reports.exports.payment_xlsx',
            [
                'payments' => $this->_results,
            ]
        );
    }
}
