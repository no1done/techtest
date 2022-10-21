<?php

namespace Application\Config;

class Env {

    /**
     * Change to prod to switch endpoint calls
     *
     * @var string
     */
    public static string $mode = "dev";

    /**
     * Production endpoint
     *
     * @var string
     */
    public static string $prod_endpoint = "https://leads.supadata.co.uk/submit-lead";

    /**
     * Development Endpoint
     *
     * @var string
     */
    public static string $dev_endpoint = "https://dev-leads.supadata.co.uk/submit-lead";

}