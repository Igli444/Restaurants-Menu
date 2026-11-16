<?php

namespace Modules\Pdf\Tests\Unit;

use Modules\Pdf\Enums\PdfDocumentType;
use Modules\Pdf\Enums\PdfDriver;
use Modules\Pdf\Exceptions\PdfGenerationException;
use Tests\TestCase;

class PdfGenerationExceptionTest extends TestCase
{
    public function test_public_exception_does_not_retain_sensitive_driver_failure(): void
    {
        app()->setLocale('en');

        $exception = PdfGenerationException::forRender(PdfDriver::Cloudflare, PdfDocumentType::Invoice);

        $this->assertSame(
            'Unable to generate the invoice PDF with the Cloudflare Browser Rendering driver.',
            $exception->getMessage(),
        );
        $this->assertNull($exception->getPrevious());
        $this->assertStringNotContainsString('token', strtolower($exception->getMessage()));
    }

    public function test_public_exception_uses_the_active_locale(): void
    {
        app()->setLocale('sq');

        $exception = PdfGenerationException::forRender(PdfDriver::Dompdf, PdfDocumentType::Payslip);

        $this->assertSame(
            'Nuk mundësohet gjenerimi i PDF-së fletëpagesë me drejtuesin DOMPDF.',
            $exception->getMessage(),
        );
    }
}
