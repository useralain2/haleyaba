<?php

$html_title = 'Property Edit | Essential Italy CMS'

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
                    <a href="proerties-list-all.php" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Properties
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="proerty-edit.php" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Edit
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <?php require '_partials/_subheader-actions-properties.php'; ?>
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
                                    Property
                                </h3>
                            </div>			
                        </div>
                    </div>
                    
                    <div class="m-portlet__body">
                        
                        <div class="m-form__section m-form__section--first">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Name:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Property name">
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">Type:</label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                        <option>- Select -</option>
                                        <option>Apartment complex</option>
                                        <option>Apartment (single unit)</option>
                                        <option>Hotel complex</option>
                                        <option>Hotel room (single unit)</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="m-form__group form-group row">
                                <label class="col-lg-3 col-form-label">
                                    Service:
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control m-bootstrap-select m_selectpicker" id="exampleSelect1">
                                        <option>- Select -</option>
                                        <option>B&amp;B</option>
                                        <option>Half board</option>
                                        <option>Full board</option>
                                        <option>All inclusive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Owner
                                </label>
                                <div class="col-lg-6">
                                    <select class="form-control m-select2" id="select2Countries" name="param">
                                        <option value="" selected="selected">
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Lead sentence
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control m-input" id="exampleTextarea" rows="5" placeholder="Lead sentence"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="m-form__section m-form__section--last">
                            <ul class="nav nav-tabs m-tabs-line m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_tabs_1" role="tab" aria-selected="true">Location</a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_2" role="tab" aria-selected="false">Details</a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_3" role="tab" aria-selected="false">Description</a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_4" role="tab" aria-selected="false">Meta</a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_5" role="tab" aria-selected="false">Pre-departure</a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="m_tabs_1" role="tabpanel">

                                    <div class="m-form__section">
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Location
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control m-input" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Map pin
                                            </label>
                                            <div class="col-lg-6">
                                                <form class="form-inline margin-bottom-10" action="#">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="m_gmap_8_address" placeholder="address...">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-brand" id="m_gmap_8_btn">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="m_gmap_8" style="height:160px;"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="m_tabs_2" role="tabpanel">

                                    <div class="m-form__section">
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Bedrooms
                                            </label>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control m-input" placeholder="Bedrooms">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Beds
                                            </label>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control m-input" placeholder="Beds">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Extra beds
                                            </label>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control m-input" placeholder="Extra beds">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Bathrooms
                                            </label>
                                            <div class="col-lg-3">
                                                <input type="number" class="form-control m-input" placeholder="Bathrooms">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Floorspace
                                            </label>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input class="form-control m-input" aria-describedby="basic-addon2" type="number">
                                                    <div class="input-group-append"><span class="input-group-text" id="basic-addon2">m<sup>2</sup></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Pool dimensions
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control m-input" placeholder="Pool dimensions">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Distances
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control m-input" placeholder="Distances">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-form__heading">
                                        <h5>Amenities</h5>
                                    </div>
                                    <div class="m-checkbox-inline">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Air conditioning 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Heating
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> WIFI/internet
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Washing machine
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Dishwasher 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Oven
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Microwave oven 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Satellite TV
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> DVD player
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> iPod dock stn.
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Open fireplace 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Mosquito nets 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Barbecue 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Private parking 
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Woodburning stove 
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-20"></div>
                                    <div class="m-form__heading">
                                        <h5>Leisure</h5>
                                    </div>
                                    <div class="m-checkbox-inline">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Pool
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Private pool
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Shared pool
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Pool/beach towels
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Sun umbrellas
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Sun beds
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Beach
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Restaurants
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Boat hire
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Boat trips
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Horse riding
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Water sports
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Bicycles
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Bicycle hire
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Bar
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Spa
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Tennis court
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Children's play area
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Gym/fitness area
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-20"></div>
                                    <div class="m-form__heading">
                                        <h5>Services</h5>
                                    </div>
                                    <div class="m-checkbox-inline">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Cleaning service
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Cook available
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Childrens club
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Laundry service
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Shuttle bus
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Babysitting
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-20"></div>
                                    <div class="m-form__heading">
                                        <h5>Nearby</h5>
                                    </div>
                                    <div class="m-checkbox-inline">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Nr. beach
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Nr. restaurant
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-20"></div>
                                    <div class="m-form__heading">
                                        <h5>Recommendations</h5>
                                    </div>
                                    <div class="m-checkbox-inline">
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Family &amp; friends
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Seaside holidays
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Romantic holidays
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Rural retreats
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> City breaks
                                            <span></span>
                                        </label>
                                        <label class="m-checkbox">
                                            <input type="checkbox"> Boutique hotels
                                            <span></span>
                                        </label>
                                    </div>

                                </div>

                                <div class="tab-pane" id="m_tabs_3" role="tabpanel">

                                    <div class="summernote" id="m_summernote_1"></div>

                                </div>

                                <div class="tab-pane" id="m_tabs_4" role="tabpanel">

                                    <div class="m-form__section">
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Slug
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control m-input" placeholder="Slug">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Title tag
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control m-input" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label class="col-lg-3 col-form-label">
                                                Meta description
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control m-input" id="exampleTextarea" rows="5" placeholder="Meta description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane" id="m_tabs_5" role="tabpanel">

                                    <div class="summernote" id="m_summernote_1"></div>

                                </div>
                            </div>

                        </div>
                        
                    </div>
                
                </div>

                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm m-portlet--collapsed" m-portlet="true">

                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Pricing
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="#"  m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-angle-down"></i>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <a href="#"  m-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        
                        <div class="m-form__section m-form__section--first">
                            Pricing...
                        </div>
                    
                    </div>
                </div>

                <div class="m-portlet m-portlet--bordered m-portlet--unair m-portlet--head-sm m-portlet--collapsed" m-portlet="true">

                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Photos
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a href="#"  m-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-angle-down"></i>
                                    </a>
                                </li>
                                <li class="m-portlet__nav-item">
                                    <a href="#"  m-portlet-tool="fullscreen" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-expand"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="m-portlet__body">
                        
                        <div class="m-form__section m-form__section--first">
                            <div class="m-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
                                <div class="m-dropzone__msg dz-message needsclick">
                                    <h3 class="m-dropzone__msg-title">
                                        Drop files here or click to upload.
                                    </h3>
                                    <span class="m-dropzone__msg-desc">
                                        Upload up to 10 files
                                    </span>
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
                                <h3 class="m-portlet__head-text">Settings</h3>
                            </div>			
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-5 col-form-label">Availability</label>
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
                            <label class="col-lg-5 col-form-label">Featured</label>
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