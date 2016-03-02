<?php

class View
{
    public function generate($content, $template, $data = null)
    {
        require_once('application/views/' . $template);
    }
}
