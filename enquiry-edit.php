<?php

$html_title = 'Enquiry edit | Essential Italy CMS'

?>

<?php require '_partials/header.php'; ?>

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                Edit
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="index.php" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="enquiries-list-all.php" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Enquiries
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="enquiry-edit.php" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Edit
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <?php require '_partials/_subheader-actions-users.php'; ?>
        </div>
    </div>
</div>
<!-- END: Subheader -->

<div class="m-content">

    <!--begin::Form-->
    <form class="m-form">

        <!--begin:Row-->
        <div class="row">
            <div class="col-xl-9">
        
                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm">

                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Enquiry
                                </h3>
                            </div>			
                        </div>
                    </div>
                    
                    <div class="m-portlet__body">

                        <div class="m-form__section m-form__section--first">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Property:
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                        <option>- Select -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    First name:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Last name:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Email:
                                </label>
                                <div class="col-lg-6">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="email" class="form-control m-input" placeholder="Email">
                                        <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-envelope"></i></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Phone:
                                </label>
                                <div class="col-lg-6">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input" placeholder="Phone">
                                        <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-phone"></i></span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-40"></div>

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Adults
                                </label>
                                <div class="col-lg-3">
                                    <input type="number" class="form-control m-input" placeholder="Adults">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Children
                                </label>
                                <div class="col-lg-3">
                                    <input type="number" class="form-control m-input" placeholder="Children">
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Holiday dates:
                                </label>
                                <div class="col-lg-6">
                                    <div class='input-group' id='m_daterangepicker_2'>
                                        <input type='text' class="form-control m-input" readonly placeholder="Select date range"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Flexibility:
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                        <option>- Select -</option>
                                        <option value="Exact dates only">Exact dates only</option>
                                        <option value="±1-6 days">± 1-6 days</option>
                                        <option value="±1-2 weeks">± 1-2 weeks</option>
                                        <option value="±3 weeks or more">± 3 weeks or more</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Message:
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control m-input" id="exampleTextarea" rows="9"></textarea>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                
                </div>

            </div>
            <div class="col-xl-3">

                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">Status</h3>
                            </div>			
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">Active</label>
                            <div class="col-lg-6">
                                <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                    <label>
                                        <input checked="checked" name="" type="checkbox">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">Type</h3>
                            </div>			
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Type:
                            </label>
                            <div class="col-lg-9">
                                <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                    <option>- Select -</option>
                                    <option value="Website">Website</option>
                                    <option value="Phone">Phone</option>
                                    <option value="Email">Email</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Date:
                            </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control m-input" readonly placeholder="Date received" id="m_datepicker_2_modal"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Notes
                                </h3>
                            </div>			
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <textarea class="form-control m-input" id="exampleTextarea" rows="9"></textarea>
                    </div>
                </div>

            </div>
        </div>
        <!--end::Row-->

        <!--begin:Row-->
        <div class="row">
            <div class="col m--align-left">
                <a href="#" class="btn btn-brand m-btn m-btn--icon">
                    <span>
                        <i class="la la-check"></i>
                        <span>Submit</span>
                    </span>
                </a>
                <a href="#" class="btn btn-secondary m-btn m-btn--icon">
                    <span>
                        <i class="la la-times"></i>
                        <span>Cancel</span>
                    </span>
                </a>
            </div>
        </div>
        <!--end:Row-->

    </form>
    <!--end::Form-->

</div>

<?php require '_partials/footer.php'; ?>