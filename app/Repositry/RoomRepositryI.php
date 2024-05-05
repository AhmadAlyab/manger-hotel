<?php 
namespace App\Repositry;

use App\Models\Room;
use App\Models\Degeer;
use Illuminate\Pagination\LengthAwarePaginator;

interface RoomRepositryI
{
    public function room();
    public function degeer();
    public function store($request);
    public function update($request);
    public function delete($request);
}