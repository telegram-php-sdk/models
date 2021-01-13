<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\ChatMemberStatus;

class ChatMember extends Model {

    public function __construct(
        protected User $user,
        protected ChatMemberStatus $status,
        protected ?string $customTitle = null,
        protected ?bool $isAnonymous = null,
        protected ?bool $canBeEdited = null,
        protected ?bool $canPostMessages = null,
        protected ?bool $canEditMessages = null,
        protected ?bool $canDeleteMessages = null,
        protected ?bool $canRestrictMembers = null,
        protected ?bool $canPromoteMembers = null,
        protected ?bool $canChangeInfo = null,
        protected ?bool $canInviteUsers = null,
        protected ?bool $canPinMessages = null,
        protected ?bool $isMember = null,
        protected ?bool $canSendMessages = null,
        protected ?bool $canSendMediaMessages = null,
        protected ?bool $canSendPolls = null,
        protected ?bool $canSendOtherMessages = null,
        protected ?bool $canAddWebPagePreviews = null,
        protected ?int $untilDate = null,
    ) {}

    /**
     * @return User
     */
    public function getUser(): User {
        return $this->user;
    }

    /**
     * @param User $user
     * @return ChatMember
     */
    public function setUser(User $user): ChatMember {
        $this->user = $user;
        return $this;
    }

    /**
     * @return ChatMemberStatus
     */
    public function getStatus(): ChatMemberStatus {
        return $this->status;
    }

    /**
     * @param ChatMemberStatus $status
     * @return ChatMember
     */
    public function setStatus(ChatMemberStatus $status): ChatMember {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomTitle(): ?string {
        return $this->customTitle;
    }

    /**
     * @param string|null $customTitle
     * @return ChatMember
     */
    public function setCustomTitle(?string $customTitle): ChatMember {
        $this->customTitle = $customTitle;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsAnonymous(): ?bool {
        return $this->isAnonymous;
    }

    /**
     * @param bool|null $isAnonymous
     * @return ChatMember
     */
    public function setIsAnonymous(?bool $isAnonymous): ChatMember {
        $this->isAnonymous = $isAnonymous;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanBeEdited(): ?bool {
        return $this->canBeEdited;
    }

    /**
     * @param bool|null $canBeEdited
     * @return ChatMember
     */
    public function setCanBeEdited(?bool $canBeEdited): ChatMember {
        $this->canBeEdited = $canBeEdited;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanPostMessages(): ?bool {
        return $this->canPostMessages;
    }

    /**
     * @param bool|null $canPostMessages
     * @return ChatMember
     */
    public function setCanPostMessages(?bool $canPostMessages): ChatMember {
        $this->canPostMessages = $canPostMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanEditMessages(): ?bool {
        return $this->canEditMessages;
    }

    /**
     * @param bool|null $canEditMessages
     * @return ChatMember
     */
    public function setCanEditMessages(?bool $canEditMessages): ChatMember {
        $this->canEditMessages = $canEditMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanDeleteMessages(): ?bool {
        return $this->canDeleteMessages;
    }

    /**
     * @param bool|null $canDeleteMessages
     * @return ChatMember
     */
    public function setCanDeleteMessages(?bool $canDeleteMessages): ChatMember {
        $this->canDeleteMessages = $canDeleteMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanRestrictMembers(): ?bool {
        return $this->canRestrictMembers;
    }

    /**
     * @param bool|null $canRestrictMembers
     * @return ChatMember
     */
    public function setCanRestrictMembers(?bool $canRestrictMembers): ChatMember {
        $this->canRestrictMembers = $canRestrictMembers;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanPromoteMembers(): ?bool {
        return $this->canPromoteMembers;
    }

    /**
     * @param bool|null $canPromoteMembers
     * @return ChatMember
     */
    public function setCanPromoteMembers(?bool $canPromoteMembers): ChatMember {
        $this->canPromoteMembers = $canPromoteMembers;
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
     * @return ChatMember
     */
    public function setCanChangeInfo(?bool $canChangeInfo): ChatMember {
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
     * @return ChatMember
     */
    public function setCanInviteUsers(?bool $canInviteUsers): ChatMember {
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
     * @return ChatMember
     */
    public function setCanPinMessages(?bool $canPinMessages): ChatMember {
        $this->canPinMessages = $canPinMessages;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsMember(): ?bool {
        return $this->isMember;
    }

    /**
     * @param bool|null $isMember
     * @return ChatMember
     */
    public function setIsMember(?bool $isMember): ChatMember {
        $this->isMember = $isMember;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSendMessages(): ?bool {
        return $this->canSendMessages;
    }

    /**
     * @param bool|null $canSendMessages
     * @return ChatMember
     */
    public function setCanSendMessages(?bool $canSendMessages): ChatMember {
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
     * @return ChatMember
     */
    public function setCanSendMediaMessages(?bool $canSendMediaMessages): ChatMember {
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
     * @return ChatMember
     */
    public function setCanSendPolls(?bool $canSendPolls): ChatMember {
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
     * @return ChatMember
     */
    public function setCanSendOtherMessages(?bool $canSendOtherMessages): ChatMember {
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
     * @return ChatMember
     */
    public function setCanAddWebPagePreviews(?bool $canAddWebPagePreviews): ChatMember {
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUntilDate(): ?int {
        return $this->untilDate;
    }

    /**
     * @param int|null $untilDate
     * @return ChatMember
     */
    public function setUntilDate(?int $untilDate): ChatMember {
        $this->untilDate = $untilDate;
        return $this;
    }

}