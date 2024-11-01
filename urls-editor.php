<?php
/**
 * @package URLs Editor - Absolute and Relative
 * @author Jozef Kapicak
 * @version 0.1
 */
/*
Plugin Name: URLs Editor - Absolute and Relative
Plugin URI: http://www.hiih.com/
Description: Replaces absolute URLs with Relative URLs or changes the URLs for image paths in posts
Author: Jozef Kapicak
Version: 0.1
Author URI: http://www.hiih.de/
INFO: http://digwp.com/2010/03/add-plugin-to-wordpress-plugin-repository/
*/

add_filter( 'image_send_to_editor', 'urls_editor', $priority=10, $number_of_args=1 );
add_filter( 'the_content', 'urls_editor', 11, 1 );

define('DEBUG_MODE', false);

function urls_editor( $html )
{
    $host = $_SERVER['HTTP_HOST'];
    
    $attributes = array(
    			'href=',
    			'src=',       
               );
    $urls = array( 
                /*
                 * absolute urls fix
                 */
    			//'https://'.$host.'/'  => 'http://'.$host.'/',
                //'httpS://'.$host.'/'  => 'http://'.$host.'/',
    
                /*
                 * absolute to relative url
                 */
                'http://'.$host.'/'     => '/',
                'https://'.$host.'/'    => '/',
                );
    
    if( DEBUG_MODE ) echo '<pre>';
                 
    foreach ($attributes as $atr)
    {
        foreach ($urls as $from => $to)
        {
            if( empty($from) ) continue;
            $html = str_replace($atr.'"'.$from, $atr.'"'.$to, $html, $count);
            
            // debugging
            if( DEBUG_MODE )
            {
                echo '[changed: '.$count.'] ';
                echo str_pad(short_name($atr.'"'.$from).' ', 45 , "-");
                echo '--> ';
                echo short_name($atr.'"'.$to);
                echo PHP_EOL;
            }
        }
    }
    if( DEBUG_MODE ) echo '</pre>';
    return $html;
}

function short_name($str, $limit=43)
{
    // Make sure a small or negative limit doesn't cause a negative length for substr().
    if ($limit < 3) {
        $limit = 3;
    }
    // Now truncate the string if it is over the limit.
    if (strlen($str) > $limit) {
        return substr($str, 0, $limit - 3) . '...';
    }else{
        return $str;
    }
}

// if( DEBUG_MODE ) echo '<hr><pre>'.htmlentities(url_fix( $s )).'</pre>';
?>