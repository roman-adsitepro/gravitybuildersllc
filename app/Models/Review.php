<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Review extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $fillable = [
        'status',
        'name',
        'title',
        'rate',
        'message',
        'data'
    ];

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLIC = 'public';
    const STATUS_FEATURED = 'featured';

    protected function casts(): array
    {
        return [
            'data' => 'array'
        ];
    }

    public static function statuses(): array
    {
        return [
            self::STATUS_DRAFT => 'Draft',
            self::STATUS_PUBLIC => 'Public',
            self::STATUS_FEATURED => 'Featured',
        ];
    }

    public function scopePublic($query)
    {
        return $query->where('status', self::STATUS_PUBLIC);
    }

    public function scopeFeatured($query)
    {
        return $query->where('status', self::STATUS_FEATURED);
    }

    public function scopeDraft($query)
    {
        return $query->where('status', self::STATUS_DRAFT);
    }

    public function isPublic(): bool
    {
        return $this->status === self::STATUS_PUBLIC;
    }

    public function isFeatured(): bool
    {
        return $this->status === self::STATUS_FEATURED;
    }

    public function isDraft(): bool
    {
        return $this->status === self::STATUS_DRAFT;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')
            ->singleFile()
            ->withResponsiveImages()
            ->useFallbackUrl('/images/snac-placeholder.webp')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('preview')
                    ->width(300)
                    ->height(300)
                    ->sharpen(10);
            });

        $this->addMediaCollection('company_logo')
            ->singleFile()
            ->withResponsiveImages()
            ->useFallbackUrl('/images/snac-placeholder.webp')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('preview')
                    ->width(300)
                    ->height(300)
                    ->sharpen(10);
            });
    }

}
