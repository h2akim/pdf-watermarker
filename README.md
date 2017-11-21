PHP Watermarker
===================
Installation
-------------

```bash
composer require h2akim\pdfwatermarker
```

Usage
-------------

```php
<?php

use PdfWatermarker\PdfWatermarker;

$watermarker = new PdfWatermarker(
                'input.pdf', // input
                'output.pdf', // output
                'watermark.png', // watermark file
                'center' // watermark position
               );
$watermarker->create();
```