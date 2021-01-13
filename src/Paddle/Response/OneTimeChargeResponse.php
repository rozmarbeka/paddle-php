<?php

namespace Paddle\Response;

class OneTimeChargeResponse
{
    /** @var int */
    public $invoice_id;

    /** @var int */
    public $subscription_id;

    /** @var float */
    public $amount;

    /** @var string */
    public $currency;

    /** @var string */
    public $payment_date;

    /** @var string */
    public $receipt_url;

    /** @var string */
    public $order_id;

    public function __construct($data)
    {
        foreach ($data as $field => $value) {
            if (!property_exists($this, $field)) {

                throw new \Exception(sprintf('"%s" field does not exists in Paddle one-time charge response data.', $field));
            }

            $this->$field = $value;
        }
    }
}
