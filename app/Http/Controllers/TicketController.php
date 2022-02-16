<?php

namespace App\Http\Controllers;

use App\Services\TicketServices;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    private TicketServices $service;

    public function __construct(TicketServices $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        $ticket = $this->service->lancarTicket(
            $request->assunto,
            $request->ocorrencia
        );

        return response()->json($ticket);
    }
}
