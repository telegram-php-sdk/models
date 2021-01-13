<?php


namespace Infureal\Telegram\Models;


class WebhookInfo extends Model {

    public function __construct(
        protected string $url,
        protected bool $hasCustomCertificate,
        protected int $pendingUpdateCount,
        protected ?string $ipAddress = null,
        protected ?int $lastErrorDate = null,
        protected ?string $lastErrorMessage = null,
        protected ?int $maxConnections = null,
        protected ?array $allowedUpdates = null,
    ) {}

}