<?php


namespace Infureal\Telegram\Models;


use Infureal\Telegram\Collections\UserProfilePhotoCollection;

class UserProfilePhotos extends Model {

    public function __construct(
        protected int $totalCount,
        protected UserProfilePhotoCollection $photos,
    ) {}

    /**
     * @return int
     */
    public function getTotalCount(): int {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return UserProfilePhotos
     */
    public function setTotalCount(int $totalCount): UserProfilePhotos {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return UserProfilePhotoCollection
     */
    public function getPhotos(): UserProfilePhotoCollection {
        return $this->photos;
    }

    /**
     * @param UserProfilePhotoCollection $photos
     * @return UserProfilePhotos
     */
    public function setPhotos(UserProfilePhotoCollection $photos): UserProfilePhotos {
        $this->photos = $photos;
        return $this;
    }

}