<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\PassportElementErrorSource;

abstract class PassportElementError extends Model {

    public function __construct(
        protected PassportElementErrorSource $source,
        protected string $type,
        protected string $message,
    ) {}

    /**
     * @return string
     */
    public function getMessage(): string {
        return $this->message;
    }

    /**
     * @param string $message
     * @return PassportElementError
     */
    public function setMessage(string $message): PassportElementError {
        $this->message = $message;
        return $this;
    }

    /**
     * @return PassportElementErrorSource
     */
    public function getSource(): PassportElementErrorSource {
        return $this->source;
    }

    /**
     * @param PassportElementErrorSource $source
     * @return PassportElementError
     */
    public function setSource(PassportElementErrorSource $source): PassportElementError {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PassportElementError
     */
    public function setType(string $type): PassportElementError {
        $this->type = $type;
        return $this;
    }

}