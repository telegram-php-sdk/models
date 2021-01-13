<?php


namespace Infureal\Telegram\Models;


class EncryptedCredentials extends Model {
    /**
     * @return string
     */
    public function getData(): string {
        return $this->data;
    }

    /**
     * @param string $data
     * @return EncryptedCredentials
     */
    public function setData(string $data): EncryptedCredentials {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getHash(): string {
        return $this->hash;
    }

    /**
     * @param string $hash
     * @return EncryptedCredentials
     */
    public function setHash(string $hash): EncryptedCredentials {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret(): string {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return EncryptedCredentials
     */
    public function setSecret(string $secret): EncryptedCredentials {
        $this->secret = $secret;
        return $this;
    }

    public function __construct(
        protected string $data,
        protected string $hash,
        protected string $secret,
    ) {}

}