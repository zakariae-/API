<?php

namespace App\Interfaces\Dto;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={
 *          "post"={
 *              "method"="POST",
 *              "path"="/user",
 *              "controller"="App\Interfaces\UserFacade::create"
 *          },
 *          "get"={
 *              "method"="GET",
 *              "path"="/user",
 *              "controller"="App\Interfaces\UserFacade::getAll"
 *          }
 *     },
 *     itemOperations={
 *          "get"={
 *              "method"="GET",
 *              "path"="/user/{id}.{_format}",
 *              "controller"="App\Interfaces\UserFacade::getTicketById",
 *              "defaults"={"_api_receive"=false}
 *          }
 *     }
 * )
 */
class UserDto
{
    /**
     * @var string Unique Identifier of the ticket
     *
     * @ApiProperty(identifier=true)
     * @Assert\NotBlank()
     */
    protected $id;

    /**
     * @var string Username
     *
     * @Assert\NotBlank
     */
    protected $username;

    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    protected $email;

    /**
     * @Assert\NotBlank()
     */
    protected $password;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @var string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @param string $username
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @var string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @var string
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @var string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
}