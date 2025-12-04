<?php
namespace Moyasar\Magento2\ViewModel\Hyva;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Moyasar\Magento2\Model\Config\PaymentConfigProvider;
use Moyasar\Magento2\Model\Payment\MoyasarPayments;

class Config implements ArgumentInterface
{
    private PaymentConfigProvider $configProvider;

    public function __construct(PaymentConfigProvider $configProvider)
    {
        $this->configProvider = $configProvider;
    }

    public function get(): array
    {
        $config = $this->configProvider->getConfig();
        return $config[MoyasarPayments::CODE] ?? [];
    }
}
