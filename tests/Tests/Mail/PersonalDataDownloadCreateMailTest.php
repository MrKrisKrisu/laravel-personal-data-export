<?php

namespace Spatie\PersonalDataDownload\Tests\Tests\Mail;

use Spatie\PersonalDataDownload\Mail\PersonalDataDownloadCreatedMail;
use Spatie\PersonalDataDownload\Tests\TestCase;


class PersonalDataDownloadCreateMailTest extends TestCase
{
    /** @test */
    public function the_personal_data_download_created_mail_can_be_rendered_to_a_string()
    {
        $zipFilename = 'personal-data.zip';

        $renderedMail = (new PersonalDataDownloadCreatedMail($zipFilename))->render();

        $this->assertTrue(is_string($renderedMail));
    }
}