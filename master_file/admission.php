
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>
        Result Processing App
    </title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="DMrBuT7eXgPySieMVBnuZkP3R3cflEJFLDmqWog6">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/cumilla-govt-college-logo.jpg" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <link rel="stylesheet" href="https://www.csbmc.edu.bd/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" />

    <link rel="stylesheet" href="https://www.csbmc.edu.bd/assets/plugins/custom/datatables/datatables.bundle.css" />

    <link rel="stylesheet" href="https://www.csbmc.edu.bd/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" />

    <link rel="stylesheet" href="https://www.csbmc.edu.bd/assets/css/style.bundle.css" />

    <link rel="stylesheet" href="https://www.csbmc.edu.bd/assets/plugins/global/plugins.bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <style>
        .flex-root{
            background-image: url('images/student.jpg');
            background-size: cover;
        }
        .card{
            opacity: 1;
            color: black; /* Set text color to black */
        }
        .fw-semibold{
            color:black;
        }
        .form-control{
            color: black;
        }
        .form-select{
            background-color: darkgray;
            color: black;

        }
        .card input::placeholder {
            color: black; /* Placeholder color for input fields inside the card */
        }


    </style>

        

</head>
<!--end::Head-->

<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                        <!--begin::Post-->

    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Basic info-->
        <div class="card mb-5 mb-xl-10">
                        <div style="background-color: cadetblue" class="card-header border-0 cursor-pointer" role="button"
                 data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true"
                 aria-controls="kt_account_profile_details">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0" style="color: whitesmoke; text-align: center">Registration Form</h3>
                </div>
            </div>

            <div id="kt_account_settings_profile_details" class="collapse show">
                <form id="kt_account_profile_details_form" class="form" action="https://www.csbmc.edu.bd/student-admissions" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="DMrBuT7eXgPySieMVBnuZkP3R3cflEJFLDmqWog6">                        <input type="hidden" name="_token" value="DMrBuT7eXgPySieMVBnuZkP3R3cflEJFLDmqWog6">                    <div class="card-body border-top p-9">








































                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Class</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Class"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="class_id" id="class_id" aria-label="Select a Program"
                                        data-control="select2" data-placeholder="Select a Class..."
                                        class="form-select form-select-solid form-select-lg fw-semibold" onchange="getSubject()">
                                  
                                        <option value="11" selected>Class Eleven</option>

                                </select>
                                <br>
                                <span class="text-danger" id="class_id-error"></span>
                                                                <span class="text-danger" id="class_id-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Session</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Session"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="session_id" id="session_id" aria-label="Select a Session"
                                        data-control="select2" data-placeholder="Select a Session..."
                                        class="form-select form-select-solid form-select-lg fw-semibold" onchange="getSubject()">
                                    <option value="">Select a Session...</option>
                                                                            <option value="3" selected>2022-2023</option>
                                                                            <option value="4" >2023-2024</option>
                                                                    </select>
                                <br>
                                                                <span class="text-danger" id="session_id-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Program</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Program"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="program_id" id="program_id" aria-label="Select a Program"
                                        data-control="select2" data-placeholder="Select a Program..."
                                        class="form-select form-select-solid form-select-lg fw-semibold" onchange="getSubject()">
                                    <option value="">Select a Session...</option>
                                                                            <option value="3" >SSC</option>
                                                                            <option value="4" >HSC</option>
                                                                    </select>
                                <br>
                                                                <span class="text-danger" id="program_id-error"></span>

                            </div>
                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Group</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Group"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="group_id" id="group_id" aria-label="Select a Group" data-control="select2"
                                        data-placeholder="Select a Group..."
                                        class="form-select form-select-solid form-select-lg fw-semibold" onchange="getSubject()">
                                    <option value="">Select a Group...</option>
                                                                            <option value="1" >Science</option>
                                                                            <option value="2" >Humanities</option>
                                                                            <option value="3" >Business Studies</option>
                                                                    </select>
                                <br>
                                                                <span class="text-danger" id="group_id-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">SSC Roll Number</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" id="ssc_roll_number" name="ssc_roll_number"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="SSC Roll Number" value=""/>
                                <br>
                                                                <span class="text-danger" id="ssc_roll_number-error"></span>
                            </div>

                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name Of Student
                                (বাংলা)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name_bangla" id="name_bangla"
                                       class="form-control form-control-lg form-control-solid" placeholder="Bangla Name"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="name_bangla-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name Of Student English
                                (UPPERCASE)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="name" id="name"
                                       class="form-control form-control-lg form-control-solid" placeholder="Name"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="name-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Father's
                                Name(বাংলা)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="father_name" id="father_name"
                                       class="form-control form-control-lg form-control-solid" placeholder="Father Name"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="father_name-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span >Father's Contact Number</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Phone number must be active"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" id="father_phone" name="father_phone"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Father's Phone number" value=""/>
                                <br>
                                                                <span class="text-danger" id="father_phone-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Mother's
                                Name(বাংলা)</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="mother_name" id="mother_name"
                                       class="form-control form-control-lg form-control-solid" placeholder="Mother Name"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="mother_name-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span >Mother's Contact Number</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Phone number must be active"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" id="mother_phone" name="mother_phone"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Mother's Phone number" value=""/>
                                <br>
                                                                <span class="text-danger" id="mother_phone-error"></span>

                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nick Name(UPPERCASE) For
                                Nameplate</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nick_name" id="nick_name"
                                       class="form-control form-control-lg form-control-solid" placeholder="Nick Name"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="nick_name-error"></span>

                                                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nationality</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="nationality" id="nationality"
                                       class="form-control form-control-lg form-control-solid" placeholder="Nationality"
                                       value=""/>
                                <br>
                                <span class="text-danger" id="nationality-error"></span>

                                                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Email</label>
                            <div class="col-lg-8 fv-row">
                                <input type="email" name="email" id="email"
                                       class="form-control form-control-lg form-control-solid" placeholder="Email"
                                       value=""/>
                                <br>
                                                                <span class="text-danger" id="email-error"></span>
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Gender</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Country of origination"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="gender" id="gender" aria-label="Select a Gender" data-control="select2"
                                        data-placeholder="Select a Gender..."
                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                    <option value="">Select a Gender...</option>
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                </select>
                                <br>
                                <br>
                                <span class="text-danger" id="gender-error"></span>
                                                                                                <span class="text-danger" id="gender-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Religion</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Religion"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="religion" id="religion" aria-label="Select a Religion"
                                        data-control="select2" data-placeholder="Select a Religion..."
                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                    <option value="">Select a Religion...</option>
                                    <option value="Islam" >Islam</option>
                                    <option value="Hinduism" >Hinduism</option>
                                    <option value="Buddhism" >Buddhism</option>
                                    <option value="Christianity" >Christianity</option>
                                    <option value="Others" >Others</option>
                                </select>
                                <br>
                                <br>
                                <span class="text-danger" id="religion-error"></span>
                                                                <span class="text-danger" id="gender-error"></span>

                            </div>
                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Date of Birth</label>

                            <div class="col-lg-8 fv-row position-relative d-flex align-items-center">
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                          d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                          fill="currentColor"/>
                                    <path
                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                        fill="currentColor"/>
                                </svg>
                            </span>
                                <input id="dob" class="form-control form-control-solid ps-12 flatpickr-input" name="dob"
                                       placeholder="Date of Birth"/>
                                <br>
                                                                <span class="text-danger" id="dob-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Contact Phone</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Phone number must be active"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <input type="text" id="contact_number" name="contact_number"
                                       class="form-control form-control-lg form-control-solid"
                                       placeholder="Phone number" value=""/>
                                <br>
                                                                <span class="text-danger" id="contact_number-error"></span>

                            </div>
                        </div>


                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Present Address</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="present_address" id="present_address"
                                          class="form-control form-control-lg form-control-solid"
                                          placeholder="Present Address"
                                          /></textarea>
                                <br>
                                <span class="text-danger" id="name-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Permanent Address</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="permanent_address" id="present_address"
                                          class="form-control form-control-lg form-control-solid"
                                          placeholder="Permanent Address"
                                         /></textarea>
                                <br>
                                <span class="text-danger" id="name-error"></span>

                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Name And Relationship Of
                                Guardian In Absence Of Father</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="absence_of_father" id="absence_of_father"
                                          class="form-control form-control-lg form-control-solid"
                                          placeholder="Name And Relationship Of Guardian In Absence Of Father"
                                          /></textarea>
                                <br>
                                <span class="text-danger" id="name-error"></span>
                                                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label  fw-semibold fs-6">Freedom Fighter Quota Or
                                Others Quota</label>
                            <div class="col-lg-8 fv-row">
                                <textarea name="quota" id="present_address"
                                          class="form-control form-control-lg form-control-solid" placeholder="Type yes or no"
                                         /></textarea>
                                <br>
                                <span class="text-danger" id="name-error"></span>
                                                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Mandatory Subject</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Mandatory Subject"></i>
                            </label>

                            <div class="col-lg-8 fv-row">
                                <select name="mandatory_subject" id="mandatory_subject" aria-label="Select a  Mandatory Subject" data-control="select2"
                                        data-placeholder="Select a Mandatory Subject..."
                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                    <option value="">Select a Mandatory Subject...</option>
                                </select>
                                <br>
                                                                <span class="text-danger" id="mandatory_subject-error"></span>

                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                <span class="required">Optional Subject</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                   title="Optional Subject"></i>
                            </label>

                            <div class="col-lg-8 fv-row">

                                <select name="optional_subject" id="optional_subject" aria-label="Select a Group" data-control="select2"
                                        data-placeholder="Select an Optional Subject..."
                                        class="form-select form-select-solid form-select-lg fw-semibold">
                                    <option value="">Select a Optional Subject...</option>
                                </select>
                                <br>
                                                                <span class="text-danger" id="optional_subject-error"></span>

                            </div>
                        </div>


                        <div class="row mb-6">
                            <input type="hidden" name="role" value="student">
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <a href="https://www.csbmc.edu.bd/admin/students" class="btn btn-danger btn-active-light-primary me-2">
                            Back
                        </a>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                            Submit
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>

    </div>
    <!--end::Post-->
                </div>
            </div>
        </div>
        <div class="footer py-4 d-flex flex-lg-column noPrint" id="kt_footer">
    <!--begin::Container-->
    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2022©</span>
            <a href="https://ihealthscreen.org/" target="_blank" class="text-gray-800 text-hover-primary">iHealthScreen Bangladesh</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="https://ihealthscreen.org/" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="https://ihealthscreen.org/" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="https://ihealthscreen.org/" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>


    </div>

    <!--begin::Global Javascript Bundle(used by all pages)-->

    <script src="https://www.csbmc.edu.bd/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="https://www.csbmc.edu.bd/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <!-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script> -->
    <!--end::Vendors Javascript-->
    <!-- Calender-->

    <script src="https://www.csbmc.edu.bd/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/apps/calendar/calendar.js"></script>

    <!-- End of Calender-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="https://www.csbmc.edu.bd/assets/js/widgets.bundle.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/widgets.js"></script>

    <script src="https://www.csbmc.edu.bd/assets/js/custom/apps/chat/chat.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/type.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/budget.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/settings.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/team.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/targets.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/files.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/complete.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/create-project/main.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/utilities/modals/users-search.js"></script>

    <script src="https://www.csbmc.edu.bd/assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="https://www.csbmc.edu.bd/assets/js/custom/apps/user-management/users/list/export-users.js"></script>

    <link href="https://www.csbmc.edu.bd/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <script src="https://www.csbmc.edu.bd/assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script>
        $(".birthdate").flatpickr();
        setTimeout(function () {
            $(".alert").hide();
        }, 4000);

        $('#advancedFilter').on('click', function () {
            $('.filter-container').slideToggle("slow");
        });

    </script>


            <script type="text/javascript">
        $(document).ready(function() {
            $('#nick_name').on('input', function() {
                $(this).val($(this).val().toUpperCase());
            });
            $('#name').on('input', function() {
                $(this).val($(this).val().toUpperCase());
            });
        });
        $("#dob").flatpickr();

       function getSubject(){
           var optional_subject = $('#optional_subject');
           var mandatory_subject = $('#mandatory_subject');
            var class_id = $('#class_id').val();
            var session_id = $('#session_id').val();
            var group_id = $('#group_id').val();
            console.log('Selected region ID:', class_id,
            session_id,
            group_id);

            $.ajax({
                url: "https://www.csbmc.edu.bd/get-subject-by-group",
                data: {
                    'class_id': class_id,
                    'session_id': session_id,
                    'group_id': group_id
                },
                type: "GET",
                success: function(data) {
                    console.log('AJAX success!');
                    console.log('Received district data:', data.html);
                    optional_subject.html(data.html);
                    mandatory_subject.html(data.html);
                },
                error: function(data) {
                    console.log('AJAX error!');
                    // Error handling code
                }
            });
        };

    </script>


</body>
<!--end::Body-->

</html>
