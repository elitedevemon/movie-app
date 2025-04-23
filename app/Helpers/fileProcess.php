<?php


if (!function_exists('file_process')){
  function file_process($file, $path)
  {
    if ($file) {
      $fileName = time(). uniqid() . '.' . $file->getClientOriginalExtension();
      $filePath = public_path($path);
      if (!file_exists($filePath)) {
        mkdir($filePath, 0777, true);
      }
      $file->move($filePath, $fileName);
      return "$path/$fileName";
    }
    return null;
  }

  function file_delete($filePath)
  {
    if (file_exists(public_path($filePath))) {
      unlink(public_path($filePath));
      return true;
    }
    return false;
  }
}