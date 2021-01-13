<?php


namespace Infureal\Telegram\Models;


class LoginUrl extends Model {

    public function __construct(
        protected string $url,
        protected ?string $forwardText = null,
        protected ?string $botUsername = null,
        protected ?bool $requestWriteAccess = null,
    ) {}

    /**
     * @return string
     */
    public function getUrl(): string {
        return $this->url;
    }

    /**
     * @param string $url
     * @return LoginUrl
     */
    public function setUrl(string $url): LoginUrl {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardText(): ?string {
        return $this->forwardText;
    }

    /**
     * @param string|null $forwardText
     * @return LoginUrl
     */
    public function setForwardText(?string $forwardText): LoginUrl {
        $this->forwardText = $forwardText;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBotUsername(): ?string {
        return $this->botUsername;
    }

    /**
     * @param string|null $botUsername
     * @return LoginUrl
     */
    public function setBotUsername(?string $botUsername): LoginUrl {
        $this->botUsername = $botUsername;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRequestWriteAccess(): ?bool {
        return $this->requestWriteAccess;
    }

    /**
     * @param bool|null $requestWriteAccess
     * @return LoginUrl
     */
    public function setRequestWriteAccess(?bool $requestWriteAccess): LoginUrl {
        $this->requestWriteAccess = $requestWriteAccess;
        return $this;
    }

}