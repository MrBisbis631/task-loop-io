<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;

final class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render("Clients/Index", [
            "clients" => ClientResource::collection(Client::paginate()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): void {}

    /**
     * Display the specified resource.
     */
    public function show(Client $client): void {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client): void {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client): void {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): void {}
}
