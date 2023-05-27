<?php

return [
    /*
    |--------------------------------------------------------------------------
    | PDF Options
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of the PDF generation.
    |
    */

    'options' => [
        'defaultFont' => 'Arial',
        'isRemoteEnabled' => true,
        'isHtml5ParserEnabled' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Defines
    |--------------------------------------------------------------------------
    |
    | These defines allow you to customize the internals of dompdf.
    |
    */

    'defines' => [
        'DOMPDF_ENABLE_REMOTE' => true,
        'DOMPDF_ENABLE_AUTOLOAD' => false,
        'DOMPDF_ENABLE_FONT_SUBSETTING' => true,
        'DOMPDF_ENABLE_CSS_FLOAT' => true,
        'DOMPDF_ENABLE_JAVASCRIPT' => true,
        'DOMPDF_ENABLE_HTML5PARSER' => true,
        'DOMPDF_LOG_OUTPUT_FILE' => storage_path('logs/dompdf_output.log'),
        'DOMPDF_FONT_CACHE' => storage_path('fonts/'),
        'DOMPDF_TEMP_DIR' => storage_path('temp/'),
        'DOMPDF_CHROOT' => realpath(base_path()),
        'DOMPDF_UNICODE_ENABLED' => true,
        'DOMPDF_PDF_BACKEND' => 'CPDF',
        'DOMPDF_DEFAULT_MEDIA_TYPE' => 'screen',
        'DOMPDF_DEFAULT_PAPER_SIZE' => 'letter',
        'DOMPDF_DEFAULT_FONT' => 'serif',
        'DOMPDF_DPI' => 96,
        'DOMPDF_ENABLE_PHP' => false,
        'DOMPDF_ENABLE_SMARTY' => false,
        'DOMPDF_ENABLE_XDEBUG' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Fonts
    |--------------------------------------------------------------------------
    |
    | These fonts will be available for use in the PDF generation.
    |
    */

    'fonts' => [
        'Arial',
        'Helvetica',
        'Times New Roman',
        'Courier',
        'Courier New',
    ],
];
