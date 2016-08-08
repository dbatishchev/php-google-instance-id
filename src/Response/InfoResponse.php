<?php
declare(strict_types = 1);
namespace lutskanu\GoogleInstanceId\Response;

/**
 * Class InfoResponse
 * @package lutskanu\GoogleInstanceId\Response
 */
class InfoResponse
{
    private $application = '';
    private $authorizedEntity = '';
    private $platform = '';

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
     * @return string
     */
    public function getAuthorizedEntity(): string
    {
        return $this->authorizedEntity;
    }

    /**
     * @param string $authorizedEntity
     */
    public function setAuthorizedEntity(string $authorizedEntity)
    {
        $this->authorizedEntity = $authorizedEntity;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     */
    public function setPlatform(string $platform)
    {
        $this->platform = $platform;
    }
}