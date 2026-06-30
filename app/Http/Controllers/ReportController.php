<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function pdf()
    {
        $applications = Application::all();

        $pdf = Pdf::loadView('reports.pdf', compact('applications'));

        return $pdf->download('AppBloom_Application_Report.pdf');
    }
}