<?php


namespace Infureal\Telegram\Models;


class PollAnswer extends Model {

    public function __construct(
        protected string $pollId,
        protected User $user,
        protected array $optionIds,
    ) {}

    /**
     * @return string
     */
    public function getPollId(): string {
        return $this->pollId;
    }

    /**
     * @param string $pollId
     * @return PollAnswer
     */
    public function setPollId(string $pollId): PollAnswer {
        $this->pollId = $pollId;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User {
        return $this->user;
    }

    /**
     * @param User $user
     * @return PollAnswer
     */
    public function setUser(User $user): PollAnswer {
        $this->user = $user;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptionIds(): array {
        return $this->optionIds;
    }

    /**
     * @param array $optionIds
     * @return PollAnswer
     */
    public function setOptionIds(array $optionIds): PollAnswer {
        $this->optionIds = $optionIds;
        return $this;
    }

}