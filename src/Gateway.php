<?php

namespace Omnipay\CUHKJetco;

use Omnipay\Common\AbstractGateway;

/**
 * CUHK Jetco Gateway
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'CUHK Jetco';
    }

    public function getDefaultParameters()
    {
        return array(
            'key' => '',
            'testMode' => false,
        );
    }

    public function getKey()
    {
        return $this->getParameter('key');
    }

    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    /**
     * @return Message\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CUHKJetco\Message\AuthorizeRequest', $parameters);
    }
}
