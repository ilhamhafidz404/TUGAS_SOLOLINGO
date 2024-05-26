<?php

if (!function_exists('string_to_slug')) {
  /**
   * Converts a string to a slug.
   *
   * @param string $string The string to be converted.
   * @return string The slugified string.
   */
  function string_to_slug(string $string): string
  {
    // Convert to lowercase
    $slug = strtolower($string);

    // Remove non-alphanumeric characters (except dashes and spaces)
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);

    // Replace multiple spaces or dashes with a single dash
    $slug = preg_replace('/[\s-]+/', ' ', $slug);

    // Replace spaces with dashes
    $slug = preg_replace('/\s+/', '-', $slug);

    // Trim dashes from the start and end
    $slug = trim($slug, '-');

    return $slug;
  }
}
