<?php

namespace Sirius\Validation\Rule\Upload;

class ExtensionTest extends \PHPUnit_Framework_TestCase
{

    function setUp()
    {
        $this->validator = new Extension();
    }

    function testExistingFiles()
    {
        $this->validator->setOption(Extension::OPTION_ALLOWED_EXTENSIONS, array('jpg'));
        $fileName = 'real_jpeg_file.jpg';
        $file = array(
            'name' => $fileName,
            'type' => 'not_required',
            'size' => 'not_required',
            'tmp_name' => realpath(__DIR__ . '/../../../fixitures/') . DIRECTORY_SEPARATOR . $fileName,
            'error' => UPLOAD_ERR_OK
        );
        $this->assertTrue($this->validator->validate($file));
    }

    function testMissingFiles()
    {
        $this->validator->setOption(Extension::OPTION_ALLOWED_EXTENSIONS, array('jpg'));
        $fileName = 'file_that_does_not_exist.jpg';
        $file = array(
            'name' => $fileName,
            'type' => 'not_required',
            'size' => 'not_required',
            'tmp_name' => realpath(__DIR__ . '/../../../fixitures/') . DIRECTORY_SEPARATOR . $fileName,
            'error' => UPLOAD_ERR_OK
        );
        $this->assertFalse($this->validator->validate($file));
    }

    function testSetOptionAsString()
    {
        $this->validator->setOption(Extension::OPTION_ALLOWED_EXTENSIONS, 'jpg, GIF');
        $fileName = 'real_jpeg_file.jpg';
        $file = array(
            'name' => $fileName,
            'type' => 'not_required',
            'size' => 'not_required',
            'tmp_name' => realpath(__DIR__ . '/../../../fixitures/') . DIRECTORY_SEPARATOR . $fileName,
            'error' => UPLOAD_ERR_OK
        );
        $this->assertTrue($this->validator->validate($file));
    }

    function testPotentialMessage()
    {
        $this->validator->setOption(Extension::OPTION_ALLOWED_EXTENSIONS, array('jpg', 'png'));
        $this->assertEquals(
            'File does not have an acceptable extension (JPG, PNG)',
            (string)$this->validator->getPotentialMessage()
        );
    }
}
