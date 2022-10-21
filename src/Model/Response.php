<?php

namespace Application\Model;

class Response {

    /** @var string $status */
    protected string $status;

    /** @var float $commission */
    protected float $commission;

    /** @var string $redirect_uri */
    protected string $redirect_uri;

    /** @var array $errors */
    protected array $errors;

    /**
     * Constructor
     * @param string $json
     */
    public function __construct(string $json)
    {
        $array = json_decode($json, true);
        $this->status = $array['status'];

        if ($this->status == 'Accepted') {
            $this->commission = $array['commission'];
            $this->redirect_uri = $array['redirect_uri'];
        }

        if ($this->status == "Rejected") {
            $this->errors = $array['validation']['errors'];
        }
    }

}