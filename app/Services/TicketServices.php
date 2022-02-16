<?php

namespace App\Services;

use App\Events\TicketFoiCriado;
use App\Models\Ticket;

class TicketServices
{
    public function lancarTicket(string $assunto, string $ocorrencia): Ticket
    {
        try {
            $ticket = Ticket::create([
                'assunto' => $assunto,
                'ocorrencia' => $ocorrencia
            ]);

            $event = new TicketFoiCriado($ticket);

            broadcast($event);

            return $ticket;
        } catch (\Throwable $e) {
            return $e;
        }
    }
}
