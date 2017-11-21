<?php

namespace PdfWatermarker;

use PdfWatermarker\Watermark\Watermark;
use PdfWatermarker\Watermarker\Watermarker;

class PDFWatermarker {

    private $pdfInput;
    private $pdfOutput;
    private $watermarkImage;
    private $watermarkPosition;

    public function __construct($pdfInput, $pdfOutput, $watermarkImage, $watermarkPosition) {
        $this->pdfInput = $pdfInput;
        $this->pdfOutput = $pdfOutput;
        $this->watermarkImage = $watermarkImage;
        $this->watermarkPosition = $watermarkPosition;
    }

    public function create()
    {
        $this->watermark = new Watermark($this->watermarkImage);
        $this->watermarker = new Watermarker($this->pdfInput, $this->pdfOutput, $this->watermark, $this->watermarkPosition); 
        $this->watermarker->watermarkPdf();
    }

}