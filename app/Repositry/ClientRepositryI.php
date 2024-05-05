<?php 
namespace App\Repositry;

interface ClientRepositryI{
    public function client();
    public function gender();
    public function room();
    public function store($request);
    public function edit($id);
    public function update($request);
    public function delete($request);
}