<?php
/**
 * Class FileHandler
 *
 * This class contains means for working with files
 *
 * Used Pattern: Execute Around
 */
class FileHandler
{
    /**
     * Appends specified line to specified file(text)
     *
     * @param string $file Path to file that needs to be written in
     * @param string $text Text that needs to be appended to file
     */
    public static function writeLine($file, $text)
    {
        $fileName = addslashes($file);
        $handler = fopen($fileName, 'a');
        fwrite($handler, $text . PHP_EOL);
        fclose($handler);
    }
} 
