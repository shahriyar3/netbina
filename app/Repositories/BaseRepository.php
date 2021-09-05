<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $related = null): Collection
    {
        return $this->model->all();
    }

    public function find($id, array $related = null): ?Model
    {
        return $this->model->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update($id, array $data): Model
    {
        $model = $this->model->findById($id);
        return $model->update($data);
    }

    public function delete($id)
    {
        $model = $this->model->findById($id);
        $model->delete();
    }
}
