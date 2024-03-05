<?php

class RevertText {
    /**
     * @param $string string - multibyte text string to revert
     * @param $encoding string - encoding name
     * @return string
     */
    private function mb_strrev(string $string, string $encoding = null): string
    {
        $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
        return implode("", array_reverse($chars));
    }

    /**
     * @param $text string - text string to revert
     * @return string
     */
    public function makeRevert(string $text) {
        if ($text === "") return "Передана пустая строка";
        if (mb_check_encoding($text, "UTF-8") === false) {
            return strrev($text);
        } else { 
            return $this->mb_strrev($text);
        }
    }

}