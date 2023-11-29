<!-- laravel style -->
<script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('assets/js/config.js') }}"></script>

<!-- beautify ignore:end -->

<!--js file for calendar start-->

{{-- <script src='{{ asset('assets/js/moment.min.js') }}'></script>
<script src='{{ asset('assets/js/jquery.min.js') }}'></script>
<script src='{{ asset('assets/js/fullcalendar.min.js') }}'></script> --}}

<!--calendar end-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

  $(document).ready(function () {

    $('#appointment_close').click(function(){
        $('#exampleModalCenter').modal('hide');
    });


    $(".teeth-18").click(function () {var getdata = $(".teeth-18").val();if(getdata == ''){$(".teeth-18").addClass("teeth-on");$(".teeth-18").val(1);}else{$(".teeth-18").removeClass("teeth-on");$(".teeth-18").val('');}});
    $(".teeth-17").click(function () {var getdata = $(".teeth-17").val();if(getdata == ''){$(".teeth-17").addClass("teeth-on");$(".teeth-17").val(1);}else{$(".teeth-17").removeClass("teeth-on");$(".teeth-17").val('');}});
    $(".teeth-16").click(function () {var getdata = $(".teeth-16").val();if(getdata == ''){$(".teeth-16").addClass("teeth-on");$(".teeth-16").val(1);}else{$(".teeth-16").removeClass("teeth-on");$(".teeth-16").val('');}});
    $(".teeth-15").click(function () {var getdata = $(".teeth-15").val();if(getdata == ''){$(".teeth-15").addClass("teeth-on");$(".teeth-15").val(1);}else{$(".teeth-15").removeClass("teeth-on");$(".teeth-15").val('');}});
    $(".teeth-14").click(function () {var getdata = $(".teeth-14").val();if(getdata == ''){$(".teeth-14").addClass("teeth-on");$(".teeth-14").val(1);}else{$(".teeth-14").removeClass("teeth-on");$(".teeth-14").val('');}});
    $(".teeth-13").click(function () {var getdata = $(".teeth-13").val();if(getdata == ''){$(".teeth-13").addClass("teeth-on");$(".teeth-13").val(1);}else{$(".teeth-13").removeClass("teeth-on");$(".teeth-13").val('');}});
    $(".teeth-12").click(function () {var getdata = $(".teeth-12").val();if(getdata == ''){$(".teeth-12").addClass("teeth-on");$(".teeth-12").val(1);}else{$(".teeth-12").removeClass("teeth-on");$(".teeth-12").val('');}});
    $(".teeth-11").click(function () {var getdata = $(".teeth-11").val();if(getdata == ''){$(".teeth-11").addClass("teeth-on");$(".teeth-11").val(1);}else{$(".teeth-11").removeClass("teeth-on");$(".teeth-11").val('');}});
    $(".teeth-21").click(function () {var getdata = $(".teeth-21").val();if(getdata == ''){$(".teeth-21").addClass("teeth-on");$(".teeth-21").val(1);}else{$(".teeth-21").removeClass("teeth-on");$(".teeth-21").val('');}});
    $(".teeth-22").click(function () {var getdata = $(".teeth-22").val();if(getdata == ''){$(".teeth-22").addClass("teeth-on");$(".teeth-22").val(1);}else{$(".teeth-22").removeClass("teeth-on");$(".teeth-22").val('');}});
    $(".teeth-23").click(function () {var getdata = $(".teeth-23").val();if(getdata == ''){$(".teeth-23").addClass("teeth-on");$(".teeth-23").val(1);}else{$(".teeth-23").removeClass("teeth-on");$(".teeth-23").val('');}});
    $(".teeth-24").click(function () {var getdata = $(".teeth-24").val();if(getdata == ''){$(".teeth-24").addClass("teeth-on");$(".teeth-24").val(1);}else{$(".teeth-24").removeClass("teeth-on");$(".teeth-24").val('');}});
    $(".teeth-25").click(function () {var getdata = $(".teeth-25").val();if(getdata == ''){$(".teeth-25").addClass("teeth-on");$(".teeth-25").val(1);}else{$(".teeth-25").removeClass("teeth-on");$(".teeth-25").val('');}});
    $(".teeth-26").click(function () {var getdata = $(".teeth-26").val();if(getdata == ''){$(".teeth-26").addClass("teeth-on");$(".teeth-26").val(1);}else{$(".teeth-26").removeClass("teeth-on");$(".teeth-26").val('');}});
    $(".teeth-27").click(function () {var getdata = $(".teeth-27").val();if(getdata == ''){$(".teeth-27").addClass("teeth-on");$(".teeth-27").val(1);}else{$(".teeth-27").removeClass("teeth-on");$(".teeth-27").val('');}});
    $(".teeth-28").click(function () {var getdata = $(".teeth-28").val();if(getdata == ''){$(".teeth-28").addClass("teeth-on");$(".teeth-28").val(1);}else{$(".teeth-28").removeClass("teeth-on");$(".teeth-28").val('');}});
    $(".teeth-48").click(function () {var getdata = $(".teeth-48").val();if(getdata == ''){$(".teeth-48").addClass("teeth-on");$(".teeth-48").val(1);}else{$(".teeth-48").removeClass("teeth-on");$(".teeth-48").val('');}});
    $(".teeth-47").click(function () {var getdata = $(".teeth-47").val();if(getdata == ''){$(".teeth-47").addClass("teeth-on");$(".teeth-47").val(1);}else{$(".teeth-47").removeClass("teeth-on");$(".teeth-47").val('');}});
    $(".teeth-46").click(function () {var getdata = $(".teeth-46").val();if(getdata == ''){$(".teeth-46").addClass("teeth-on");$(".teeth-46").val(1);}else{$(".teeth-46").removeClass("teeth-on");$(".teeth-46").val('');}});
    $(".teeth-45").click(function () {var getdata = $(".teeth-45").val();if(getdata == ''){$(".teeth-45").addClass("teeth-on");$(".teeth-45").val(1);}else{$(".teeth-45").removeClass("teeth-on");$(".teeth-45").val('');}});
    $(".teeth-44").click(function () {var getdata = $(".teeth-44").val();if(getdata == ''){$(".teeth-44").addClass("teeth-on");$(".teeth-44").val(1);}else{$(".teeth-44").removeClass("teeth-on");$(".teeth-44").val('');}});
    $(".teeth-43").click(function () {var getdata = $(".teeth-43").val();if(getdata == ''){$(".teeth-43").addClass("teeth-on");$(".teeth-43").val(1);}else{$(".teeth-43").removeClass("teeth-on");$(".teeth-43").val('');}});
    $(".teeth-42").click(function () {var getdata = $(".teeth-42").val();if(getdata == ''){$(".teeth-42").addClass("teeth-on");$(".teeth-42").val(1);}else{$(".teeth-42").removeClass("teeth-on");$(".teeth-42").val('');}});
    $(".teeth-41").click(function () {var getdata = $(".teeth-41").val();if(getdata == ''){$(".teeth-41").addClass("teeth-on");$(".teeth-41").val(1);}else{$(".teeth-41").removeClass("teeth-on");$(".teeth-41").val('');}});
    $(".teeth-31").click(function () {var getdata = $(".teeth-31").val();if(getdata == ''){$(".teeth-31").addClass("teeth-on");$(".teeth-31").val(1);}else{$(".teeth-31").removeClass("teeth-on");$(".teeth-31").val('');}});
    $(".teeth-32").click(function () {var getdata = $(".teeth-32").val();if(getdata == ''){$(".teeth-32").addClass("teeth-on");$(".teeth-32").val(1);}else{$(".teeth-32").removeClass("teeth-on");$(".teeth-32").val('');}});
    $(".teeth-33").click(function () {var getdata = $(".teeth-33").val();if(getdata == ''){$(".teeth-33").addClass("teeth-on");$(".teeth-33").val(1);}else{$(".teeth-33").removeClass("teeth-on");$(".teeth-33").val('');}});
    $(".teeth-34").click(function () {var getdata = $(".teeth-34").val();if(getdata == ''){$(".teeth-34").addClass("teeth-on");$(".teeth-34").val(1);}else{$(".teeth-34").removeClass("teeth-on");$(".teeth-34").val('');}});
    $(".teeth-35").click(function () {var getdata = $(".teeth-35").val();if(getdata == ''){$(".teeth-35").addClass("teeth-on");$(".teeth-35").val(1);}else{$(".teeth-35").removeClass("teeth-on");$(".teeth-35").val('');}});
    $(".teeth-36").click(function () {var getdata = $(".teeth-36").val();if(getdata == ''){$(".teeth-36").addClass("teeth-on");$(".teeth-36").val(1);}else{$(".teeth-36").removeClass("teeth-on");$(".teeth-36").val('');}});
    $(".teeth-37").click(function () {var getdata = $(".teeth-37").val();if(getdata == ''){$(".teeth-37").addClass("teeth-on");$(".teeth-37").val(1);}else{$(".teeth-37").removeClass("teeth-on");$(".teeth-37").val('');}});
    $(".teeth-38").click(function () {var getdata = $(".teeth-38").val();if(getdata == ''){$(".teeth-38").addClass("teeth-on");$(".teeth-38").val(1);}else{$(".teeth-38").removeClass("teeth-on");$(".teeth-38").val('');}});
    $(".teeth-55").click(function () {var getdata = $(".teeth-55").val();if(getdata == ''){$(".teeth-55").addClass("teeth-on");$(".teeth-55").val(1);}else{$(".teeth-55").removeClass("teeth-on");$(".teeth-55").val('');}});
    $(".teeth-54").click(function () {var getdata = $(".teeth-54").val();if(getdata == ''){$(".teeth-54").addClass("teeth-on");$(".teeth-54").val(1);}else{$(".teeth-54").removeClass("teeth-on");$(".teeth-54").val('');}});
    $(".teeth-53").click(function () {var getdata = $(".teeth-53").val();if(getdata == ''){$(".teeth-53").addClass("teeth-on");$(".teeth-53").val(1);}else{$(".teeth-53").removeClass("teeth-on");$(".teeth-53").val('');}});
    $(".teeth-52").click(function () {var getdata = $(".teeth-52").val();if(getdata == ''){$(".teeth-52").addClass("teeth-on");$(".teeth-52").val(1);}else{$(".teeth-52").removeClass("teeth-on");$(".teeth-52").val('');}});
    $(".teeth-51").click(function () {var getdata = $(".teeth-51").val();if(getdata == ''){$(".teeth-51").addClass("teeth-on");$(".teeth-51").val(1);}else{$(".teeth-51").removeClass("teeth-on");$(".teeth-51").val('');}});
    $(".teeth-61").click(function () {var getdata = $(".teeth-61").val();if(getdata == ''){$(".teeth-61").addClass("teeth-on");$(".teeth-61").val(1);}else{$(".teeth-61").removeClass("teeth-on");$(".teeth-61").val('');}});
    $(".teeth-62").click(function () {var getdata = $(".teeth-62").val();if(getdata == ''){$(".teeth-62").addClass("teeth-on");$(".teeth-62").val(1);}else{$(".teeth-62").removeClass("teeth-on");$(".teeth-62").val('');}});
    $(".teeth-63").click(function () {var getdata = $(".teeth-63").val();if(getdata == ''){$(".teeth-63").addClass("teeth-on");$(".teeth-63").val(1);}else{$(".teeth-63").removeClass("teeth-on");$(".teeth-63").val('');}});
    $(".teeth-64").click(function () {var getdata = $(".teeth-64").val();if(getdata == ''){$(".teeth-64").addClass("teeth-on");$(".teeth-64").val(1);}else{$(".teeth-64").removeClass("teeth-on");$(".teeth-64").val('');}});
    $(".teeth-65").click(function () {var getdata = $(".teeth-65").val();if(getdata == ''){$(".teeth-65").addClass("teeth-on");$(".teeth-65").val(1);}else{$(".teeth-65").removeClass("teeth-on");$(".teeth-65").val('');}});
    $(".teeth-85").click(function () {var getdata = $(".teeth-85").val();if(getdata == ''){$(".teeth-85").addClass("teeth-on");$(".teeth-85").val(1);}else{$(".teeth-85").removeClass("teeth-on");$(".teeth-85").val('');}});
    $(".teeth-84").click(function () {var getdata = $(".teeth-84").val();if(getdata == ''){$(".teeth-84").addClass("teeth-on");$(".teeth-84").val(1);}else{$(".teeth-84").removeClass("teeth-on");$(".teeth-84").val('');}});
    $(".teeth-83").click(function () {var getdata = $(".teeth-83").val();if(getdata == ''){$(".teeth-83").addClass("teeth-on");$(".teeth-83").val(1);}else{$(".teeth-83").removeClass("teeth-on");$(".teeth-83").val('');}});
    $(".teeth-82").click(function () {var getdata = $(".teeth-82").val();if(getdata == ''){$(".teeth-82").addClass("teeth-on");$(".teeth-82").val(1);}else{$(".teeth-82").removeClass("teeth-on");$(".teeth-82").val('');}});
    $(".teeth-81").click(function () {var getdata = $(".teeth-81").val();if(getdata == ''){$(".teeth-81").addClass("teeth-on");$(".teeth-81").val(1);}else{$(".teeth-81").removeClass("teeth-on");$(".teeth-81").val('');}});
    $(".teeth-71").click(function () {var getdata = $(".teeth-71").val();if(getdata == ''){$(".teeth-71").addClass("teeth-on");$(".teeth-71").val(1);}else{$(".teeth-71").removeClass("teeth-on");$(".teeth-71").val('');}});
    $(".teeth-72").click(function () {var getdata = $(".teeth-72").val();if(getdata == ''){$(".teeth-72").addClass("teeth-on");$(".teeth-72").val(1);}else{$(".teeth-72").removeClass("teeth-on");$(".teeth-72").val('');}});
    $(".teeth-73").click(function () {var getdata = $(".teeth-73").val();if(getdata == ''){$(".teeth-73").addClass("teeth-on");$(".teeth-73").val(1);}else{$(".teeth-73").removeClass("teeth-on");$(".teeth-73").val('');}});
    $(".teeth-74").click(function () {var getdata = $(".teeth-74").val();if(getdata == ''){$(".teeth-74").addClass("teeth-on");$(".teeth-74").val(1);}else{$(".teeth-74").removeClass("teeth-on");$(".teeth-74").val('');}});
    $(".teeth-75").click(function () {var getdata = $(".teeth-75").val();if(getdata == ''){$(".teeth-75").addClass("teeth-on");$(".teeth-75").val(1);}else{$(".teeth-75").removeClass("teeth-on");$(".teeth-75").val('');}});
    
    
     function mobileCheck() {
          if (window.innerWidth < 1000 ) 
          {
             return false;
          } else {
              return true;
          }
      };
    
      var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      defaultView: mobileCheck() ? "month" : "basicWeek", // check calender open in mobile or desktop
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true,
          events: "{{ route('appointment_data') }}",
          displayEventTime: false,
          longPressDelay : mobileCheck() ? '' : '1',
          eventRender: function (event, element, view) {
              if (event.allDay === 'true') {
                  event.allDay = true;
              } else {
                  event.allDay = false;
              }
          },
          selectable: true,
          selectHelper: true,
          select: function (start, end, allDay) {

           var selected_date = $.fullCalendar.formatDate(start, "Y-MM-DD");
           $('#date_appointment').val(selected_date);

            $('#exampleModalCenter').modal('show');

          

            //   var title = prompt('Schedule Appointment');
  
            //   if (title) {
            //       var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            //       var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
          
          // Add new event ajax Post
          
                  $.ajax({
                      url: 'add_event.php',
                      data: 'title=' + title + '&start=' + start + '&end=' + end,
                      type: "POST",
                      success: function (data) {
              
              calendar.fullCalendar('renderEvent',
                          {
                              id: data,
                              title: title,
                              start: start,
                              end: end,
                              allDay: allDay,
                          },
            true
                          );
              
                          displayMessage("Added Successfully");
                      
                      }
                  });
                  
            //   }
              calendar.fullCalendar('unselect');
          },
          editable: true,
          eventDrop: function (event, delta) {
                      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                      
                      // By Drag and drop update event date
                      
                      $.ajax({
                          url: 'change_event_date.php',
                          data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                          type: "POST",
                          success: function (response) {
                              displayMessage("Updated Successfully");
                          }
                      });
                  },
          eventClick: function (event) {
              var confimit = confirm("Do you really want to delete?");
              if (confimit) {
          
          // delete specific event
          
                  $.ajax({
                      type: "POST",
                      url: "delete_event.php",
                      data: "&id=" + event.id,
                      success: function (response) {
              
                          if(parseInt(response) > 0) {
                
                              $('#calendar').fullCalendar('removeEvents', event.id);
                              displayMessage("Deleted Successfully");
                          }
                      }
                  });
              }
          }
  
      });
     
  });
  
  // function to display message
  
  function displayMessage(message) {
        $(".response").html("<div align='center' style='padding:20px;font-size:18px;color:#3539EA' class='success'>"+message+"</div>");
      setInterval(function() { $(".success").fadeOut(); }, 1000);
  }
  
  
  </script>



<script>
	jQuery(document).ready(function(){
jQuery('ul.tabs').each(function(){
    // For each set of tabs, we want to keep track of
    // which tab is active and it's associated content
    var $active, $content, $links = jQuery(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    $active = jQuery($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');

    $content = $($active[0].hash);

    // Hide the remaining content
    $links.not($active).each(function () {
        jQuery(this.hash).hide();
    });

    // Bind the click event handler
    jQuery(this).on('click', 'a', function(e){
        // Make the old tab inactive.
        $active.removeClass('active');
        $content.hide();

        // Update the variables with the new link and content
        $active = jQuery(this);
        $content = jQuery(this.hash);

        // Make the tab active.
        $active.addClass('active');
        $content.show();

        // Prevent the anchor's default click action
        e.preventDefault();
    });
});
	});
</script>
<script>
jQuery(document).ready(function($){  

$('.getimage').click(function() {
    // Get the src attribute value
    var srcValue = $(this).attr('src');

    // Log or use the src value as needed
    console.log('Image source:', srcValue);

    $('.setteethimg').attr('src',srcValue);
  });
  
});
</script>

<script>
$(function () {
    $("#chkSelect").click(function () {
        if ($(this).is(":checked")) {
            $("#content").show();
        } else {
            $("#content").hide();
        }
    });
    $("#chkSelect2").click(function () {
        if ($(this).is(":checked")) {
            $("#content2").show();
        } else {
            $("#content2").hide();
        }
    });
    $("#chkSelect3").click(function () {
        if ($(this).is(":checked")) {
            $("#content3").show();
        } else {
            $("#content3").hide();
        }
    });
    $("#chkSelect4").click(function () {
        if ($(this).is(":checked")) {
            $("#content4").show();
        } else {
            $("#content4").hide();
        }
    });
    


});
</script>
  
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
