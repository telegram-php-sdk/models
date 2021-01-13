<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\EncryptedPassportElementCollection;

class PassportData extends Model {

    public function __construct(
        protected EncryptedPassportElementCollection $data,
        protected EncryptedCredentials $credentials,
    ) {}

    /**
     * @return EncryptedPassportElementCollection
     */
    public function getData(): EncryptedPassportElementCollection {
        return $this->data;
    }

    /**
     * @param EncryptedPassportElementCollection $data
     * @return PassportData
     */
    public function setData(EncryptedPassportElementCollection $data): PassportData {
        $this->data = $data;
        return $this;
    }

    /**
     * @return EncryptedCredentials
     */
    public function getCredentials(): EncryptedCredentials {
        return $this->credentials;
    }

    /**
     * @param EncryptedCredentials $credentials
     * @return PassportData
     */
    public function setCredentials(EncryptedCredentials $credentials): PassportData {
        $this->credentials = $credentials;
        return $this;
    }

}