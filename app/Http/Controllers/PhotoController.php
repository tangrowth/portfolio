<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Storage;

class PhotoController extends Controller
{
    public function add()
  {
      return view('photo');
  }

  public function create(Request $request)
  {
      $photo = new Photo;
      $form = $request->all();

      $image = $request->file('image');
      $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
      $photo->image_path = Storage::disk('s3')->url($path);

      $photo->save();

      return redirect('photo');
  }
}
