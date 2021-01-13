<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Collections\PhotoSizeCollection;
use Infureal\Telegram\Collections\UserCollection;

class Message extends Model {

    public function __construct(
        protected int $messageId,
        protected int $date,
        protected Chat $chat,
        protected ?Chat $senderChat = null,
        protected ?User $from = null,
        protected ?User $forwardedFrom = null,
        protected ?Chat $forwardedFromChat = null,
        protected ?int $forwardedFromMessageId = null,
        protected ?string $forwardSignature = null,
        protected ?string $forwardSenderName = null,
        protected ?int $forwardDate = null,
        protected ?Message $replyToMessage = null,
        protected ?User $viaBot = null,
        protected ?int $editDate = null,
        protected ?string $mediaGroupId = null,
        protected ?string $authorSignature = null,
        protected ?string $text = null,
        protected ?MessageEntityCollection $entities = null,
        protected ?Animation $animation = null,
        protected ?Audio $audio = null,
        protected ?Document $document = null,
        protected ?PhotoSizeCollection $photo = null,
        protected ?Sticker $sticker = null,
        protected ?Video $video = null,
        protected ?VideoNote $videoNote = null,
        protected ?Voice $voice = null,
        protected ?string $caption = null,
        protected ?MessageEntityCollection $captionEntities = null,
        protected ?Contact $contact= null,
        protected ?Dice $dice = null,
        protected ?Game $game = null,
        protected ?Poll $poll = null,
        protected ?Venue $venue = null,
        protected ?Location $location = null,
        protected ?UserCollection $newChatMembers = null,
        protected ?User $leftChatMember = null,
        protected ?string $newChatTitle = null,
        protected ?PhotoSizeCollection $newChatPhoto = null,
        protected ?bool $deleteChatPhoto = null,
        protected ?bool $groupChatCreated = null,
        protected ?bool $supergroupChatCreated = null,
        protected ?bool $channelChatCreated = null,
        protected ?int $migrateToChatId = null,
        protected ?int $migrateFromChatId = null,
        protected ?Message $pinnedMessage = null,
        protected ?Invoice $invoice = null,
        protected ?SuccessfulPayment $successfulPayment = null,
        protected ?string $connectedWebsite = null,
        protected ?PassportData $passportData = null,
        protected ?ProximityAlertTriggered $proximityAlertTriggered = null,
        protected ?InlineKeyboardMarkup $replyMarkup = null,
    ) {}

    /**
     * @return int
     */
    public function getMessageId(): int {
        return $this->messageId;
    }

    /**
     * @param int $messageId
     * @return Message
     */
    public function setMessageId(int $messageId): Message {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDate(): int {
        return $this->date;
    }

    /**
     * @param int $date
     * @return Message
     */
    public function setDate(int $date): Message {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Chat
     */
    public function getChat(): Chat {
        return $this->chat;
    }

    /**
     * @param Chat $chat
     * @return Message
     */
    public function setChat(Chat $chat): Message {
        $this->chat = $chat;
        return $this;
    }

    /**
     * @return Chat|null
     */
    public function getSenderChat(): ?Chat {
        return $this->senderChat;
    }

    /**
     * @param Chat|null $senderChat
     * @return Message
     */
    public function setSenderChat(?Chat $senderChat): Message {
        $this->senderChat = $senderChat;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getFrom(): ?User {
        return $this->from;
    }

    /**
     * @param User|null $from
     * @return Message
     */
    public function setFrom(?User $from): Message {
        $this->from = $from;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getForwardedFrom(): ?User {
        return $this->forwardedFrom;
    }

    /**
     * @param User|null $forwardedFrom
     * @return Message
     */
    public function setForwardedFrom(?User $forwardedFrom): Message {
        $this->forwardedFrom = $forwardedFrom;
        return $this;
    }

    /**
     * @return Chat|null
     */
    public function getForwardedFromChat(): ?Chat {
        return $this->forwardedFromChat;
    }

    /**
     * @param Chat|null $forwardedFromChat
     * @return Message
     */
    public function setForwardedFromChat(?Chat $forwardedFromChat): Message {
        $this->forwardedFromChat = $forwardedFromChat;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getForwardedFromMessageId(): ?int {
        return $this->forwardedFromMessageId;
    }

    /**
     * @param int|null $forwardedFromMessageId
     * @return Message
     */
    public function setForwardedFromMessageId(?int $forwardedFromMessageId): Message {
        $this->forwardedFromMessageId = $forwardedFromMessageId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardSignature(): ?string {
        return $this->forwardSignature;
    }

    /**
     * @param string|null $forwardSignature
     * @return Message
     */
    public function setForwardSignature(?string $forwardSignature): Message {
        $this->forwardSignature = $forwardSignature;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getForwardSenderName(): ?string {
        return $this->forwardSenderName;
    }

    /**
     * @param string|null $forwardSenderName
     * @return Message
     */
    public function setForwardSenderName(?string $forwardSenderName): Message {
        $this->forwardSenderName = $forwardSenderName;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getForwardDate(): ?int {
        return $this->forwardDate;
    }

    /**
     * @param int|null $forwardDate
     * @return Message
     */
    public function setForwardDate(?int $forwardDate): Message {
        $this->forwardDate = $forwardDate;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getReplyToMessage(): ?Message {
        return $this->replyToMessage;
    }

    /**
     * @param Message|null $replyToMessage
     * @return Message
     */
    public function setReplyToMessage(?Message $replyToMessage): Message {
        $this->replyToMessage = $replyToMessage;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getViaBot(): ?User {
        return $this->viaBot;
    }

    /**
     * @param User|null $viaBot
     * @return Message
     */
    public function setViaBot(?User $viaBot): Message {
        $this->viaBot = $viaBot;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEditDate(): ?int {
        return $this->editDate;
    }

    /**
     * @param int|null $editDate
     * @return Message
     */
    public function setEditDate(?int $editDate): Message {
        $this->editDate = $editDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMediaGroupId(): ?string {
        return $this->mediaGroupId;
    }

    /**
     * @param string|null $mediaGroupId
     * @return Message
     */
    public function setMediaGroupId(?string $mediaGroupId): Message {
        $this->mediaGroupId = $mediaGroupId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthorSignature(): ?string {
        return $this->authorSignature;
    }

    /**
     * @param string|null $authorSignature
     * @return Message
     */
    public function setAuthorSignature(?string $authorSignature): Message {
        $this->authorSignature = $authorSignature;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * @param string|null $text
     * @return Message
     */
    public function setText(?string $text): Message {
        $this->text = $text;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getEntities(): ?MessageEntityCollection {
        return $this->entities;
    }

    /**
     * @param MessageEntityCollection|null $entities
     * @return Message
     */
    public function setEntities(?MessageEntityCollection $entities): Message {
        $this->entities = $entities;
        return $this;
    }

    /**
     * @return Animation|null
     */
    public function getAnimation(): ?Animation {
        return $this->animation;
    }

    /**
     * @param Animation|null $animation
     * @return Message
     */
    public function setAnimation(?Animation $animation): Message {
        $this->animation = $animation;
        return $this;
    }

    /**
     * @return Audio|null
     */
    public function getAudio(): ?Audio {
        return $this->audio;
    }

    /**
     * @param Audio|null $audio
     * @return Message
     */
    public function setAudio(?Audio $audio): Message {
        $this->audio = $audio;
        return $this;
    }

    /**
     * @return Document|null
     */
    public function getDocument(): ?Document {
        return $this->document;
    }

    /**
     * @param Document|null $document
     * @return Message
     */
    public function setDocument(?Document $document): Message {
        $this->document = $document;
        return $this;
    }

    /**
     * @return PhotoSizeCollection|null
     */
    public function getPhoto(): ?PhotoSizeCollection {
        return $this->photo;
    }

    /**
     * @param PhotoSizeCollection|null $photo
     * @return Message
     */
    public function setPhoto(?PhotoSizeCollection $photo): Message {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return Sticker|null
     */
    public function getSticker(): ?Sticker {
        return $this->sticker;
    }

    /**
     * @param Sticker|null $sticker
     * @return Message
     */
    public function setSticker(?Sticker $sticker): Message {
        $this->sticker = $sticker;
        return $this;
    }

    /**
     * @return Video|null
     */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * @param Video|null $video
     * @return Message
     */
    public function setVideo(?Video $video): Message {
        $this->video = $video;
        return $this;
    }

    /**
     * @return VideoNote|null
     */
    public function getVideoNote(): ?VideoNote {
        return $this->videoNote;
    }

    /**
     * @param VideoNote|null $videoNote
     * @return Message
     */
    public function setVideoNote(?VideoNote $videoNote): Message {
        $this->videoNote = $videoNote;
        return $this;
    }

    /**
     * @return Voice|null
     */
    public function getVoice(): ?Voice {
        return $this->voice;
    }

    /**
     * @param Voice|null $voice
     * @return Message
     */
    public function setVoice(?Voice $voice): Message {
        $this->voice = $voice;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     * @return Message
     */
    public function setCaption(?string $caption): Message {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getCaptionEntities(): ?MessageEntityCollection {
        return $this->captionEntities;
    }

    /**
     * @param MessageEntityCollection|null $captionEntities
     * @return Message
     */
    public function setCaptionEntities(?MessageEntityCollection $captionEntities): Message {
        $this->captionEntities = $captionEntities;
        return $this;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     * @return Message
     */
    public function setContact(?Contact $contact): Message {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return Dice|null
     */
    public function getDice(): ?Dice {
        return $this->dice;
    }

    /**
     * @param Dice|null $dice
     * @return Message
     */
    public function setDice(?Dice $dice): Message {
        $this->dice = $dice;
        return $this;
    }

    /**
     * @return Game|null
     */
    public function getGame(): ?Game {
        return $this->game;
    }

    /**
     * @param Game|null $game
     * @return Message
     */
    public function setGame(?Game $game): Message {
        $this->game = $game;
        return $this;
    }

    /**
     * @return Poll|null
     */
    public function getPoll(): ?Poll {
        return $this->poll;
    }

    /**
     * @param Poll|null $poll
     * @return Message
     */
    public function setPoll(?Poll $poll): Message {
        $this->poll = $poll;
        return $this;
    }

    /**
     * @return Venue|null
     */
    public function getVenue(): ?Venue {
        return $this->venue;
    }

    /**
     * @param Venue|null $venue
     * @return Message
     */
    public function setVenue(?Venue $venue): Message {
        $this->venue = $venue;
        return $this;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * @param Location|null $location
     * @return Message
     */
    public function setLocation(?Location $location): Message {
        $this->location = $location;
        return $this;
    }

    /**
     * @return UserCollection|null
     */
    public function getNewChatMembers(): ?UserCollection {
        return $this->newChatMembers;
    }

    /**
     * @param UserCollection|null $newChatMembers
     * @return Message
     */
    public function setNewChatMembers(?UserCollection $newChatMembers): Message {
        $this->newChatMembers = $newChatMembers;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getLeftChatMember(): ?User {
        return $this->leftChatMember;
    }

    /**
     * @param User|null $leftChatMember
     * @return Message
     */
    public function setLeftChatMember(?User $leftChatMember): Message {
        $this->leftChatMember = $leftChatMember;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewChatTitle(): ?string {
        return $this->newChatTitle;
    }

    /**
     * @param string|null $newChatTitle
     * @return Message
     */
    public function setNewChatTitle(?string $newChatTitle): Message {
        $this->newChatTitle = $newChatTitle;
        return $this;
    }

    /**
     * @return PhotoSizeCollection|null
     */
    public function getNewChatPhoto(): ?PhotoSizeCollection {
        return $this->newChatPhoto;
    }

    /**
     * @param PhotoSizeCollection|null $newChatPhoto
     * @return Message
     */
    public function setNewChatPhoto(?PhotoSizeCollection $newChatPhoto): Message {
        $this->newChatPhoto = $newChatPhoto;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getDeleteChatPhoto(): ?bool {
        return $this->deleteChatPhoto;
    }

    /**
     * @param bool|null $deleteChatPhoto
     * @return Message
     */
    public function setDeleteChatPhoto(?bool $deleteChatPhoto): Message {
        $this->deleteChatPhoto = $deleteChatPhoto;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getGroupChatCreated(): ?bool {
        return $this->groupChatCreated;
    }

    /**
     * @param bool|null $groupChatCreated
     * @return Message
     */
    public function setGroupChatCreated(?bool $groupChatCreated): Message {
        $this->groupChatCreated = $groupChatCreated;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSupergroupChatCreated(): ?bool {
        return $this->supergroupChatCreated;
    }

    /**
     * @param bool|null $supergroupChatCreated
     * @return Message
     */
    public function setSupergroupChatCreated(?bool $supergroupChatCreated): Message {
        $this->supergroupChatCreated = $supergroupChatCreated;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getChannelChatCreated(): ?bool {
        return $this->channelChatCreated;
    }

    /**
     * @param bool|null $channelChatCreated
     * @return Message
     */
    public function setChannelChatCreated(?bool $channelChatCreated): Message {
        $this->channelChatCreated = $channelChatCreated;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMigrateToChatId(): ?int {
        return $this->migrateToChatId;
    }

    /**
     * @param int|null $migrateToChatId
     * @return Message
     */
    public function setMigrateToChatId(?int $migrateToChatId): Message {
        $this->migrateToChatId = $migrateToChatId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMigrateFromChatId(): ?int {
        return $this->migrateFromChatId;
    }

    /**
     * @param int|null $migrateFromChatId
     * @return Message
     */
    public function setMigrateFromChatId(?int $migrateFromChatId): Message {
        $this->migrateFromChatId = $migrateFromChatId;
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
     * @return Message
     */
    public function setPinnedMessage(?Message $pinnedMessage): Message {
        $this->pinnedMessage = $pinnedMessage;
        return $this;
    }

    /**
     * @return Invoice|null
     */
    public function getInvoice(): ?Invoice {
        return $this->invoice;
    }

    /**
     * @param Invoice|null $invoice
     * @return Message
     */
    public function setInvoice(?Invoice $invoice): Message {
        $this->invoice = $invoice;
        return $this;
    }

    /**
     * @return SuccessfulPayment|null
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment {
        return $this->successfulPayment;
    }

    /**
     * @param SuccessfulPayment|null $successfulPayment
     * @return Message
     */
    public function setSuccessfulPayment(?SuccessfulPayment $successfulPayment): Message {
        $this->successfulPayment = $successfulPayment;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConnectedWebsite(): ?string {
        return $this->connectedWebsite;
    }

    /**
     * @param string|null $connectedWebsite
     * @return Message
     */
    public function setConnectedWebsite(?string $connectedWebsite): Message {
        $this->connectedWebsite = $connectedWebsite;
        return $this;
    }

    /**
     * @return PassportData|null
     */
    public function getPassportData(): ?PassportData {
        return $this->passportData;
    }

    /**
     * @param PassportData|null $passportData
     * @return Message
     */
    public function setPassportData(?PassportData $passportData): Message {
        $this->passportData = $passportData;
        return $this;
    }

    /**
     * @return ProximityAlertTriggered|null
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggered {
        return $this->proximityAlertTriggered;
    }

    /**
     * @param ProximityAlertTriggered|null $proximityAlertTriggered
     * @return Message
     */
    public function setProximityAlertTriggered(?ProximityAlertTriggered $proximityAlertTriggered): Message {
        $this->proximityAlertTriggered = $proximityAlertTriggered;
        return $this;
    }

    /**
     * @return InlineKeyboardMarkup|null
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup {
        return $this->replyMarkup;
    }

    /**
     * @param InlineKeyboardMarkup|null $replyMarkup
     * @return Message
     */
    public function setReplyMarkup(?InlineKeyboardMarkup $replyMarkup): Message {
        $this->replyMarkup = $replyMarkup;
        return $this;
    }

}