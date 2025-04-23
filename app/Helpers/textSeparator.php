<?php


if (!function_exists('text_separate')){
  function text_separate($text, $separator = ' ')
  {
    $text = preg_replace('/\s+/', ' ', trim($text)); // Remove extra spaces
    $words = explode($separator, $text); // Split the text into words using the separator
    return array_map('trim', $words); // Trim each word and return the array
  }
}