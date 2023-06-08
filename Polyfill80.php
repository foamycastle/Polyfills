<?php

if(PHP_VERSION_ID<81000) {

    if (!function_exists('array_is_list')) {
        /**
         * Determines whether the given array is a list
         * @param array $array
         * @return bool true if array is list
         */
        function array_is_list($array)
        {
            if (!is_array($array)) return false;
            $counter = 0;
            foreach ($array as $item => $value) {
                if (!is_int($item) || $counter != $item) {
                    return false;
                }
                $counter++;
            }
            return true;
        }
    }
    if(!function_exists('str_ends_with')){
        /**
         * Determines if $haystack ends with the given $needle. Case-sensitive
         * @param string $needle the string to locate
         * @param string $haystack the string to search
         * @return bool true if the $needle is found at the end of haystack
         */
        function str_ends_with($haystack, $needle)
        {
            if(!(gettype($haystack)=='string')||!(gettype($needle)=='string')) return false;
            return substr($haystack,0-strlen($needle))==$needle;
        }
    }
    if(!function_exists('str_starts_with')){
        /**
         * Determines if a $needle is found at the beginning of $haystack. Case-sensitive
         * @param string $haystack
         * @param string $needle
         * @return bool
         */
        function str_starts_with($haystack,$needle)
        {
            if(!(gettype($haystack)=='string')||!(gettype($needle)=='string')) return false;
            return substr($haystack,0,strlen($needle))==$needle;
        }
    }
}
