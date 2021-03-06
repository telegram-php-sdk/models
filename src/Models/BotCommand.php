<?php


namespace Infureal\Telegram\Models;


class BotCommand extends Model {

    public function __construct(
        protected string $command,
        protected string $description,
    ) {}

    /**
     * @return string
     */
    public function getCommand(): string {
        return $this->command;
    }

    /**
     * @param string $command
     * @return BotCommand
     */
    public function setCommand(string $command): BotCommand {
        $this->command = $command;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * @param string $description
     * @return BotCommand
     */
    public function setDescription(string $description): BotCommand {
        $this->description = $description;
        return $this;
    }

}