<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPortfolios extends Model
{
    use HasFactory;

    protected $table = 'projectportfolios';
    protected $fillable = [
        'project_id',
        'portfolio_id',
        'project_details'
    ];
}
