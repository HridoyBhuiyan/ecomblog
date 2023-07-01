<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    public $table = "contact_form";
    public $primaryKey = "id";
    public $keyType = "int";
    public $incrementing = "true";
    public $timestamps = "true";
}
