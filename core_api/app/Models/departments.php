<?php
// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class departments extends Model
{use HasFactory;
    protected $table = 'departments';
      protected $connection = 'mysql_external';
     protected $fillable = ['department_name'];
}
