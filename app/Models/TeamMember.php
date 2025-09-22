<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TeamMember extends Model implements HasMedia
{
    use InteractsWithMedia, HasFactory;

    protected $fillable = ['name', 'position'];

    public function getImage(){
        return $this->getFirstMediaUrl('photos') ?? 'https://via.placeholder.com/150';
    }

    // public function registerMediaConversions(?Media $media = null): void
    // {
    //     $this
    //         ->addMediaConversion('preview')
    //         ->fit(Fit::Contain, 500, 500)
    //         ->nonQueued();
    // }
}
