<?php
# Example of image sizes:
add_image_size('hd-size', 1920, 1080, ['center', 'center']);

if(!function_exists('truncate_html')){
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
}

function ucfirst_lowercase($string) {

    $lowercaseString = mb_strtolower($string, 'UTF-8');

    $capitalizedString = mb_strtoupper(mb_substr($lowercaseString, 0, 1, 'UTF-8'), 'UTF-8')
        . mb_substr($lowercaseString, 1, null, 'UTF-8');

    return $capitalizedString;
}

function node_get_current_browser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($user_agent, 'Chrome') !== false) {
        $browser = 'chrome';
    } elseif (strpos($user_agent, 'Firefox') !== false) {
        $browser = 'firefox';
    } elseif (strpos($user_agent, 'Safari') !== false && strpos($user_agent, 'Chrome') === false) {
        $browser = 'safari';
    } elseif (strpos($user_agent, 'Edge') !== false) {
        $browser = 'edge';
    } elseif (strpos($user_agent, 'Opera') !== false || strpos($user_agent, 'OPR') !== false) {
        $browser = 'opera';
    } elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false) {
        $browser = 'explorer';
    } else {
        $browser = 'unknown';
    }

    return $browser;
}