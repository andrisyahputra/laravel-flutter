<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploudController extends Controller
{
    //
    public function uploudImage(Request $request)
    {
        if ($request->has('image')) {
            $image = $request->image;
            $namaFile = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploud/images');
            $image->move($path, $namaFile);

            return response()->json([
                'image_path' => "/uploud/images/" . $namaFile,
                'base_url' => url('/'),
            ]);
        }
    }
    public function uploudMultiImage(Request $request)
    {
        if ($request->has('image')) {
            $images = $request->image;
            foreach ($images as $key => $image) {
                $namaFile = time() . $key . '.' . $image->getClientOriginalExtension();
                $path = public_path('uploud/images');
                $image->move($path, $namaFile);
            }
        }
        return response()->json([
            'status' => "Uploud Semua sukses",
            'base_url' => url('/'),
        ]);
    }
}
