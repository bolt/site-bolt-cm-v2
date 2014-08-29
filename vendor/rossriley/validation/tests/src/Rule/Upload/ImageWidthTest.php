<?php

namespace Sirius\Validation\Rule\Upload;

class ImageWidthTest extends \PHPUnit_Framework_TestCase
{

    function setUp()
    {
        $this->validator = new ImageWidth(array('min' => 500));
    }

    function testMissingFiles()
    {
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

    function testFile()
    {
        $fileName = 'real_jpeg_file.jpg';
        $file = array(
            'name' => $fileName,
            'type' => 'not_required',
            'size' => 'not_required',
            'tmp_name' => realpath(__DIR__ . '/../../../fixitures/') . DIRECTORY_SEPARATOR . $fileName,
            'error' => UPLOAD_ERR_OK
        );
        $this->assertTrue($this->validator->validate($file));

        $fileName = 'square_image.gif';
        $file = array(
            'name' => $fileName,
            'type' => 'not_required',
            'size' => 'not_required',
            'tmp_name' => realpath(__DIR__ . '/../../../fixitures/') . DIRECTORY_SEPARATOR . $fileName,
            'error' => UPLOAD_ERR_OK
        );
        $this->assertFalse($this->validator->validate($file));

        // change minimum
        $this->validator->setOption(ImageWidth::OPTION_MIN, 200);
        $this->assertTrue($this->validator->validate($file));
    }

}
