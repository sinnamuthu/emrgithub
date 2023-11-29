<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/boxicons.css')) }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/core.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/theme-default.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />

<link href="{{ asset('assets/css/bootstrap.min.css') }}" style="text/css" rel="stylesheet" />
<link href="{{ asset('assets/css/main.css') }}" style="text/css" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


<!--calendar start-->
<link href='{{ asset('assets/css/fullcalendar.min.css') }}' rel='stylesheet' />
<link href='{{ asset('assets/css/fullcalendar.print.min.css') }}' rel='stylesheet' media='print' />
<!--calendar end-->

<!--dropzone-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.3/dist/dropzone.min.css">
<!--dropzone-->

<style>
    .tab_content {width:100% }
    .tabs{padding-left:0;}
    .tabs li {display:inline;list-style:none;border-bottom:1px solid  #C8D0E0;padding-bottom:6px;padding-right:25px}
    .tabs a {color:#000;display:inline-block;font-size:20px;text-decoration:none}
    .tabs a.active { color:#000;border-bottom:5px solid #2A8CFF }
    .tab_content .tabs li {padding:0 10px;display:inline-block;border:0}
    .tab_content .tabs li a{width:115px;height:95px;padding:10px;border:1px solid #CCCCCC;border-radius:10px;position:relative;background-color:transparent !important;background-position:center 10px;background-repeat:no-repeat;display:flex;justify-content:center}
    .tab_content .tabs li a.active{border:1px solid #2A8CFF;background-color:#2A8CFF !important;}
    .tab_content .tabs li a.active span{color:#fff}
    .tab_content .tabs li a span{text-align:center;color:#5C617B;font-size:15px;line-height:18px;position:absolute;bottom:5px;}
    .tab_content .tabs li a.patient{background-image:url('/assets/img/customimage/ic-patient-info2.png')}
    .tab_content .tabs li a.patient.active{background-image:url('/assets/img/customimage/ic-patient-info.png')}
    .tab_content .tabs li a.medical{background-image:url('/assets/img/customimage/ic-medical-info.png')}
    .tab_content .tabs li a.medical.active{background-image:url('/assets/img/customimage/ic-medical-info-o.png')}
    .tab_content .tabs li a.exam{background-image:url('/assets/img/customimage/ic-examination.png')}
    .tab_content .tabs li a.exam.active{background-image:url('/assets/img/customimage/ic-examination-o.png')}
    .tab_content .tabs li a.observation{background-image:url('/assets/img/customimage/ic-observation.png')}
    .tab_content .tabs li a.observation.active{background-image:url('/assets/img/customimage/ic-observation-o.png')}
    .tab_content .tabs li a.treatment{background-image:url('/assets/img/customimage/ic-treatment.png')}
    .tab_content .tabs li a.treatment.active{background-image:url('/assets/img/customimage/ic-treatment-o.png')}
    .tab_content .tabs li a.prescriptions{background-image:url('/assets/img/customimage/ic-prescriptions.png')}
    .tab_content .tabs li a.prescriptions.active{background-image:url('/assets/img/customimage/ic-prescriptions-o.png')}
    .tab_content .tabs li a.clinical{background-image:url('/assets/img/customimage/ic-clinical-notes.png')}
    .tab_content .tabs li a.clinical.active{background-image:url('/assets/img/customimage/ic-clinical-notes-o.png')}
    .tab_content .tabs li a.lab{background-image:url('/assets/img/customimage/ic-lab-works.png')}
    .tab_content .tabs li a.lab.active{background-image:url('/assets/img/customimage/ic-lab-works-o.png')}
    .tab_content .tabs li a.uploads{background-image:url('/assets/img/customimage/ic-uploads.png')}
    .tab_content .tabs li a.uploads.active{background-image:url('/assets/img/customimage/ic-uploads-o.png')}
    
    .tab_content {padding:40px 20px}
    .tab_content .patient, .tab_content .medical{background-color:#fff;padding:20px 120px;box-shadow: 0px 0px 35px 0px rgba(181, 181, 195, 0.1);}
    .tab_content .form-wrap{ margin-bottom:35px}
    
    .tab_content h3{font-size:26px;font-weight:500;margin-bottom:30px;text-align:center}
    .tab_content h4{font-size:18px;font-weight:500;margin-bottom:30px}
    
    .tab_content hr{border-top:1px solid #A3A7AF;margin-top:30px;margin-bottom:30px}
    
    .tab_content .patient button.next{background:url('/assets/img/customimage/arrow-next.png') no-repeat right center; color:#2C9AFF;font-size:16px;padding-right:15px;text-decoration:none}
    .tab_content button.next{background:url('/assets/img/customimage/arrow-next.png') no-repeat right center; color:#2C9AFF;font-size:16px;padding-right:15px;text-decoration:none}
    .tab_content button.back{background:url('/assets/img/customimage/arrow-back.png') no-repeat left center; color:#2C9AFF;font-size:16px;padding-left:25px;text-decoration:none}
    .tab_content .patient p {font-size:18px;font-weight:300;line-height:40px;margin-bottom:0;}
    .tab_content .patient p span{font-weight:400;}
    .tab_content .patient h3{font-size:26px;font-weight:500;margin-bottom:30px;text-align:center}
    .tab_content .patient h4{font-size:18px;font-weight:500;margin-bottom:30px}
    .form-label.small{color:#353F59;font-size:15px;line-height:40px}
    input.form-control.ic{background-repeat: no-repeat;background-position:10px center;padding-left:40px}
    input.form-control.ic.contact{background-image:url('/assets/img/customimage/ic-phone.png');}
    input.form-control.ic.mail{background-image:url('/assets/img/customimage/ic-mail.png');}
    
    .form-switch.add{margin-bottom:30px;padding-left:0;display:flex;}
    .form-switch.add label{font-size:18px;font-weight:500;padding-right:15px}
    .form-check.add .form-check-input{float:none;margin-left:0}
    
    .form-switch.med .form-check-input{width:2.5em;margin-left:-50px}
    .form-switch.med{margin-bottom:30px;padding-left:50px}
    .form-switch.med label{font-size:16px;font-weight:400;color:#000}
    
    .lab-adj-tp{padding-top:55px}
    .tab_content .medical h3{color:#464E5F;margin-bottom:50px;margin-top:15px}
    </style>

<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')
