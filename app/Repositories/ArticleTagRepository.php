<?php

namespace App\Repositories;

use App\Models\ArticleTag;
use App\Repositories\BaseRepository;

/**
 * Class ArticleTagRepository
 * @package App\Repositories
 * @version April 4, 2021, 8:01 pm UTC
*/

class ArticleTagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'article_id',
        'tag_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ArticleTag::class;
    }
}
