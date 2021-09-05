<?php


namespace App\Repositories\Contracts;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositories
{
    /**
     * @param array|null $related
     * @return Collection
     */
    public function all(array $related = null): Collection;

    /**
     * @param $id
     * @param array|null $related
     * @return Model|null
     */
    public function find($id, array $related = null): ?Model;

    /**
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * @param array $data
     * @return Model
     */
    public function update($id, array $data): Model;

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
