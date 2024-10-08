<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends Model
{
    /**
     * REVIEW ATTRIBUTES
     * $this->attributes['id'] - int - contains the review primary key (id)
     * $this->attributes['rating'] - int - contains the review rating
     * $this->attributes['title'] - string - contains the review title
     * $this->attributes['description'] - string - contains the review description
     * $this->attributes['created_at'] - string - contains the review creation date
     * $this->attributes['updated_at'] - string - contains the review update date
     */
    protected $fillable = ['rating', 'title', 'description'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'rating' => 'required|integer',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getRating(): int
    {
        return $this->attributes['rating'];
    }

    public function setRating(int $rating): void
    {
        $this->attributes['rating'] = $rating;
    }

    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function setTitle(string $title): void
    {
        $this->attributes['title'] = $title;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getCreatedAt(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt(): string
    {
        return $this->attributes['updated_at'];
    }

}
