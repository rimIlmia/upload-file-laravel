<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
<form method="POST" action="{{route('uploadFile')}}" enctype="multipart/form-data">
    @csrf
     <label for='file'> Select image to upload:</label>
  <input type="file" name="file">
  <button type="submit" name="submit">Upload</button>
</form>
    </body>
</html>
