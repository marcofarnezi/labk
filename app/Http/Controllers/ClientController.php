<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Repositories\ClientRepository;
use CodeProject\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $repository;
    private $service;

    public function __construct(ClientRepository $repository, ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }

    public function update($id, Request $request)
    {
        return $this->service->update($request->all(), $id);
    }
}
