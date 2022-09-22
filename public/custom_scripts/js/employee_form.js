"use strict";


// Class definition
var KTWizard2 = function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false // to make steps clickable this set value true and add data-wizard-clickable="true" in HTML for class="wizard" element
        });

        // Validation before going to next page
        _wizardObj.on('change', function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == 'Valid') {
                        wizard.goTo(wizard.getNewStep());

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: "Kindly fill all required form fields before submitting.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light"
                            }
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false;  // Do not change wizard step, further action will be handled by he validator
        });

        // Change event
        _wizardObj.on('changed', function (wizard) {
            KTUtil.scrollTop();
        });

        // Submit event

_wizardObj.on('submit', function (wizard, event) {
    Swal.fire({
        text: "All is good! Please confirm the form submission.",
        icon: "success",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, submit!",
        cancelButtonText: "No, cancel",
        customClass: {
            confirmButton: "btn font-weight-bold btn-primary",
            cancelButton: "btn font-weight-bold btn-default"
        }
    }).then(function (result) {
        if (result.value) {

            _formEl.submit(function (e){
                e.preventDefault();
                alert('adf')
            }); // Submit form
        } else if (result.dismiss === 'cancel') {
            Swal.fire({
                text: "Your form has not been submitted!.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-primary",
                }
            });
        }
    });
});
}

var _initValidation = function () {
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
// Step 1
_validations.push(FormValidation.formValidation(
_formEl,
{
    fields: {
        full_name: {
            validators: {
                notEmpty: {
                    message: 'Full Name field is required'
                }
            }
        },
        email: {
            validators: {
                notEmpty: {
                    message: 'Email field is required'
                },
                emailAddress: {
                    message: 'Kindly provide a valid email address'
                }
            }
        },
        date_of_birth: {
            validators: {
                notEmpty: {
                    message: 'Date of Birth is required'
                }
            }
        },
        place_of_birth: {
            validators: {
                notEmpty: {
                    message: 'Place of Birth is required'
                }
            }
        },
        gender: {
            validators: {
                notEmpty: {
                    message: 'Gender field is required'
                },
            }
        }
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: '',
        })
    }
}
));

// Step 2
_validations.push(FormValidation.formValidation(
_formEl,
{
    fields: {
        residential_address: {
            validators: {
                notEmpty: {
                    message: 'Residential Address is required'
                }
            }
        },
        phone_number: {
            validators: {
                notEmpty: {
                    message: 'Phone Number is required'
                }
            }
        },
        identity_type: {
            validators: {
                notEmpty: {
                    message: 'Identity Type is required'
                }
            }
        },
        id_file: {
            validators: {
                notEmpty: {
                    message: 'ID File field is required'
                }
            }
        }
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: '',
        })
    }
}
));

// Step 3
_validations.push(FormValidation.formValidation(
_formEl,
{
    fields: {
        fathers_name: {
            validators: {
                notEmpty: {
                    message: 'Father\'s name is required'
                }
            }
        },
        mothers_name: {
            validators: {
                notEmpty: {
                    message: 'Mother\'s name is required'
                }
            }
        },
        marital_status: {
            validators: {
                notEmpty: {
                    message: 'Marital Status is required'
                }
            }
        }
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: '',
        })
    }
}
));

// Step 4
_validations.push(FormValidation.formValidation(
_formEl,
{
    fields: {
        date_employed: {
            validators: {
                notEmpty: {
                    message: 'Date Employed field is required'
                }
            }
        },
        department: {
            validators: {
                notEmpty: {
                    message: 'Department field is required'
                }
            }
        },
        position: {
            validators: {
                notEmpty: {
                    message: 'Position field is required'
                }
            }
        },
        job_description: {
            validators: {
                notEmpty: {
                    message: 'Job Description field is required'
                }
            }
        },
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: '',
        })
    }
}
));

// Step 5
_validations.push(FormValidation.formValidation(
_formEl,
{
    fields: {
        work_experience: {
            validators: {
                notEmpty: {
                    message: 'Work Experience field is required'
                }
            }
        },
    },
    plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        // Bootstrap Framework Integration
        bootstrap: new FormValidation.plugins.Bootstrap({
            //eleInvalidClass: '',
            eleValidClass: '',
        })
    }
}
));
}

return {
// public functions
init: function () {
_wizardEl = KTUtil.getById('kt_wizard');
_formEl = KTUtil.getById('kt_form');

_initWizard();
_initValidation();
}
};
}();

jQuery(document).ready(function () {
KTWizard2.init();
});
