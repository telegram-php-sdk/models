<?php


namespace Infureal\Telegram\Models;


class ChatPermissions extends Model {

    public function __construct(
        protected ?bool $canSendMessages = null,
        protected ?bool $canSendMediaMessages = null,
        protected ?bool $canSendPolls = null,
        protected ?bool $canSendOtherMessages = null,
        protected ?bool $canAddWebPagePreviews = null,
        protected ?bool $canChangeInfo = null,
        protected ?bool $canInviteUsers = null,
        protected ?bool $canPinMessages = null,
    ) {}

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool {
        return $this->canSendMessages;
    }

    /**
     * @param bool|null $canSendMessages
     * @return ChatPermissions
     */
    public function setCanSendMessages(?bool $canSendMessages): ChatPermissions {
        $this->canSendMessages = $canSendMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMediaMessages(): ?bool {
        return $this->canSendMediaMessages;
    }

    /**
     * @param bool|null $canSendMediaMessages
     * @return ChatPermissions
     */
    public function setCanSendMediaMessages(?bool $canSendMediaMessages): ChatPermissions {
        $this->canSendMediaMessages = $canSendMediaMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSendPolls(): ?bool {
        return $this->canSendPolls;
    }

    /**
     * @param bool|null $canSendPolls
     * @return ChatPermissions
     */
    public function setCanSendPolls(?bool $canSendPolls): ChatPermissions {
        $this->canSendPolls = $canSendPolls;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSendOtherMessages(): ?bool {
        return $this->canSendOtherMessages;
    }

    /**
     * @param bool|null $canSendOtherMessages
     * @return ChatPermissions
     */
    public function setCanSendOtherMessages(?bool $canSendOtherMessages): ChatPermissions {
        $this->canSendOtherMessages = $canSendOtherMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanAddWebPagePreviews(): ?bool {
        return $this->canAddWebPagePreviews;
    }

    /**
     * @param bool|null $canAddWebPagePreviews
     * @return ChatPermissions
     */
    public function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): ChatPermissions {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanChangeInfo(): ?bool {
        return $this->canChangeInfo;
    }

    /**
     * @param bool|null $canChangeInfo
     * @return ChatPermissions
     */
    public function setCanChangeInfo(?bool $canChangeInfo): ChatPermissions {
        $this->canChangeInfo = $canChangeInfo;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanInviteUsers(): ?bool {
        return $this->canInviteUsers;
    }

    /**
     * @param bool|null $canInviteUsers
     * @return ChatPermissions
     */
    public function setCanInviteUsers(?bool $canInviteUsers): ChatPermissions {
        $this->canInviteUsers = $canInviteUsers;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanPinMessages(): ?bool {
        return $this->canPinMessages;
    }

    /**
     * @param bool|null $canPinMessages
     * @return ChatPermissions
     */
    public function setCanPinMessages(?bool $canPinMessages): ChatPermissions {
        $this->canPinMessages = $canPinMessages;
        return $this;
    }

}