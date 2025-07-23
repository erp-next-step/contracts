<?php

namespace Contracts\Events;

use Contracts\DTOs\UserDTO;

class UserRegistered
{
    public function __construct(public UserDTO $user) {}

    public static function fromArray(array $payload): self
    {
        return new self(UserDTO::fromArray($payload['user']));
    }

    public function toArray(): array
    {
        return ['user' => $this->user->toArray()];
    }
}
