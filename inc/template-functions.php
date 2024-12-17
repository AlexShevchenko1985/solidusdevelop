<?php
# Example of image sizes:
add_image_size('hd-size', 1920, 1080, ['center', 'center']);

function truncate_html($html, $length) {
    $dom = new DOMDocument();


    libxml_use_internal_errors(true);


    $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));


    libxml_clear_errors();

    $output = '';
    $totalLength = 0;

    foreach ($dom->getElementsByTagName('p') as $p) {
        $text = $p->textContent;
        $textLength = mb_strlen($text);


        if ($totalLength + $textLength > $length) {
            $remaining = $length - $totalLength;
            $output .= '<p>' . mb_substr($text, 0, $remaining) . '...</p>';
            break;
        }


        $output .= '<p>' . $text . '</p>';
        $totalLength += $textLength;
    }

    return $output;
}