<?php

namespace Majob\BannerWidget\Plugin;

class Widget
{
    /**
     * @var \Magento\Backend\Helper\Data
     */
    protected $backendData;

    /**
     * Widget constructor.
     *
     * @param \Magento\Backend\Helper\Data $backendData
     */
    public function __construct(
        \Magento\Backend\Helper\Data $backendData
    )
    {
        $this->backendData = $backendData;
    }

    public function beforeGetWidgetDeclaration(
        \Magento\Widget\Model\Widget $subject,
                                     $type,
                                     $params = [],
                                     $asIs = true
    )
    {
        foreach ($params as $name => $value) {
            if (!is_array($value)) {
                if (preg_match('/(___directive\/)([a-zA-Z0-9,_-]+)/', $value, $matches)) {
                    $directive = base64_decode(strtr($matches[2], '-_,', '+/='));
                    $params[$name] = str_replace(['{{media url="', '"}}'], ['', ''], $directive);
                }
            }
        }
        return [$type, $params, $asIs];
    }
}
