<?php

namespace Simplon\Phtml;

/**
 * Phtml
 * @package Simplon\Phtml
 * @author Tino Ehrich (tino@bigpun.me)
 */
class Phtml
{
    /**
     * @param $pathTemplate
     * @param array $data
     * @param string $fileExtension
     *
     * @return string
     * @throws PhtmlException
     */
    public static function render($pathTemplate, array $data, $fileExtension = '.phtml')
    {
        // set file name
        $fileName = $pathTemplate . $fileExtension;

        // make sure the file exists
        if (file_exists($fileName) === true)
        {
            // start output caching
            ob_start();

            // extract data from array
            extract($data);

            // load php file
            require $fileName;

            // assign output cache to variable
            $template = ob_get_clean();

            return (string)$template;
        }

        throw new PhtmlException('Missing given template file: ' . $pathTemplate);
    }
}