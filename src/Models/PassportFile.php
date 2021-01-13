<?php


namespace Infureal\Telegram\Models;


class PassportFile extends Model {

    public function __construct(
        protected string $fileId,
        protected string $fileUniqueId,
        protected int $fileSize,
        protected int $fileDate,
    ) {}

    /**
     * @return string
     */
    public function getFileId(): string {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     * @return PassportFile
     */
    public function setFileId(string $fileId): PassportFile {
        $this->fileId = $fileId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileUniqueId(): string {
        return $this->fileUniqueId;
    }

    /**
     * @param string $fileUniqueId
     * @return PassportFile
     */
    public function setFileUniqueId(string $fileUniqueId): PassportFile {
        $this->fileUniqueId = $fileUniqueId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileSize(): int {
        return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return PassportFile
     */
    public function setFileSize(int $fileSize): PassportFile {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileDate(): int {
        return $this->fileDate;
    }

    /**
     * @param int $fileDate
     * @return PassportFile
     */
    public function setFileDate(int $fileDate): PassportFile {
        $this->fileDate = $fileDate;
        return $this;
    }

}