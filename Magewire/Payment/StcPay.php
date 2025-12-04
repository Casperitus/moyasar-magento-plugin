<?php
namespace Moyasar\Magento2\Magewire\Payment;

use Magewirephp\Magewire\Component;
use Hyva\Checkout\Model\Payment\EvaluationResultFactory;

class StcPay extends Component
{
    public $token = null;

    public function acquireToken()
    {
        $this->dispatch('moyasar:acquireTokenStc');
    }

    public function evaluateCompletion(EvaluationResultFactory $factory)
    {
        return $this->token ? $factory->createSuccess() : $factory->createBlocking();
    }
}
