<?php

class View
{

    /**
     * The template used
     *
     * @var string
     */
    private $template;

    /**
     * Constructor of the View class
     *
     * @param array $route
     */
    public function __construct()
    {
        $this->template = TEMPLATE;
    }

    /**
     * Rendering a template to a page
     *
     * @param string $title
     * @param array $data
     * @return void
     */
    public function render($body, $data = [])
    {
        $path = '';
        $content = '';
        $bodyPath = TEMPLATES_DIR . $this->template  . $body . '.tpl';

        if (!file_exists($bodyPath)) {
            throw new Exception('Body not found:' . $bodyPath);
        }

        $pagePath = [
            'header' => TEMPLATES_DIR . $this->template  . 'header' . '.tpl',
            'body' => $bodyPath,
            'footer' => TEMPLATES_DIR . $this->template . 'footer' . '.tpl'
        ];

        foreach ($pagePath as $key => $value) {
            if (file_exists($value)) {

                $path = file_get_contents($value);

                foreach ($data as $find => $replace) {
                    $path = str_replace($find, $replace, $path);
                }

                $content .= $path;
            } else {
                throw new Exception('Template not found:' . $value);
                break;
            }
        }

        echo $content;
    }
}
