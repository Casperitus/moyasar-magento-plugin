<?php
namespace Moyasar\Magento2\Magewire\Payment;

use Magewirephp\Magewire\Component;
use Hyva\Checkout\Model\Payment\EvaluationResultFactory;

class Card extends Component
{
    public $token = null;

    public function acquireToken()
    {
        $this->dispatch('moyasar:acquireToken');
    }

    public function evaluateCompletion(EvaluationResultFactory $factory)
    {
        return $this->token ? $factory->createSuccess() : $factory->createBlocking();
    }
}
