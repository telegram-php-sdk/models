<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Enums\ChatType;

class Chat extends Model {

    public function __construct(
        protected int $id,
        protected ChatType $type,
        protected ?string $title = null,
        protected ?string $username = null,
        protected ?string $firstName = null,
        protected ?string $lastName = null,
        protected ?ChatPhoto $chatPhoto = null,
        protected ?string $bio = null,
        protected ?string $description = null,
        protected ?string $inviteLink = null,
        protected ?Message $pinnedMessage = null,
        protected ?ChatPermissions $permissions = null,
        protected ?int $slowModeDelay = null,
        protected ?string $stickerSetName = null,
        protected ?bool $canSetStickerSet = null,
        protected ?int $linkedChatId = null,
        protected ?ChatLocation $location = null,
    ) {}

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Chat
     */
    public function setId(int $id): Chat {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ChatType
     */
    public function getType(): ChatType {
        return $this->type;
    }

    /**
     * @param ChatType $type
     * @return Chat
     */
    public function setType(ChatType $type): Chat {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Chat
     */
    public function setTitle(?string $title): Chat {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * @param string|null $username
     * @return Chat
     */
    public function setUsername(?string $username): Chat {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Chat
     */
    public function setFirstName(?string $firstName): Chat {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Chat
     */
    public function setLastName(?string $lastName): Chat {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return ChatPhoto|null
     */
    public function getChatPhoto(): ?ChatPhoto {
        return $this->chatPhoto;
    }

    /**
     * @param ChatPhoto|null $chatPhoto
     * @return Chat
     */
    public function setChatPhoto(?ChatPhoto $chatPhoto): Chat {
        $this->chatPhoto = $chatPhoto;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBio(): ?string {
        return $this->bio;
    }

    /**
     * @param string|null $bio
     * @return Chat
     */
    public function setBio(?string $bio): Chat {
        $this->bio = $bio;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Chat
     */
    public function setDescription(?string $description): Chat {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInviteLink(): ?string {
        return $this->inviteLink;
    }

    /**
     * @param string|null $inviteLink
     * @return Chat
     */
    public function setInviteLink(?string $inviteLink): Chat {
        $this->inviteLink = $inviteLink;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getPinnedMessage(): ?Message {
        return $this->pinnedMessage;
    }

    /**
     * @param Message|null $pinnedMessage
     * @return Chat
     */
    public function setPinnedMessage(?Message $pinnedMessage): Chat {
        $this->pinnedMessage = $pinnedMessage;
        return $this;
    }

    /**
     * @return ChatPermissions|null
     */
    public function getPermissions(): ?ChatPermissions {
        return $this->permissions;
    }

    /**
     * @param ChatPermissions|null $permissions
     * @return Chat
     */
    public function setPermissions(?ChatPermissions $permissions): Chat {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSlowModeDelay(): ?int {
        return $this->slowModeDelay;
    }

    /**
     * @param int|null $slowModeDelay
     * @return Chat
     */
    public function setSlowModeDelay(?int $slowModeDelay): Chat {
        $this->slowModeDelay = $slowModeDelay;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStickerSetName(): ?string {
        return $this->stickerSetName;
    }

    /**
     * @param string|null $stickerSetName
     * @return Chat
     */
    public function setStickerSetName(?string $stickerSetName): Chat {
        $this->stickerSetName = $stickerSetName;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCanSetStickerSet(): ?bool {
        return $this->canSetStickerSet;
    }

    /**
     * @param bool|null $canSetStickerSet
     * @return Chat
     */
    public function setCanSetStickerSet(?bool $canSetStickerSet): Chat {
        $this->canSetStickerSet = $canSetStickerSet;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLinkedChatId(): ?int {
        return $this->linkedChatId;
    }

    /**
     * @param int|null $linkedChatId
     * @return Chat
     */
    public function setLinkedChatId(?int $linkedChatId): Chat {
        $this->linkedChatId = $linkedChatId;
        return $this;
    }

    /**
     * @return ChatLocation|null
     */
    public function getLocation(): ?ChatLocation {
        return $this->location;
    }

    /**
     * @param ChatLocation|null $location
     * @return Chat
     */
    public function setLocation(?ChatLocation $location): Chat {
        $this->location = $location;
        return $this;
    }

}