<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function mulimages(){
        return view('Image.mul_images');
    }

    public function Upload(Request $request){
        $images = array();
        if($files = $request->file('images')){
            foreach($files as $file){
                $image_name = md5(rand(1000,10000));
                $extension = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$extension;
                $upload_path = 'img/Uplaods';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $images[] = $image_url;
            }
                $data = File::create([
                    'description' => $request->description,
                    'images' => implode('|', $images),
                ]);

                if($data){
                    session()->flash('message', 'Data Added Successfully');
                    return back();
                }

            }
        }

    public function viewaImages(){
        $imagesData = File::all();
            return view('Image.view_images', compact('imagesData'));
    }
}
