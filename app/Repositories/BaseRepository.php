<?php

namespace App\Repositories;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


abstract class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     *
     * @throws \Exception
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Get searchable fields array
     *
     * @return array
     */
    abstract public function getFieldsSearchable();

    /**
     * Configure the Model
     *
     * @return string
     */
    abstract public function model();

    /**
     * Make Model instance
     *
     * @throws \Exception
     *
     * @return Model
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * Paginate records for scaffold.
     *
     * @param int $perPage
     * @param array $columns
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage, $columns = ['*'])
    {
        $query = $this->allQuery();

        return $query->paginate($perPage, $columns);
    }

    /**
     * Build a query for retrieving all records.
     *
     * @param array $search
     * @param int|null $skip
     * @param int|null $limit
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function allQuery($search = [], $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        /*if (count($search)) {
            foreach($search as $key => $value) {
                if (in_array($key, $this->getFieldsSearchable())) {
                    $query->where($key, $value);
                }
            }
        }*/
        //dd($search);
        if (count($search)) {
            
            foreach($search as $key => $value) {   
                
                switch ($key) {                    
                    case 'OR':
                        //dd($value);
                        $query->orWhere(function($query) use ($value){                            
                            $i = 0;
                            foreach ($value as $key_1 => $or1) {                                 
                                $query->where($key_1, $or1[0], $or1[1]);    
                            }
                        });
                        break;
                    case 'BETWEEN':
                        // Added by Priyanka
                        foreach ($value as $key_1 => $or1) { 
                            if (in_array($key_1, $this->getFieldsSearchable())) {
                                $query->whereBetween($key_1, [$or1[0], $or1[1]]);
                            }
                        }

                        break;
                    case 'IN':
                        foreach ($value as $key_1 => $in1) {

                            if (in_array($in1[0], $this->getFieldsSearchable())/* || $key == 'or'*/) {
                                $query->whereIn($in1[0], $in1[1]);
                            }
                        }
                        break;
                    case 'LIKE': //$conditions = ['LIKE' => ['fullname'=>trim($input['fullname'])]];
                        $query->where(function($query) use ($value){                            
                            $i = 0;
                            foreach ($value as $key_1 => $or1) {                                   
                                if($i==0) {
                                    if (in_array($key_1, $this->getFieldsSearchable()))                                        
                                            $query->where($key_1, 'like' ,"%".$or1."%");
                                }else {
                                    if (in_array($key_1, $this->getFieldsSearchable()))                                        
                                            $query->orWhere($key_1, 'like' ,"%".$or1."%");
                                }                                
                                $i++;
                            }
                        });
                        break;
                    default:
                        if (in_array($key, $this->getFieldsSearchable())/* || $key == 'or'*/) {

                            $query->where($key, $value[0], $value[1]);

                        }
                        break;
                }
            }
        }

        if (!is_null($skip)) {
            $query->skip($skip);
        }

        if (!is_null($limit)) {
            $query->limit($limit);
        }
        /*$sql = Str::replaceArray('?', $query->getBindings(), $query->toSql());
        dd($sql);*/
        return $query;
    }

    /**
     * Retrieve all records with given filter criteria
     *
     * @param array $search
     * @param int|null $skip
     * @param int|null $limit
     * @param array $columns
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);

        return $query->get($columns);
    }

    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }

    /**
     * Find model record for given id
     *
     * @param int $id
     * @param array $columns
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     */
    public function find($id, $columns = ['*'])
    {
        $query = $this->model->newQuery();

        return $query->find($id, $columns);
    }

    /**
     * Update model record for given id
     *
     * @param array $input
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($input);

        $model->save();

        return $model;
    }

    /**
     * @param int $id
     *
     * @throws \Exception
     *
     * @return bool|mixed|null
     */
    public function delete($id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        return $model->delete();
    }
}
