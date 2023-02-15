<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\GenreForBook
 *
 * @property int $id
 * @property int $genre_id
 * @property int $book_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook newQuery()
 * @method static \Illuminate\Database\Query\Builder|GenreForBook onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereGenreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenreForBook whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|GenreForBook withTrashed()
 * @method static \Illuminate\Database\Query\Builder|GenreForBook withoutTrashed()
 * @mixin \Eloquent
 */
class GenreForBook extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['genre_id', 'book_id'];
}
