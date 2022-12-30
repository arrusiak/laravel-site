<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

class AuthResource extends JsonResource
{
    /**
     * @var mixed
     */
    private $id;
    /**
     * @var mixed
     */
    private $firstName;
    /**
     * @var mixed
     */
    private $lastName;
    /**
     * @var mixed
     */
    private $profilePic;
    /**
     * @var mixed
     */
    private $age;
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $password;
    /**
     * @var mixed
     */
    private $created_at;
    /**
     * @var mixed
     */
    private $updated_at;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {

        return [
            'id' => $this->id,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'profile_pic' => $this->profilePic,
            'age' => $this->age,
            'email' => $this->email,
            'password' => $this->password,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
