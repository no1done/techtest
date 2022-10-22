<?php

namespace Application\Model;

/**
 * Response Model
 *
 * This model is responsible for decoding and holding
 * the response data. This would make it easier to validate
 * specific response types, handles each scenario and then
 * offer an easy next step whether we wanted to send the data
 * to another system for logging or persisting in a database solution.
 *
 * @class Application\Model\Response
 */
class Response {

    /** @var string $status */
    protected string $status;

    /** @var float $commission */
    protected float $commission;

    /** @var string $redirect_uri */
    protected string $redirect_uri;

    /** @var array $errors */
    protected array $errors = [];

    /**
     * Constructor
     * @param string $json
     */
    public function __construct(string $json)
    {
        // Decode the JSON into an associative array.
        $array = json_decode($json, true);

        // Set the status which will be returned on all responses.
        $this->status = $array['status'];

        // Set the accepted specific fields.
        if ($this->status == 'Accepted') {
            $this->commission = $array['commission'];
            $this->redirect_uri = $array['redirect_uri'];
        }

        // Set the rejected specific fields.
        if ($this->status == "Rejected") {
            $this->errors[] = $array['validation']['errors'];
        }
    }

    /**
     * Check for errors
     *
     * Quick and easy method for checking if the
     * response contains errors.
     *
     * @return bool
     */
    public function hasErrors(): bool
    {
        return count($this->errors);
    }

}