<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Patient extends Model // Changed class name to 'Patient'
{
    use HasFactory;
 
    protected $fillable = [
        'name', // Changed 'title' to 'name'
        'age', // Added 'age' field
        'gender', // Added 'gender' field
        'address' // Changed 'description' to 'address'
    ];
}
