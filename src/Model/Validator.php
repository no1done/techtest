<?php

namespace Application\Model;

use DateInterval;
use RuntimeException;
use DateTime;

/**
 * Extendable class for re-usable validator on models.
 *
 * @class Application\Model\Validator
 */
abstract class Validator {

    protected string $label;

    /**
     * Check for min string length
     *
     * @param string $str
     * @param int $min
     * @return void
     */
    protected function minStrLen(string $str, int $min): void
    {
        if (strlen($str) < $min) throw new RuntimeException(
            "$this->label is invalid. Minimum 2 characters in length required."
        );
    }

    /**
     * Check date is in the future
     *
     * @param DateTime $date
     * @return void
     */
    protected function isFutureDate(DateTime $date): void
    {
        if ($date < new DateTime()) throw new RuntimeException(
            "$this->label is invalid. Date must be in the future."
        );
    }

    /**
     * Validate a date is in the past.
     *
     * @param DateTime $date
     * @return void
     */
    protected function isPastDate(DateTime $date): void
    {
        if ($date > new DateTime()) throw new RuntimeException(
            "$this->label is invalid. Date must be in the past."
        );
    }

    /**
     * Check if date is a week day
     *
     * @param DateTime $date
     * @return void
     */
    protected function isWeekDay(DateTime $date): void
    {
        if ($date->format('N') > 5) throw new RuntimeException(
            "$this->label is invalid. Must be a weekday."
        );
    }

    /**
     * Validate a number is a mobile number
     *
     * @param string $num
     * @return void
     */
    protected function isMobileNumber(string $num): void
    {
        if (
            !str_starts_with($num, '07') ||
            strlen($num) != 11
        ) throw new RuntimeException(
            "$this->label is invalid. Must be a mobile number."
        );
    }

    /**
     * Validate a number is not a mobile number
     *
     * @param string $num
     * @return void
     */
    protected function isNotMobileNumber(string $num): void
    {
        if (str_starts_with($num, '07')) throw new RuntimeException(
            "$this->label is invalid. Must not be a mobile number."
        );
    }

    /**
     * Validate a string contains no numeric chars
     *
     * @param string $str
     * @return void
     */
    protected function noNumericCharacters(string $str): void
    {
        if (preg_match('/[0-9]/', $str)) throw new RuntimeException(
            "$this->label is invalid. Must not contain numbers."
        );
    }

    /**
     * Validate a number is a whole number
     *
     * @param int $num
     * @return void
     */
    protected function isWholeNumber(int $num): void
    {
        if (floor($num) != $num) throw new RuntimeException(
            "$this->label is invalid. Must be a whole number."
        );
    }

    /**
     * Validate X is greater than Y
     *
     * @param int|float $num
     * @param int $min
     * @return void
     */
    protected function isGreaterThan(int|float $num, int $min): void
    {
        if ($num <= $min) throw new RuntimeException(
            "$this->label is invalid. Value must be greater than 0."
        );
    }

    /**
     * Validate a string length is between a min and max value
     *
     * @param string $str
     * @param int $min
     * @param int $max
     * @return void
     */
    protected function strLenBetween(string $str, int $min, int $max): void
    {
        if (
            strlen($str) < $min ||
            strlen($str) > $max
        ) throw new RuntimeException(
            "$this->label is invalid. String must be between $min " .
            "and $max characters long."
        );
    }

    /**
     * Validate a string starts with a letter
     *
     * @param string $str
     * @return void
     */
    protected function startWithLetter(string $str): void
    {
        if (is_numeric($str[0])) throw new RuntimeException(
            "$this->label is invalid. Value must start with a letter."
        );
    }

    /**
     * Validate a string matches a specific length.
     *
     * @param string $str
     * @param int $expected
     * @return void
     */
    protected function isStrLen(string $str, int $expected): void
    {
        if (strlen($str) != $expected) throw new RuntimeException(
            "$this->label is invalid. Value must be $expected characters."
        );
    }

    /**
     * Validate a string is numeric characters only.
     *
     * @param string $str
     * @return void
     */
    protected function isNumeric(string $str): void
    {
        if (preg_match('/[a-zA-Z]/', $str)) throw new RuntimeException(
            "$this->label is invalid. Must be numeric values only."
        );
    }

    /**
     * Validate a UK Banking sort code pattern
     *
     * @param string $str
     * @return void
     */
    protected function isValidBankingSortCode(string $str): void
    {
        if (!preg_match("/(\d{2}-\d{2}-\d{2})/", $str)) throw new RuntimeException(
            "$this->label is invalid. Must match pattern XX-XX-XX and contain only numbers."
        );
    }

    /**
     * Validator for a minimum age check using DOB.
     *
     * @param DateTime $dob
     * @param int $min_age_years
     * @return void
     */
    protected function ageCheckFromDOB(DateTime $dob, int $min_age_years): void
    {
        $bday = clone $dob;
        $bday->add(new DateInterval("P{$min_age_years}Y"));

        if ($bday > new DateTime()) throw new RuntimeException(
            "$this->label is invalid. Applicant must be over $min_age_years years old."
        );
    }

    /**
     * Validate an email address
     *
     * @param string $str
     * @return void
     */
    protected function isValidEmailAddress(string $str): void
    {
        if (!filter_var($str, FILTER_VALIDATE_EMAIL)) throw new RuntimeException(
            "$this->label is invalid."
        );
    }
}