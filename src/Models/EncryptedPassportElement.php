<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\PassportFileCollection;
use Infureal\Telegram\Enums\EncryptedPassportElementType;

class EncryptedPassportElement extends Model {

    public function __construct(
        protected EncryptedPassportElementType $type,
        protected string $hash,
        protected ?string $data = null,
        protected ?string $phoneNumber = null,
        protected ?string $email = null,
        protected ?PassportFileCollection $files = null,
        protected ?PassportFile $frontSide = null,
        protected ?PassportFile $reverseSide = null,
        protected ?PassportFile $selfie = null,
        protected ?PassportFileCollection $translation = null,
    ) {}

    /**
     * @return EncryptedPassportElementType
     */
    public function getType(): EncryptedPassportElementType {
        return $this->type;
    }

    /**
     * @param EncryptedPassportElementType $type
     * @return EncryptedPassportElement
     */
    public function setType(EncryptedPassportElementType $type): EncryptedPassportElement {
        $this->type = $type;
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
     * @return EncryptedPassportElement
     */
    public function setHash(string $hash): EncryptedPassportElement {
        $this->hash = $hash;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * @param string|null $data
     * @return EncryptedPassportElement
     */
    public function setData(?string $data): EncryptedPassportElement {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     * @return EncryptedPassportElement
     */
    public function setPhoneNumber(?string $phoneNumber): EncryptedPassportElement {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return EncryptedPassportElement
     */
    public function setEmail(?string $email): EncryptedPassportElement {
        $this->email = $email;
        return $this;
    }

    /**
     * @return PassportFileCollection|null
     */
    public function getFiles(): ?PassportFileCollection {
        return $this->files;
    }

    /**
     * @param PassportFileCollection|null $files
     * @return EncryptedPassportElement
     */
    public function setFiles(?PassportFileCollection $files): EncryptedPassportElement {
        $this->files = $files;
        return $this;
    }

    /**
     * @return PassportFile|null
     */
    public function getFrontSide(): ?PassportFile {
        return $this->frontSide;
    }

    /**
     * @param PassportFile|null $frontSide
     * @return EncryptedPassportElement
     */
    public function setFrontSide(?PassportFile $frontSide): EncryptedPassportElement {
        $this->frontSide = $frontSide;
        return $this;
    }

    /**
     * @return PassportFile|null
     */
    public function getReverseSide(): ?PassportFile {
        return $this->reverseSide;
    }

    /**
     * @param PassportFile|null $reverseSide
     * @return EncryptedPassportElement
     */
    public function setReverseSide(?PassportFile $reverseSide): EncryptedPassportElement {
        $this->reverseSide = $reverseSide;
        return $this;
    }

    /**
     * @return PassportFile|null
     */
    public function getSelfie(): ?PassportFile {
        return $this->selfie;
    }

    /**
     * @param PassportFile|null $selfie
     * @return EncryptedPassportElement
     */
    public function setSelfie(?PassportFile $selfie): EncryptedPassportElement {
        $this->selfie = $selfie;
        return $this;
    }

    /**
     * @return PassportFileCollection|null
     */
    public function getTranslation(): ?PassportFileCollection {
        return $this->translation;
    }

    /**
     * @param PassportFileCollection|null $translation
     * @return EncryptedPassportElement
     */
    public function setTranslation(?PassportFileCollection $translation): EncryptedPassportElement {
        $this->translation = $translation;
        return $this;
    }

}