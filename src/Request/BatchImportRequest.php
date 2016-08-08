<?php
declare(strict_types = 1);
namespace lutskanu\GoogleInstanceId\Request;

/**
 * Class BatchImportRequest
 * @package lutskanu\GoogleInstanceId\Request
 */
class BatchImportRequest
{
    private $application = '';
    private $sandbox = false;
    private $apnsTokens = [];

    /**
     * @return string
     */
    public function getApplication(): string
    {
        return $this->application;
    }

    /**
     * @param string $application
     */
    public function setApplication(string $application)
    {
        $this->application = $application;
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool $sandbox
     */
    public function setSandbox(bool $sandbox)
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @return mixed
     */
    public function getApnsTokens(): array
    {
        return $this->apnsTokens;
    }

    /**
     * @param string[] $apnsTokens
     */
    public function setApnsTokens(array $apnsTokens)
    {
        $this->apnsTokens = $apnsTokens;
    }
}
