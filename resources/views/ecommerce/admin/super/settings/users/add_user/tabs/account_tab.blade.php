<div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="account_tab" id="account_tab">
    <form class="needs-validation" novalidate="novalidate">
        <div class="row g-2">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="First Name">First Name</label>
                    <input class="form-control" type="text" name="first_name" placeholder="John" id="bootstrap-wizard-validation-wizard-name">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="Last Name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" placeholder="Smith" id="bootstrap-wizard-validation-wizard-name">
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="Email">Email*</label>
                    <input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-validation-wizard-email" data-wizard-validate-email="true">
                    <div class="invalid-feedback">You must add email</div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="Phone Number">Phone Number*</label>
                    <input class="form-control" type="text" name="phone_number" placeholder="0718999000" required="required"  data-wizard-validate-email="true">
                    <div class="invalid-feedback">You must add phone number</div>
                </div>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="Password">Password*</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-validation-wizard-password" data-wizard-validate-password="true">
                    <div class="invalid-feedback">Please enter password</div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label class="form-label" for="Confirm Password">Confirm Password*</label>
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required="required" id="bootstrap-wizard-validation-wizard-confirm-password" data-wizard-validate-confirm-password="true">
                    <div class="invalid-feedback">Passwords need to match</div>
                </div>
            </div>
        </div>
    </form>
</div>
