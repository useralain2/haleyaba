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
                    <a href="users-list-all.php" class="m-nav__link">
                        <span class="m-nav__link-text">
                            <?php echo $plural ?>
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="user-edit.php" class="m-nav__link">
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
                                    <?php echo $title ?>
                                </h3>
                            </div>			
                        </div>
                    </div>
                    
                    <div class="m-portlet__body">

                        <div class="m-form__section m-form__section--first">
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
                        </div>

                        <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_1" role="tab">Contacts</a>
                            </li>
                            <!-- <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_2" role="tab">Financial</a>
                            </li> -->
                        </ul>

                        <div class="tab-content">
                            
                            <div class="tab-pane active" id="m_tabs_1" role="tabpanel">
                        
                                <div class="m-form__section">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Mobile:
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" class="form-control m-input" placeholder="Mobile">
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-mobile"></i></span></span>
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
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Fax:
                                        </label>
                                        <div class="col-lg-6">
                                            <div class="m-input-icon m-input-icon--left">
                                                <input type="text" class="form-control m-input" placeholder="Fax">
                                                <span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-fax"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Email address:
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
                                            Address 1
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Address 1">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Address 2
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Address 2">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Town/city
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Town/city">
                                        </div>
                                    </div> 
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Postcode
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Postcode">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Country
                                        </label>
                                        <div class="col-lg-6">
                                            <select class="form-control m-select2" id="select2Countries" name="param">
                                                <option value="" selected="selected">
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="tab-pane" id="m_tabs_2" role="tabpanel">

                                <div class="m-form__section">
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            Bank account:
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Bank account">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            VAT no:
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="VAT no">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            SWIFT code:
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="Swift code">
                                        </div>
                                    </div> 
                                    <div class="form-group m-form__group row">
                                        <label class="col-lg-3 col-form-label">
                                            IBAN
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control m-input" placeholder="IBAN">
                                        </div>
                                    </div>
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
                                <h3 class="m-portlet__head-text">Profile</h3>
                            </div>          
                        </div>
                    </div>
                    <div class="m-portlet__body">
                       <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">   
                                    <img src="./assets/img/user-avatar.jpg" alt="">
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">Mark Andre</span>
                                <a href="" class="m-card-profile__email m-link">mark.andre@gmail.com</a>
                            </div>
                        </div>
                    </div> 
                </div> 
                
                <?php if($curr_page_name != '/customers-edit.php'){ ?>
                    <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">Roles</h3>
                                </div>			
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">Guest</label>
                                <div class="col-lg-6">
                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                        <label>
                                            <input checked="checked" name="" type="checkbox">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">Owner</label>
                                <div class="col-lg-6">
                                    <span class="m-switch m-switch--outline m-switch--icon m-switch--success">
                                        <label>
                                            <input checked="checked" name="" type="checkbox">
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">Admin</label>
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
                <?php } ?>

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