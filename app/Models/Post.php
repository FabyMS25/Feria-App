<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
class Post extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function company() : BelongsTo{
        return $this->belongsTo(Company::class);
    }
    public function user() : BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function  categories() :BelongsToMany{
        return $this->belongsToMany(PostCategory::class);
    }

    public function media()
    {
        return $this->hasMany(PostMedia::class);
    }

    public function getThumbnail()
    {
        // $this->thumbnail
        $media = $this->media->first()?->file_path;
        // $media=$this->media->file_path;
        if(\str_starts_with($media,'http')){
            return $media;
        }

        return '/storage/'.$media;
    }

public function getMediaType()
{
        $filePath = $this->media->first()?->file_path;
    $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
    if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif'])) {
        return 'image';
    } elseif (in_array($fileExtension, ['mp4', 'avi', 'mov', 'wmv'])) {
        return 'video';
    } elseif ($fileExtension === 'pdf') {
        return 'file';
    } else {
        return 'html';
    }

}
}
