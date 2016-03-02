<?php

class CaesarCipher
{

    public $data;
    public $num;
    public $text;
    public $result;


    public function __construct($text, $num = 0)
    {

        $this->text   = $text;
        $this->num    = $num;
        $this->result = '';

    }

    public function caesarEncode()
    {

        $count = strlen($this->text);

        for ($i = 0; $i < $count; ++$i) {

            $c = ord($this->text[$i]);

            if (97 <= $c && $c < 123) {
                $this->result .= chr(($c + $this->num + 7) % 26 + 97);
            } else if (65 <= $c && $c < 91) {
                $this->result .= chr(($c + $this->num + 13) % 26 + 65);
            } else {
                $this->result .= $this->text[$i];
            }
        }

        return $this->result;

    }


    public function caesarDecode()
    {
        $count = strlen($this->text);

        for ($i = 0; $i < $count; ++$i) {

            $c = ord($this->text[$i]);

            if (97 <= $c && $c < 123) {
                $this->result .= chr(($c - $this->num + 7) % 26 + 97);
            } else if (65 <= $c && $c < 91) {
                $this->result .= chr(($c - $this->num + 13) % 26 + 65);
            } else {
                $this->result .= $this->text[$i];
            }
        }

        return $this->result;
    }
}


