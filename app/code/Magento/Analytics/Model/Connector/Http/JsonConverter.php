<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Analytics\Model\Connector\Http;

/**
 * Represents JSON converter for http request and response body.
 */
class JsonConverter implements ConverterInterface
{
    /**
     * @var string
     */
    private $contentTypeHeader;

    /**
     * @param string $contentTypeHeader
     */
    public function __construct($contentTypeHeader)
    {
        $this->contentTypeHeader = $contentTypeHeader;
    }

    /**
     * @param string $body
     *
     * @return array
     */
    public function fromBody($body)
    {
        return json_decode($body, 1);
    }

    /**
     * @param array $data
     *
     * @return string
     */
    public function toBody(array $data)
    {
        return json_encode($data);
    }

    /**
     * @return string
     */
    public function getContentTypeHeader()
    {
        return $this->contentTypeHeader;
    }
}
