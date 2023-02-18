<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class photos extends Model
{
    use HasFactory;

    protected $fillable = ['src','type'];

    public function photoable()
    {
        return $this->morphTo();
    }

    static public function storeimage($request ,$obj ,$name ,$folder ,$ok){
        if (request()->file($name)) {
            $image1 = $request->file($name);
            $filename = uniqid() . '.' . $image1->getClientOriginalExtension();
            $path = $image1->storeAs('public/images/'.$folder, $filename);
            $path = str_replace('public', 'storage', $path);

            $existingPhoto = $obj
                ->photos()
                ->where('type', $name)
                ->first();

            if ($existingPhoto && $ok) {
                Storage::delete(str_replace('storage', 'public', $existingPhoto->src));               
                $existingPhoto->delete();
            }
            $obj->photos()->create([
                'type' => $name,
                'src' => $path,
            ]);
        }
    }
}
