<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Message;

use App\Domain\Message\MessageNotFoundException;
use App\Domain\Message\MessageRepository;

use function PHPUnit\Framework\throwException;

class SQLMessageRepository implements MessageRepository
{
    public function __construct(\Illuminate\Database\Query\Builder $table)
    {
        $this->table = $table;
    }

    public function findAll()
    {
        return $this->table->select()->get();
    }

    public function findMessageOfId(int $id)
    {
        $messages = $this->table->select()->where('id', $id)->get();
        if(count($messages) > 0){
            return $messages[0];
        }
        else{
            throw new MessageNotFoundException();
        }
        
    }

    public function createMessage($message){
        $id = $this->table->insertGetId($message);
        return $this->findMessageOfId($id);
    }

    public function editMessageOfId(int $id, $message)
    {
        $message = $this->table->where('id', $id)->update($message);
        return $this->findMessageOfId($id);
    }

    public function deleteMessageOfId(int $id)
    {
        $this->table->where('id', $id)->delete();
    }
}
