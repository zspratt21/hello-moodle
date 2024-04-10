<?php

class block_helloblock extends block_base
{
    public function init() {
        $this->title = get_string('helloblock', 'block_helloblock');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = 'Hello World!';
        $this->content->footer = 'Footer goes here.';

        return $this->content;
    }
}