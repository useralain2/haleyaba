<?php

$title = 'Page';
$plural = 'Pages';
$html_title = $title.' edit | Essential Italy CMS'

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
                            <?php echo $plural; ?>
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
                                    <?php echo $title; ?>
                                </h3>
                            </div>			
                        </div>
                    </div>
                    
                    <div class="m-portlet__body">

                        <div class="m-form__section m-form__section--first"> 

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Title:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Title">
                                </div>
                            </div>  

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Url:
                                </label>
                                <div class="col-lg-6 input-group m-input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            http://www.yabayabayabalah.com/
                                        </span>
                                    </div>
                                    <input type="text" class="form-control m-input" placeholder="about-us" aria-describedby="basic-addon1">
                                </div>
                            </div> 


                            
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    heading:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="heading">
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Description:
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="summernote" id="m_summernote_1"></div>
                                </div>
                            </div>

                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Content:
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="summernote" id="m_summernote_1"></div>
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
                                <h3 class="m-portlet__head-text">Page options</h3>
                            </div>    
                        </div> 
                    </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Template:
                            </label>
                            <div class="col-lg-9">
                                <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                    <option>&mdash; Select &mdash;</option>
                                    <option>About us</option>
                                    <option>Contact us</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Parent:
                            </label>
                            <div class="col-lg-9">
                                <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                    <option>&mdash; Select &mdash;</option>
                                    <option>About us</option>
                                    <option>Contact us</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <!--end::Row-->
        
        <?php include '_partials/_content-submit.php'; ?> 

    </form>
    <!--end::Form-->

</div>

<?php require '_partials/footer.php'; ?>