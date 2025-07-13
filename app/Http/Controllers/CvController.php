<?php

namespace App\Http\Controllers;

use App\Services\CvPdfService;
use Illuminate\Http\Request;

class CvController extends Controller
{
    protected $cvPdfService;

    public function __construct(CvPdfService $cvPdfService)
    {
        $this->cvPdfService = $cvPdfService;
    }

    public function download()
    {
        try {
            $pdf = $this->cvPdfService->generateCvPdf();
            
            return $pdf->download('G.B.D_Anuradha_CV.pdf');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to generate CV PDF. Please try again.');
        }
    }

    public function downloadCv()
    {
        try {
            $pdf = $this->cvPdfService->generateCvPdf();
            
            return $pdf->download('G.B.D_Anuradha_CV.pdf');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to generate CV PDF. Please try again.');
        }
    }

    public function previewCv()
    {
        try {
            $pdf = $this->cvPdfService->generateCvPdf();
            
            return $pdf->stream('G.B.D_Anuradha_CV.pdf');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to generate CV PDF. Please try again.');
        }
    }
} 