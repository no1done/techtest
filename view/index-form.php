<?php
namespace Application;
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
?>
<html lang="en">
<head>
    <title>Ryan Done | API Tech Test</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
<main>

    <div class="container">

        <header>
            <div class="px-3 py-2 text-bg-dark">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="#" class="nav-link text-secondary">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                                    Home
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-3 py-2 border-bottom mb-3">
                <div class="container d-flex flex-wrap justify-content-center">

                </div>
            </div>
        </header>

        <form method="POST">

            <div class="row">
                <div class="col">

                    <div class="form-group mb-3">
                        <label for="referring_website">Referring Website</label>
                        <input type="text" class="form-control" name="referring_website" id="referring_website" value="www.test.com"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="loan_amount">Loan Amount</label>
                        <input type="number" class="form-control" name="loan_amount" id="loan_amount" value="2000" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="loan_purpose">Loan Purpose</label>
                        <select class="form-control" name="loan_purpose" id="loan_purpose">
                            <?php foreach (LoanPurpose::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="loan_term">Loan Term</label>
                        <input type="number" class="form-control" name="loan_term" id="loan_term" value="12" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="guarantor">Guarantor</label>
                        <select class="form-control" name="guarantor" id="guarantor">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <select class="form-control" name="title" id="title">
                            <?php foreach (Title::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" value="John" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="middle_name">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" id="middle_name" value="" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" value="Doe" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <?php foreach (Gender::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="1990-01-01" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-control" name="marital_status" id="marital_status">
                            <?php foreach (MartialStatus::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="number_of_dependents">Number Of Dependents</label>
                        <input type="number" class="form-control" name="number_of_dependents" id="number_of_dependents" value="2" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="house_number">House Number</label>
                        <input type="text" class="form-control" name="house_number" id="house_number" value="123" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="house_name">House Name</label>
                        <input type="text" class="form-control" name="house_name" id="house_name" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="flat_number">Flat Number</label>
                        <input type="text" class="form-control" name="flat_number" id="flat_number" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="street_name">Street Name</label>
                        <input type="text" class="form-control" name="street_name" id="street_name" value="Fake St" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" value="City" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="county">County</label>
                        <input type="text" class="form-control" name="county" id="county" value="County" />
                    </div>
                </div> <!-- / end col -->

                <div class="col">
                    <div class="form-group mb-3">
                        <label for="post_code">Post Code</label>
                        <input type="text" class="form-control" name="post_code" id="post_code" value="M41AB" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="residential_status">Residential Status</label>
                        <select class="form-control" name="residential_status" id="residential_status">
                            <?php foreach (ResidentialStatus::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="address_move_in_date">Address Move In Date</label>
                        <input type="date" class="form-control" name="address_move_in_date" id="address_move_in_date" value="2020-01-01" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" class="form-control" name="mobile_number" id="mobile_number" value="07123456789" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="home_number">Home Number</label>
                        <input type="text" class="form-control" name="home_number" id="home_number" value="01234567891" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="work_number">Work Number</label>
                        <input type="text" class="form-control" name="work_number" id="work_number" value="01123457899" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="mobile_phone_type">Mobile Phone Type</label>
                        <select class="form-control" name="mobile_phone_type" id="mobile_phone_type">
                            <?php foreach (MobilePhoneType::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email_address">Email Address</label>
                        <input type="email" class="form-control" name="email_address" id="email_address" value="test@test.com" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="employment_status">Employment Status</label>
                        <select class="form-control" name="employment_status" id="employment_status">
                            <?php foreach (EmploymentStatus::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="payment_frequency">Payment Frequency</label>
                        <select class="form-control" name="payment_frequency" id="payment_frequency">
                            <?php foreach (PaymentFrequency::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="payment_method">Payment Method</label>
                        <select class="form-control" name="payment_method" id="payment_method">
                            <?php foreach (PaymentMethod::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="monthly_income">Monthly Income</label>
                        <input type="number" class="form-control" name="monthly_income" id="monthly_income" value="3000" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="next_pay_date">Next Pay Date</label>
                        <input type="date" class="form-control" name="next_pay_date" id="next_pay_date" value="2022-10-31" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="following_pay_date">Following Pay Date</label>
                        <input type="date" class="form-control" name="following_pay_date" id="following_pay_date" value="2022-11-30" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" name="job_title" id="job_title" value="Tester" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="employer_name">Employer Name</label>
                        <input type="text" class="form-control" name="employer_name" id="employer_name" value="Test Company" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="employer_industry">Employer Industry</label>
                        <select class="form-control" name="employer_industry" id="employer_industry">
                            <?php foreach (EmployerIndustry::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="employment_start_date">Employment Start Date</label>
                        <input type="date" class="form-control" name="employment_start_date" id="employment_start_date" value="2020-01-01" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="expenditure_housing">Expenditure Housing</label>
                        <input type="number" class="form-control" name="expenditure_housing" id="expenditure_housing" value="500" />
                    </div>

                </div><!-- End Col -->

                <div class="col">

                    <div class="form-group mb-3">
                        <label for="expenditure_credit">Expenditure Credit</label>
                        <input type="number" class="form-control" name="expenditure_credit" id="expenditure_credit" value="0" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="expenditure_transport">Expenditure Transport</label>
                        <input type="number" class="form-control" name="expenditure_transport" id="expenditure_transport" value="100" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="expenditure_food">Expenditure Food</label>
                        <input type="number" class="form-control" name="expenditure_food" id="expenditure_food" value="200"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="expenditure_utilities">Expenditure Utilities</label>
                        <input type="number" class="form-control" name="expenditure_utilities" id="expenditure_utilities" value="150"/>
                    </div>

                    <div class="form-group mb-3">
                        <label for="expenditure_other">Expenditure Other</label>
                        <input type="number" class="form-control" name="expenditure_other" id="expenditure_other" value="50" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="bank_name">Bank Name</label>
                        <select class="form-control" name="bank_name" id="bank_name">
                            <?php foreach (BankName::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="bank_account_number">Bank Account Number</label>
                        <input type="number" class="form-control" name="bank_account_number" id="bank_account_number" value="12345678" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="bank_sort_code">Bank Sort Code</label>
                        <input type="text" class="form-control" name="bank_sort_code" id="bank_sort_code" value="12-34-56" />
                    </div>

                    <div class="form-group mb-3">
                        <label for="bank_card_type">Bank Card Type</label>
                        <select class="form-control" name="bank_card_type" id="bank_card_type">
                            <?php foreach (BankCardType::cases() as $case) : ?>
                                <option value="<?= $case->value; ?>"><?= $case->value; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_email_sms">Consent Email Sms</label>
                        <select class="form-control" name="consent_email_sms" id="consent_email_sms">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_email">Consent Email</label>
                        <select class="form-control" name="consent_email" id="consent_email">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_sms">Consent Sms</label>
                        <select class="form-control" name="consent_sms" id="consent_sms">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_call">Consent Call</label>
                        <select class="form-control" name="consent_call" id="consent_call">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_credit_search">Consent Credit Search</label>
                        <select class="form-control" name="consent_credit_search" id="consent_credit_search">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="consent_financial">Consent Financial</label>
                        <select class="form-control" name="consent_financial" id="consent_financial">
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary" name="submit" value="true">Submit</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</body>
</html>