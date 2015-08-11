<?php
include '/application/lib/String.php';

/**
 * Class Uploader
 *
 * This class provide means for data uploading to the memory
 */
class Uploader
{
    /**
     * @var string Directory to which the file needs to be transferred
     */
    private $targetDir;
    /**
     * @var string Full path of file to be created
     */
    private $targetFilePath;
    //private $statusOK;

    /**
     * @var string file name
     */
    private $fileName;

    /**
     * Constant for JPG file types. Not used yed
     */
    const FILEEXT_JPG = 'jpg';
    /**
     * Constant for PNG file types. Not used yed
     */
    const FILEEXT_PNG = 'png';
    /**
     * Constant for GIF file types. Not used yed
     */
    const FILEEXT_GIF = 'gif';
    //const FILEEXT_IMAGE = '';

    /**
     * Moves data from temporary storage to constant. Does not process errors yet
     *
     * @param string $targetDir Directory to which file is going to be moved
     * @param mixed $file File to be moved
     * @return string Full pass with name of file's new location
     */
    public function load($targetDir, $file)
    {
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $this->targetDir = $targetDir;
        $this->fileName = String::generateLine(16);

        $targetFile = $this->targetDir . $this->fileName .'.'. $ext;
        $targetFile = str_replace(['/', '\\'], '/', $targetFile);

        $this->targetFilePath = $_SERVER['DOCUMENT_ROOT'] . $this->targetDir . $this->fileName .'.'. $ext;
		
		$this->targetFile = str_replace(['/', '\\'], /*DIRECTORY_SEPARATOR*/'/', $this->targetFile);

        move_uploaded_file($file['tmp_name'], $this->targetFilePath);
        return $targetFile;
    }
} 