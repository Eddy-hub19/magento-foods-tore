<?php

namespace Majob\BannerWidget\Block\Widget;

use Laminas\Console\Charset\DECSG;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
use Magento\Framework\UrlInterface;

class Samplewidget extends Template implements BlockInterface
{

    const DEFAULT_TEMPLATE = "widget/sample_widget.phtml";

    public function _construct()
    {
        if (!$this->hasData('template')) {
            $this->setData('template', self::DEFAULT_TEMPLATE);
        }

        return parent::_construct();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getData('widget_title');
    }

    public function getContent()
    {
        return $this->getData('widget_content');
    }

    /**
     * @return string
     * @throws NoSuchEntityException
     */
    public function getPhoto()
    {
        $image = $this->getData('photo');

        return $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_MEDIA) . $image;
    }
}
