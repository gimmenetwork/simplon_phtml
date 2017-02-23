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
     *
     * @return string
     * @throws PhtmlException
     */
    public static function render($pathTemplate, array $data = [])
    {
        // make sure the file exists
        if (file_exists($pathTemplate) === true)
        {
            // start output caching
            ob_start();

            // extract data from array
            extract($data);

            // load php file
            require $pathTemplate;

            // assign output cache to variable
            $template = ob_get_clean();

            return (string)$template;
        }

        throw new PhtmlException('Missing given template file: ' . $pathTemplate);
    }
}