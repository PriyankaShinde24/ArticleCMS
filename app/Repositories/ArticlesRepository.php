<?php

namespace App\Repositories;

use App\Models\Articles;
use App\Repositories\BaseRepository;

/**
 * Class ArticlesRepository
 * @package App\Repositories
 * @version April 4, 2021, 7:32 pm UTC
*/

class ArticlesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'title',
        'description',
        'image'
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
        return Articles::class;
    }
}
