<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\MessageEntityCollection;
use Infureal\Telegram\Collections\PollOptionCollection;
use Infureal\Telegram\Enums\PollType;

class Poll extends Model {

    public function __construct(
        protected string $id,
        protected string $question,
        protected PollOptionCollection $options,
        protected int $totalVoterCount,
        protected bool $isClosed,
        protected bool $isAnonymous,
        protected PollType $type,
        protected bool $allowMultipleAnswers,
        protected ?int $correctOptionId = null,
        protected ?string $explanation = null,
        protected ?MessageEntityCollection $explanationEntities = null,
        protected ?int $openPeriod = null,
        protected ?int $closeDate = null,
    ) {}

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Poll
     */
    public function setId(string $id): Poll {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuestion(): string {
        return $this->question;
    }

    /**
     * @param string $question
     * @return Poll
     */
    public function setQuestion(string $question): Poll {
        $this->question = $question;
        return $this;
    }

    /**
     * @return PollOptionCollection
     */
    public function getOptions(): PollOptionCollection {
        return $this->options;
    }

    /**
     * @param PollOptionCollection $options
     * @return Poll
     */
    public function setOptions(PollOptionCollection $options): Poll {
        $this->options = $options;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalVoterCount(): int {
        return $this->totalVoterCount;
    }

    /**
     * @param int $totalVoterCount
     * @return Poll
     */
    public function setTotalVoterCount(int $totalVoterCount): Poll {
        $this->totalVoterCount = $totalVoterCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool {
        return $this->isClosed;
    }

    /**
     * @param bool $isClosed
     * @return Poll
     */
    public function setIsClosed(bool $isClosed): Poll {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAnonymous(): bool {
        return $this->isAnonymous;
    }

    /**
     * @param bool $isAnonymous
     * @return Poll
     */
    public function setIsAnonymous(bool $isAnonymous): Poll {
        $this->isAnonymous = $isAnonymous;
        return $this;
    }

    /**
     * @return PollType
     */
    public function getType(): PollType {
        return $this->type;
    }

    /**
     * @param PollType $type
     * @return Poll
     */
    public function setType(PollType $type): Poll {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowMultipleAnswers(): bool {
        return $this->allowMultipleAnswers;
    }

    /**
     * @param bool $allowMultipleAnswers
     * @return Poll
     */
    public function setAllowMultipleAnswers(bool $allowMultipleAnswers): Poll {
        $this->allowMultipleAnswers = $allowMultipleAnswers;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCorrectOptionId(): ?int {
        return $this->correctOptionId;
    }

    /**
     * @param int|null $correctOptionId
     * @return Poll
     */
    public function setCorrectOptionId(?int $correctOptionId): Poll {
        $this->correctOptionId = $correctOptionId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExplanation(): ?string {
        return $this->explanation;
    }

    /**
     * @param string|null $explanation
     * @return Poll
     */
    public function setExplanation(?string $explanation): Poll {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * @return MessageEntityCollection|null
     */
    public function getExplanationEntities(): ?MessageEntityCollection {
        return $this->explanationEntities;
    }

    /**
     * @param MessageEntityCollection|null $explanationEntities
     * @return Poll
     */
    public function setExplanationEntities(?MessageEntityCollection $explanationEntities): Poll {
        $this->explanationEntities = $explanationEntities;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getOpenPeriod(): ?int {
        return $this->openPeriod;
    }

    /**
     * @param int|null $openPeriod
     * @return Poll
     */
    public function setOpenPeriod(?int $openPeriod): Poll {
        $this->openPeriod = $openPeriod;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCloseDate(): ?int {
        return $this->closeDate;
    }

    /**
     * @param int|null $closeDate
     * @return Poll
     */
    public function setCloseDate(?int $closeDate): Poll {
        $this->closeDate = $closeDate;
        return $this;
    }

}