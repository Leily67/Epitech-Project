<?php

declare(strict_types=1);

namespace App\Application\Actions\Message;

use Psr\Http\Message\ResponseInterface as Response;

class CreateMessageAction extends MessageAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
     //   $this->logger->info("tchoin" + json_encode($this->request->getParsedBody()));
        return $this->respondWithData($this->messageRepository->createMessage($this->request->getParsedBody()));
    }
}
