<?php

namespace Application\Controller;

use Application\Config\Env;
use Application\Enum\BankCardType;
use Application\Enum\BankName;
use Application\Enum\EmployerIndustry;
use Application\Enum\EmploymentStatus;
use Application\Enum\Gender;
use Application\Enum\LoanPurpose;
use Application\Enum\MartialStatus;
use Application\Enum\MobilePhoneType;
use Application\Enum\PaymentFrequency;
use Application\Enum\PaymentMethod;
use Application\Enum\ResidentialStatus;
use Application\Enum\Title;
use Application\Model\Request;
use Application\Model\Response;
use Application\Config\Local;
use Exception;

/**
 * @class ApplicationController
 */
class ApplicationController {

    /**
     * @param array $data
     * @param array $server
     * @return Response
     */
    public function processRequest(array $data, array $server): Response
    {
        try {
            // Set request Form Data.
            $request = $this->buildRequestObject($data, $server);

            // Submit to API
            $json = $request->getJsonObject();

            $responseObj = $this->curlRequest($json);

            return new Response($responseObj);

        } catch (Exception $e) {
            echo $e->getMessage();
            die;
        }
    }

    /**
     * @param string $json
     * @return bool|string
     */
    private function curlRequest(string $json): bool|string
    {
        // Curl Setup.
        $crl = curl_init(Env::$dev_endpoint);
        curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($crl, CURLINFO_HEADER_OUT, true);
        curl_setopt($crl, CURLOPT_POST, true);
        curl_setopt($crl, CURLOPT_POSTFIELDS, $json);

        // Ensure application/json content header set.
        curl_setopt($crl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json))
        );

        // POST the CURL request.
        $result = curl_exec($crl);

        // Throw exception if curl fails.
        if ($result === false) {
            throw new \RuntimeException('Curl error: ' . curl_error($crl));
        }

        // Close curl
        curl_close($crl);

        return $result;
    }

    /**
     * @param array $data
     * @param array $server
     * @return Request
     * @throws Exception
     */
    private function buildRequestObject(array $data, array $server) : Request
    {
        $request = new Request();

        // Set Request Server Details
        $request->getIpAddress()->set($server['REMOTE_ADDR']);
        $request->getUserAgent()->set($server['HTTP_USER_AGENT']);

        // Set Request Credentials
        $request->getAffId()->set(Local::$aff_id);
        $request->getAffPassword()->set(Local::$aff_password);

        $request->getReferringWebsite()->set($data['referring_website']);
        $request->getLoanAmount()->set($data['loan_amount']);
        $request->getLoanPurpose()->set(LoanPurpose::from($data['loan_purpose']));
        $request->getLoanTerm()->set($data['loan_term']);
        $request->getGuarantor()->set($data['guarantor']);
        $request->getTitle()->set(Title::from($data['title']));
        $request->getFirstName()->set($data['first_name']);
        $request->getMiddleName()->set($data['middle_name']);
        $request->getLastName()->set($data['last_name']);
        $request->getGender()->set(Gender::from($data['gender']));
        $request->getDateOfBirth()->set(new \DateTime($data['date_of_birth']));
        $request->getMaritalStatus()->set(MartialStatus::from($data['marital_status']));
        $request->getNumberOfDependents()->set($data['number_of_dependents']);
        $request->getStreetName()->set($data['street_name']);
        $request->getCity()->set($data['city']);
        $request->getCounty()->set($data['county']);
        $request->getPostCode()->set($data['post_code']);
        $request->getResidentialStatus()->set(ResidentialStatus::from($data['residential_status']));
        $request->getAddressMoveInDate()->set(new \DateTime($data['address_move_in_date']));
        $request->getMobileNumber()->set($data['mobile_number']);
        $request->getHomeNumber()->set($data['home_number']);
        $request->getWorkNumber()->set($data['work_number']);
        $request->getEmailAddress()->set($data['email_address']);
        $request->getEmploymentStatus()->set(EmploymentStatus::from($data['employment_status']));
        $request->getPaymentFrequency()->set(PaymentFrequency::from($data['payment_frequency']));
        $request->getPaymentMethod()->set(PaymentMethod::from($data['payment_method']));
        $request->getMonthlyIncome()->set($data['monthly_income']);
        $request->getNextPayDate()->set(new \DateTime($data['next_pay_date']));
        $request->getFollowingPayDate()->setNextPayDate($request->getNextPayDate());
        $request->getFollowingPayDate()->set(new \DateTime($data['following_pay_date']));
        $request->getJobTitle()->set($data['job_title']);
        $request->getEmployerName()->set($data['employer_name']);
        $request->getEmployerIndustry()->set(EmployerIndustry::from($data['employer_industry']));
        $request->getEmploymentStartDate()->set(new \DateTime($data['employment_start_date']));
        $request->getExpenditureHousing()->set($data['expenditure_housing']);
        $request->getExpenditureCredit()->set($data['expenditure_credit']);
        $request->getExpenditureTransport()->set($data['expenditure_transport']);
        $request->getExpenditureFood()->set($data['expenditure_food']);
        $request->getExpenditureUtilities()->set($data['expenditure_utilities']);
        $request->getExpenditureOther()->set($data['expenditure_other']);
        $request->getBankName()->set(BankName::from($data['bank_name']));
        $request->getBankAccountNumber()->set($data['bank_account_number']);
        $request->getBankSortCode()->set($data['bank_sort_code']);
        $request->getBankCardType()->set(BankCardType::from($data['bank_card_type']));
        $request->getConsentEmailSms()->set($data['consent_email_sms']);
        $request->getConsentEmail()->set($data['consent_email']);
        $request->getConsentSms()->set($data['consent_sms']);
        $request->getConsentCall()->set($data['consent_call']);
        $request->getConsentCreditSearch()->set($data['consent_credit_search']);
        $request->getConsentFinancial()->set($data['consent_financial']);
        $request->getMobilePhoneType()->set(MobilePhoneType::from($data['mobile_phone_type']));

        if ($data['house_number'] !== "") {
            $request->getHouseNumber()->set($data['house_number']);
        }

        if ($data['house_name'] !== "") {
            $request->getHouseName()->set($data['house_name']);
        }

        if ($data['flat_number'] !== "") {
            $request->getFlatNumber()->set($data['flat_number']);
        }

        return $request;
    }
}