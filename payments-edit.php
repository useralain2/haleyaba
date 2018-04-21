<?php

$title = 'Payment option';
$plural = 'Payment options';
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
                                <label class="col-form-label col-lg-3 col-sm-12">
                                    Description:
                                </label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="summernote" id="m_summernote_1"></div>
                                </div>
                            </div>

                            <div class="m-form__seperator m-form__seperator--dashed m--margin-top-20 m--margin-bottom-40"></div>

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Gateway:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Gateway">
                                </div>
                            </div> 

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Username/ ID:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="User">
                                </div>
                            </div> 

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Password:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Password">
                                </div>
                            </div> 

                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    Port:
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control m-input" placeholder="Port">
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
                                <h3 class="m-portlet__head-text">Countries</h3>
                            </div>    
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                <li class="m-portlet__nav-item">
                                    <a id="ybSelectAll" href="javascript:;" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-check-circle"></i>
                                    </a>
                                </li> 
                                <li class="m-portlet__nav-item">
                                    <a id="ybClearAll" href="javascript:;" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                        <i class="la la-times-circle-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>  
                    </div>
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                             <?php $countries = array('Afghanistan', 'Åland Islands', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bangladesh', 'Barbados', 'Bahamas', 'Bahrain', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Brazil', 'British Indian Ocean Territory', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burma', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo-Brazzaville', 'Congo-Kinshasa', 'Cook Islands', 'Costa Rica', '$_[', 'Croatia', 'Curaçao', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'East Timor', 'Ecuador', 'El Salvador', 'Egypt', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands', 'Faroe Islands', 'Federated States of Micronesia', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Lands', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Heard and McDonald Islands', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy', 'Jamaica', 'Japan', 'Jersey', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macau', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Réunion', 'Romania', 'Russia', 'Rwanda', 'Saint Barthélemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent', 'Samoa', 'San Marino', 'São Tomé and Príncipe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Sint Maarten', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia', 'South Korea', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard and Jan Mayen', 'Sweden', 'Swaziland', 'Switzerland', 'Syria', 'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Vatican City', 'Vietnam', 'Venezuela', 'Wallis and Futuna', 'Western Sahara', 'Yemen', 'Zambia', 'Zimbabwe'); ?>
                            
                            <div class="m-checkbox-list col-lg-12 m-scrollable" class="m-scrollable" data-scrollable="true" data-max-height="300"> 
                                
                                <?php foreach ($countries as $country) { ?>
                                    <label class="m-checkbox m-checkbox--brand">
                                        <input class="yb_countries_list" type="checkbox">
                                        <?php echo $country; ?>
                                        <span></span>
                                    </label> 
                                <?php } ?>
                                
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