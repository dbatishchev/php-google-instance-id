<?php
declare(strict_types = 1);
namespace lutskanu\GoogleInstanceId;

use GuzzleHttp\ClientInterface;

/**
 * Interface IIDRequestInterface
 * @package lutskanu\GoogleInstanceId
 */
interface IIDRequestInterface
{
    /**
     * @param ClientInterface $client
     * @return IIDRequestInterface
     */
    public function setGuzzleClient(ClientInterface $client): IIDRequestInterface;

    /**
     * @return ClientInterface
     */
    public function getGuzzleClient(): ClientInterface;
}