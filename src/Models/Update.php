<?php


namespace Infureal\Telegram\Models;


class Update extends Model {

    public function __construct(
        protected int $updateId,
        protected ?Message $message = null,
        protected ?Message $editedMessage = null,
        protected ?Message $channelPost = null,
        protected ?Message $editedChannelPost = null,
        protected ?InlineQuery $inlineQuery = null,
        protected ?ChosenInlineResult $chosenInlineResult = null,
        protected ?CallbackQuery $callbackQuery = null,
        protected ?ShippingQuery $shippingQuery = null,
        protected ?PreCheckoutQuery $preCheckoutQuery = null,
        protected ?Poll $poll = null,
        protected ?PollAnswer $pollAnswer = null,
    ) {}

    /**
     * @return int
     */
    public function getUpdateId(): int {
        return $this->updateId;
    }

    /**
     * @param int $updateId
     * @return Update
     */
    public function setUpdateId(int $updateId): Update {
        $this->updateId = $updateId;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getMessage(): ?Message {
        return $this->message;
    }

    /**
     * @param Message|null $message
     * @return Update
     */
    public function setMessage(?Message $message): Update {
        $this->message = $message;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getEditedMessage(): ?Message {
        return $this->editedMessage;
    }

    /**
     * @param Message|null $editedMessage
     * @return Update
     */
    public function setEditedMessage(?Message $editedMessage): Update {
        $this->editedMessage = $editedMessage;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getChannelPost(): ?Message {
        return $this->channelPost;
    }

    /**
     * @param Message|null $channelPost
     * @return Update
     */
    public function setChannelPost(?Message $channelPost): Update {
        $this->channelPost = $channelPost;
        return $this;
    }

    /**
     * @return Message|null
     */
    public function getEditedChannelPost(): ?Message {
        return $this->editedChannelPost;
    }

    /**
     * @param Message|null $editedChannelPost
     * @return Update
     */
    public function setEditedChannelPost(?Message $editedChannelPost): Update {
        $this->editedChannelPost = $editedChannelPost;
        return $this;
    }

    /**
     * @return InlineQuery|null
     */
    public function getInlineQuery(): ?InlineQuery {
        return $this->inlineQuery;
    }

    /**
     * @param InlineQuery|null $inlineQuery
     * @return Update
     */
    public function setInlineQuery(?InlineQuery $inlineQuery): Update {
        $this->inlineQuery = $inlineQuery;
        return $this;
    }

    /**
     * @return ChosenInlineResult|null
     */
    public function getChosenInlineResult(): ?ChosenInlineResult {
        return $this->chosenInlineResult;
    }

    /**
     * @param ChosenInlineResult|null $chosenInlineResult
     * @return Update
     */
    public function setChosenInlineResult(?ChosenInlineResult $chosenInlineResult): Update {
        $this->chosenInlineResult = $chosenInlineResult;
        return $this;
    }

    /**
     * @return CallbackQuery|null
     */
    public function getCallbackQuery(): ?CallbackQuery {
        return $this->callbackQuery;
    }

    /**
     * @param CallbackQuery|null $callbackQuery
     * @return Update
     */
    public function setCallbackQuery(?CallbackQuery $callbackQuery): Update {
        $this->callbackQuery = $callbackQuery;
        return $this;
    }

    /**
     * @return ShippingQuery|null
     */
    public function getShippingQuery(): ?ShippingQuery {
        return $this->shippingQuery;
    }

    /**
     * @param ShippingQuery|null $shippingQuery
     * @return Update
     */
    public function setShippingQuery(?ShippingQuery $shippingQuery): Update {
        $this->shippingQuery = $shippingQuery;
        return $this;
    }

    /**
     * @return PreCheckoutQuery|null
     */
    public function getPreCheckoutQuery(): ?PreCheckoutQuery {
        return $this->preCheckoutQuery;
    }

    /**
     * @param PreCheckoutQuery|null $preCheckoutQuery
     * @return Update
     */
    public function setPreCheckoutQuery(?PreCheckoutQuery $preCheckoutQuery): Update {
        $this->preCheckoutQuery = $preCheckoutQuery;
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
     * @return Update
     */
    public function setPoll(?Poll $poll): Update {
        $this->poll = $poll;
        return $this;
    }

    /**
     * @return PollAnswer|null
     */
    public function getPollAnswer(): ?PollAnswer {
        return $this->pollAnswer;
    }

    /**
     * @param PollAnswer|null $pollAnswer
     * @return Update
     */
    public function setPollAnswer(?PollAnswer $pollAnswer): Update {
        $this->pollAnswer = $pollAnswer;
        return $this;
    }

}