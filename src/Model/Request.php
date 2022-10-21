<?php

namespace Application\Model;

class Request {

    public function __construct(
        protected AffId $aff_id = new AffId(),
        protected AffPassword $aff_password = new AffPassword(),
        protected SubId $sub_id = new SubId(),
        protected ReferringWebsite $referring_website = new ReferringWebsite(),
        protected LoanAmount $loan_amount = new LoanAmount(),
        protected LoanPurpose $loan_purpose = new LoanPurpose(),
        protected LoanTerm $loan_term = new LoanTerm(),
        protected Guarantor $guarantor = new Guarantor(),
        protected Title $title = new Title(),
        protected FirstName $first_name = new FirstName(),
        protected ?MiddleName $middle_name = new MiddleName(),
        protected LastName $last_name = new LastName(),
        protected Gender $gender = new Gender(),
        protected DateOfBirth $date_of_birth = new DateOfBirth(),
        protected MaritalStatus $marital_status = new MaritalStatus(),
        protected NumberOfDependents $number_of_dependents = new NumberOfDependents(),
        protected ?HouseNumber $house_number = new HouseNumber(),
        protected ?HouseName $house_name = new HouseName(),
        protected ?FlatNumber $flat_number = new FlatNumber(),
        protected StreetName $street_name = new StreetName(),
        protected City $city = new City(),
        protected County $county = new County(),
        protected PostCode $post_code = new PostCode(),
        protected ResidentialStatus $residential_status = new ResidentialStatus(),
        protected AddressMoveInDate $address_move_in_date = new AddressMoveInDate(),
        protected MobileNumber $mobile_number = new MobileNumber(),
        protected HomeNumber $home_number = new HomeNumber(),
        protected WorkNumber $work_number = new WorkNumber(),
        protected ?MobilePhoneType $mobile_phone_type = new MobilePhoneType(),
        protected EmailAddress $email_address = new EmailAddress(),
        protected EmploymentStatus $employment_status = new EmploymentStatus(),
        protected PaymentFrequency $payment_frequency = new PaymentFrequency(),
        protected PaymentMethod $payment_method = new PaymentMethod(),
        protected MonthlyIncome $monthly_income = new MonthlyIncome(),
        protected NextPayDate $next_pay_date = new NextPayDate(),
        protected FollowingPayDate $following_pay_date = new FollowingPayDate(),
        protected JobTitle $job_title = new JobTitle(),
        protected EmployerName $employer_name = new EmployerName(),
        protected EmployerIndustry $employer_industry = new EmployerIndustry(),
        protected EmploymentStartDate $employment_start_date = new EmploymentStartDate(),
        protected ExpenditureHousing $expenditure_housing = new ExpenditureHousing(),
        protected ExpenditureCredit $expenditure_credit = new ExpenditureCredit(),
        protected ExpenditureTransport $expenditure_transport = new ExpenditureTransport(),
        protected ExpenditureFood $expenditure_food = new ExpenditureFood(),
        protected ExpenditureUtilities $expenditure_utilities = new ExpenditureUtilities(),
        protected ExpenditureOther $expenditure_other = new ExpenditureOther(),
        protected BankName $bank_name = new BankName(),
        protected BankAccountNumber $bank_account_number = new BankAccountNumber(),
        protected BankSortCode $bank_sort_code = new BankSortCode(),
        protected BankCardType $bank_card_type = new BankCardType(),
        protected ConsentEmailSms $consent_email_sms = new ConsentEmailSms(),
        protected ConsentEmail $consent_email = new ConsentEmail(),
        protected ConsentSms $consent_sms = new ConsentSms(),
        protected ConsentCall $consent_call = new ConsentCall(),
        protected ConsentCreditSearch $consent_credit_search = new ConsentCreditSearch(),
        protected ConsentFinancial $consent_financial = new ConsentFinancial(),
        protected UserAgent $user_agent = new UserAgent(),
        protected IpAddress $ip_address = new IpAddress()
    ){}

    /**
     * @return string
     */
    public function getJsonObject() : string
    {
        $array = [
            'test_lead' => true,
            'sub_id' => "1010",
            'aff_id' => $this->aff_id->get(),
            'aff_password' => $this->aff_password->get(),
            'referring_website' => $this->referring_website->get(),
            'loan_amount' => $this->loan_amount->get(),
            'loan_purpose' => $this->loan_purpose->get(),
            'loan_term' => $this->loan_term->get(),
            'guarantor' => $this->guarantor->get(),
            'title' => $this->title->get(),
            'first_name' => $this->first_name->get(),
            'middle_name' => $this->middle_name->get(),
            'last_name' => $this->last_name->get(),
            'gender' => $this->gender->get(),
            'date_of_birth' => $this->date_of_birth->get()->format("d-m-Y"),
            'marital_status' => $this->marital_status->get(),
            'number_of_dependents' => $this->number_of_dependents->get(),
            'street_name' => $this->street_name->get(),
            'city' => $this->city->get(),
            'county' => $this->county->get(),
            'post_code' => $this->post_code->get(),
            'residential_status' => $this->residential_status->get(),
            'address_move_in_date' => $this->address_move_in_date->get()->format('d-m-Y'),
            'mobile_number' => $this->mobile_number->get(),
            'home_number' => $this->home_number->get(),
            'work_number' => $this->work_number->get(),
            'mobile_phone_type' => $this->mobile_phone_type->get(),
            'email_address' => $this->email_address->get(),
            'employment_status' => $this->employment_status->get(),
            'payment_frequency' => $this->payment_frequency->get(),
            'payment_method' => $this->payment_method->get(),
            'monthly_income' => $this->monthly_income->get(),
            'next_pay_date' => $this->next_pay_date->get()->format('d-m-Y'),
            'following_pay_date' => $this->following_pay_date->get()->format('d-m-Y'),
            'job_title' => $this->job_title->get(),
            'employer_name' => $this->employer_name->get(),
            'employer_industry' => $this->employer_industry->get(),
            'employment_start_date' => $this->employment_start_date->get()->format('d-m-Y'),
            'expenditure_housing' => $this->expenditure_housing->get(),
            'expenditure_credit' => $this->expenditure_credit->get(),
            'expenditure_transport' => $this->expenditure_transport->get(),
            'expenditure_food' => $this->expenditure_food->get(),
            'expenditure_utilities' => $this->expenditure_utilities->get(),
            'expenditure_other' => $this->expenditure_other->get(),
            'bank_name' => $this->bank_name->get(),
            'bank_account_number' => $this->bank_account_number->get(),
            'bank_sort_code' => $this->bank_sort_code->get(),
            'bank_card_type' => $this->bank_card_type->get(),
            'consent_email_sms' => $this->consent_email_sms->get(),
            'consent_email' => $this->consent_email->get(),
            'consent_sms' => $this->consent_sms->get(),
            'consent_call' => $this->consent_call->get(),
            'consent_credit_search' => $this->consent_credit_search->get(),
            'consent_financial' => $this->consent_financial->get(),
            'ip_address' => $this->ip_address->get(),
            'user_agent' => $this->user_agent->get()
        ];

        if ($this->house_number->isset())
            $array['house_number'] = $this->house_number->get();

        if ($this->house_name->isset())
            $array['house_name'] = $this->house_name->get();

        if ($this->flat_number->isset())
            $array['flat_number'] = $this->flat_number->get();

        return json_encode($array);
    }

    /**
     * @return AffId
     */
    public function getAffId(): AffId
    {
        return $this->aff_id;
    }

    /**
     * @return AffPassword
     */
    public function getAffPassword(): AffPassword
    {
        return $this->aff_password;
    }

    /**
     * @return SubId
     */
    public function getSubId(): SubId
    {
        return $this->sub_id;
    }

    /**
     * @return ReferringWebsite
     */
    public function getReferringWebsite(): ReferringWebsite
    {
        return $this->referring_website;
    }

    /**
     * @return LoanAmount
     */
    public function getLoanAmount(): LoanAmount
    {
        return $this->loan_amount;
    }

    /**
     * @return LoanPurpose
     */
    public function getLoanPurpose(): LoanPurpose
    {
        return $this->loan_purpose;
    }

    /**
     * @return LoanTerm
     */
    public function getLoanTerm(): LoanTerm
    {
        return $this->loan_term;
    }

    /**
     * @return Guarantor
     */
    public function getGuarantor(): Guarantor
    {
        return $this->guarantor;
    }

    /**
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * @return FirstName
     */
    public function getFirstName(): FirstName
    {
        return $this->first_name;
    }

    /**
     * @return MiddleName|null
     */
    public function getMiddleName(): ?MiddleName
    {
        return $this->middle_name;
    }

    /**
     * @return LastName
     */
    public function getLastName(): LastName
    {
        return $this->last_name;
    }

    /**
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * @return DateOfBirth
     */
    public function getDateOfBirth(): DateOfBirth
    {
        return $this->date_of_birth;
    }

    /**
     * @return MaritalStatus
     */
    public function getMaritalStatus(): MaritalStatus
    {
        return $this->marital_status;
    }

    /**
     * @return NumberOfDependents
     */
    public function getNumberOfDependents(): NumberOfDependents
    {
        return $this->number_of_dependents;
    }

    /**
     * @return HouseNumber|null
     */
    public function getHouseNumber(): ?HouseNumber
    {
        return $this->house_number;
    }

    /**
     * @return HouseName|null
     */
    public function getHouseName(): ?HouseName
    {
        return $this->house_name;
    }

    /**
     * @return FlatNumber|null
     */
    public function getFlatNumber(): ?FlatNumber
    {
        return $this->flat_number;
    }

    /**
     * @return StreetName
     */
    public function getStreetName(): StreetName
    {
        return $this->street_name;
    }

    /**
     * @return City
     */
    public function getCity(): City
    {
        return $this->city;
    }

    /**
     * @return County
     */
    public function getCounty(): County
    {
        return $this->county;
    }

    /**
     * @return PostCode
     */
    public function getPostCode(): PostCode
    {
        return $this->post_code;
    }

    /**
     * @return ResidentialStatus
     */
    public function getResidentialStatus(): ResidentialStatus
    {
        return $this->residential_status;
    }

    /**
     * @return AddressMoveInDate
     */
    public function getAddressMoveInDate(): AddressMoveInDate
    {
        return $this->address_move_in_date;
    }

    /**
     * @return MobileNumber
     */
    public function getMobileNumber(): MobileNumber
    {
        return $this->mobile_number;
    }

    /**
     * @return HomeNumber
     */
    public function getHomeNumber(): HomeNumber
    {
        return $this->home_number;
    }

    /**
     * @return WorkNumber
     */
    public function getWorkNumber(): WorkNumber
    {
        return $this->work_number;
    }

    /**
     * @return MobilePhoneType|null
     */
    public function getMobilePhoneType(): ?MobilePhoneType
    {
        return $this->mobile_phone_type;
    }

    /**
     * @return EmailAddress
     */
    public function getEmailAddress(): EmailAddress
    {
        return $this->email_address;
    }

    /**
     * @return EmploymentStatus
     */
    public function getEmploymentStatus(): EmploymentStatus
    {
        return $this->employment_status;
    }

    /**
     * @return PaymentFrequency
     */
    public function getPaymentFrequency(): PaymentFrequency
    {
        return $this->payment_frequency;
    }

    /**
     * @return PaymentMethod
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->payment_method;
    }

    /**
     * @return MonthlyIncome
     */
    public function getMonthlyIncome(): MonthlyIncome
    {
        return $this->monthly_income;
    }

    /**
     * @return NextPayDate
     */
    public function getNextPayDate(): NextPayDate
    {
        return $this->next_pay_date;
    }

    /**
     * @return FollowingPayDate
     */
    public function getFollowingPayDate(): FollowingPayDate
    {
        return $this->following_pay_date;
    }

    /**
     * @return JobTitle
     */
    public function getJobTitle(): JobTitle
    {
        return $this->job_title;
    }

    /**
     * @return EmployerName
     */
    public function getEmployerName(): EmployerName
    {
        return $this->employer_name;
    }

    /**
     * @return EmployerIndustry
     */
    public function getEmployerIndustry(): EmployerIndustry
    {
        return $this->employer_industry;
    }

    /**
     * @return EmploymentStartDate
     */
    public function getEmploymentStartDate(): EmploymentStartDate
    {
        return $this->employment_start_date;
    }

    /**
     * @return ExpenditureHousing
     */
    public function getExpenditureHousing(): ExpenditureHousing
    {
        return $this->expenditure_housing;
    }

    /**
     * @return ExpenditureCredit
     */
    public function getExpenditureCredit(): ExpenditureCredit
    {
        return $this->expenditure_credit;
    }

    /**
     * @return ExpenditureTransport
     */
    public function getExpenditureTransport(): ExpenditureTransport
    {
        return $this->expenditure_transport;
    }

    /**
     * @return ExpenditureFood
     */
    public function getExpenditureFood(): ExpenditureFood
    {
        return $this->expenditure_food;
    }

    /**
     * @return ExpenditureUtilities
     */
    public function getExpenditureUtilities(): ExpenditureUtilities
    {
        return $this->expenditure_utilities;
    }

    /**
     * @return ExpenditureOther
     */
    public function getExpenditureOther(): ExpenditureOther
    {
        return $this->expenditure_other;
    }

    /**
     * @return BankName
     */
    public function getBankName(): BankName
    {
        return $this->bank_name;
    }

    /**
     * @return BankAccountNumber
     */
    public function getBankAccountNumber(): BankAccountNumber
    {
        return $this->bank_account_number;
    }

    /**
     * @return BankSortCode
     */
    public function getBankSortCode(): BankSortCode
    {
        return $this->bank_sort_code;
    }

    /**
     * @return BankCardType
     */
    public function getBankCardType(): BankCardType
    {
        return $this->bank_card_type;
    }

    /**
     * @return ConsentEmailSms
     */
    public function getConsentEmailSms(): ConsentEmailSms
    {
        return $this->consent_email_sms;
    }

    /**
     * @return ConsentEmail
     */
    public function getConsentEmail(): ConsentEmail
    {
        return $this->consent_email;
    }

    /**
     * @return ConsentSms
     */
    public function getConsentSms(): ConsentSms
    {
        return $this->consent_sms;
    }

    /**
     * @return ConsentCall
     */
    public function getConsentCall(): ConsentCall
    {
        return $this->consent_call;
    }

    /**
     * @return ConsentCreditSearch
     */
    public function getConsentCreditSearch(): ConsentCreditSearch
    {
        return $this->consent_credit_search;
    }

    /**
     * @return ConsentFinancial
     */
    public function getConsentFinancial(): ConsentFinancial
    {
        return $this->consent_financial;
    }

    /**
     * @return UserAgent
     */
    public function getUserAgent(): UserAgent
    {
        return $this->user_agent;
    }

    /**
     * @return IpAddress
     */
    public function getIpAddress(): IpAddress
    {
        return $this->ip_address;
    }
}