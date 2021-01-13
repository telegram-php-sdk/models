<?php


namespace Infureal\Telegram\Models;


class GameHighScore extends Model {

    public function __construct(
        protected int $position,
        protected User $user,
        protected int $score,
    ) {}

    /**
     * @return int
     */
    public function getPosition(): int {
        return $this->position;
    }

    /**
     * @param int $position
     * @return GameHighScore
     */
    public function setPosition(int $position): GameHighScore {
        $this->position = $position;
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
     * @return GameHighScore
     */
    public function setUser(User $user): GameHighScore {
        $this->user = $user;
        return $this;
    }

    /**
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * @param int $score
     * @return GameHighScore
     */
    public function setScore(int $score): GameHighScore {
        $this->score = $score;
        return $this;
    }

}