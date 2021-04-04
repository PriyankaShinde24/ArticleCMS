<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArticleTag
 * @package App\Models
 * @version April 4, 2021, 8:01 pm UTC
 *
 * @property \App\Models\Article $article
 * @property \App\Models\Tag $tag
 * @property integer $article_id
 * @property integer $tag_id
 */
class ArticleTag extends Model
{
    use SoftDeletes;

    public $table = 'article_tags';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'article_id',
        'tag_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'article_id' => 'integer',
        'tag_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'article_id' => 'required',
        'tag_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class, 'article_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tag()
    {
        return $this->belongsTo(\App\Models\Tag::class, 'tag_id');
    }
}
