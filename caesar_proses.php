<?php
function caesar_proses($text, $key)
{
    $result = "";

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        $asciiCode = ord($char);

        // Handle uppercase characters
        if (ctype_upper($char)) {
            $newAsciiCode = ($asciiCode + $key - 65) % 26 + 65;
            $newChar = chr($newAsciiCode);
            $result .= $newChar;
        }

        // Handle spaces
        else if ($char === ' ') {
            $result .= ' ';
        }

        // Handle lowercase characters
        else if (ctype_lower($char)) {
            $newAsciiCode = ($asciiCode + $key - 97) % 26 + 97;
            $newChar = chr($newAsciiCode);
            $result .= $newChar;
        }

        // Handle other characters
        else {
            $newAsciiCode = ($asciiCode + $key - 33) % 26 + 33;
            $newChar = chr($newAsciiCode);
            $result .= $newChar;
        }
    }

    return $result;
}
