<?php

use Intervention\Image\Laravel\Facades\Image;



if (!function_exists('image_process')) {
  function image_process($image, $path, $width = null, $height = null)
  {
    if ($image) {
      $imageName = time(). uniqid() . '.' . $image->getClientOriginalExtension();
      $imagePath = public_path($path);
      if (!file_exists($imagePath)) {
        mkdir($imagePath, 0777, true);
      }
      $img = Image::read($image->getRealPath());
      if ($width && $height) {
        $img->scale($width, $height)->save("$imagePath/$imageName");
      } else {
        $img->save("$imagePath/$imageName");
      }
      return "$path/$imageName";
    }
    return null;
  }

  function image_delete($imagePath)
  {
    if (file_exists(public_path($imagePath))) {
      unlink(public_path($imagePath));
      return true;
    }
    return false;
  }
}