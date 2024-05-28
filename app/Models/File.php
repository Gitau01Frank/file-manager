<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\hasCreatorAndUpdater;

class File extends Model
{
    use HasFactory, NodeTrait, SoftDeletes, hasCreatorAndUpdater;
}
