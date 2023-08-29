<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    use HasFactory;

    protected $fillable = ['model','image', 'description', 'price'];

    public function getId(): int{
        return $this->attributes['id'];
        }
    
    public function setId($id) : void{
    $this->attributes['id'] = $id;
    }

    public function getModel(): string{
        return $this->attributes['model'];
        }
        
    public function setModel($model) : void{
    $this->attributes['model'] = $model;
    }

    public function getImage(): string{
        return $this->attributes['image'];
        }
        
    public function setImage($image) : void{
    $this->attributes['image'] = $image;
    }

    public function getDescription(): string{
        return $this->attributes['description'];
        }
        
    public function setDescription($description) : void{
    $this->attributes['description'] = $description;
    }

    public function getPrice(): float{
        return $this->attributes['price'];
        }
        
    public function setPrice($price) : void{
    $this->attributes['price'] = $price;
    }
}