function onReady(callback) {
  var intervalID = window.setInterval(checkReady, 5000);

  function checkReady() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalID);
      callback.call(this);
    }
  }
}

function show(id, value) {
  var element=  document.getElementById(id);
  if(element){
    element.style.display = value ? 'block' : 'none';
  }
}


(function() {
  // $('#reportMainContent').show();
  $.ajaxSetup({ cache: false });
  setTimeout(function() {

  show('loader-div', false);
  show('loader', false);
  show('report-body', true);
}, 1000);





  $('.show-share-btn').click(function () {
    var icon =$(this).find('i');

    $('.social-share-btns').slideToggle("slow");
    

  });

  $('.show-share-btn-mobile').click(function () {
    var icon =$(this).find('i');
    if (icon.hasClass( "fa-caret-down" )) {
      $('.social-share-btns').hide();
      $('.social-share-btns').css('background','none');
      $('.social-share-btns').css('background','none');
      $('#share').css('background','none');
      $('#share').css('width','auto');
      $('#share').css('right','auto');

      $(this).css('background','#c8c8c8');
      icon.removeClass( "fa-caret-down" );
      icon.addClass( "fa-caret-up" );


    }else {

      $('.social-share-btns').show();
      $('.social-share-btns').css('background','#6e6e6e');
      $('#share').css('background','#6e6e6e');
      $(this).css('background','none');
      $('#share').css('width','100%');

      icon.removeClass( "fa-caret-up" );

        icon.addClass( "fa-caret-down" );

    }



  });
  emailFormHandler();
  register_form_validation();
  login_form_validation();
  choose_topic_description();
  // checkOffset();
  questionnaire_form_validation();

  modelClose();
  alertHide();
  collapseOnWidthChange();
  collapseHide();
  scrollToTop();
})();


function collapseOnWidthChange() {
  $(window).resize(function() {
    var width = $(window).width();
    // if( width >= 768 ) {
    //   // $('.slide-collapse').parent().siblings().show('5000');
    //   // $('.slide-collapse').find(' .collapse-icon').text('remove');
    //
    //
    // }  else
    if( width <= 768 ) {
      // alert();
      $('.slide-collapse').parent().siblings().hide('5000');
      $('.slide-collapse').find('.collapse-icon').removeClass('fa-chevron-up');
      $('.slide-collapse').find('.collapse-icon').addClass('fa-chevron-down');

    }
  });

 // $(window).resize();
}

//custom accordion/collapse function
function collapse(selector) {
  $(selector).parent().siblings().slideDown(1000);
  if($(selector).find('.collapse-icon').hasClass('fa-chevron-down')){
    $(selector).find('.collapse-icon').removeClass('fa-chevron-down');
    $(selector).find('.collapse-icon').addClass('fa-chevron-up');
  }else if($(selector).find('.collapse-icon').hasClass('fa-chevron-up')) {
    $(selector).parent().siblings().slideUp(500);
    $(selector).find('.collapse-icon').removeClass('fa-chevron-up');
    $(selector).find('.collapse-icon').addClass('fa-chevron-down');


  }
}



//email ajax function
function emailFormHandler() {
  var ajaxbusy = false;
  $('#emailReport').submit(function(event) {
    event.preventDefault();
    if (!ajaxbusy) {
      ajaxbusy = true;
      $.ajax({
        type: "POST",
        url: BASE_URL + '2.0/mailer/emailreportajax',
        data: $(this).serialize(),
        dataType: 'json',
        cache: false,
        async: true,
        success: function (result, textStatus, jqXHR) {
          console.log(result);
          console.log(textStatus);
          console.log(jqXHR);
          ajaxbusy = false;
          if (typeof result.error === 'undefined')
          {
            swal({
              title: "Email Sent!",
              text: "Email has been Sent Successfully. Thank you!",
              icon: "success",
              button: "OK!",
            });
            $('#emailReport')[0].reset();
            $('#emailModal').slideUp();
            $('body').removeClass('modal-open');
            $('body').removeAttr("style");
            $('.modal-backdrop').remove();
          } else
          {
            // error.html(result.error);
            swal({
              title: "Email Failed!",
              text: result.error+'. Please Try Again',
              icon: "warning",
              button: "OK!",
            });
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          ajaxbusy = false;
          // console.log(jqXHR);
          // console.log(textStatus);
          // console.log(errorThrown);
          // .html('Network error has occurred please try again!');
          // swal({
          //   title: "Email Failed!",
          //   text: 'Network error has occurred please try again!',
          //   icon: "warning",
          //   button: "OK!",
          // });
          swal({
            title: "Email Sent!",
            text: "Email has been Sent Successfully. Thank you!",
            icon: "success",
            button: "OK!",
          });
          $('#emailReport')[0].reset();
          $('#emailModal').slideUp();
          $('body').removeClass('modal-open');
          $('body').removeAttr("style");
          $('.modal-backdrop').remove();

        }
      });

    }
  });

}





//funtion for closing the model
function modelClose() {
  $( ".btn-close" ).click(function() {
    $('#disclaimerModal').hide();
    $('body').removeClass('modal-open');
  });
}


//funtion for hiding the alert messages
function alertHide() {
  $(".thank-you-alert").fadeTo(2000, 500).slideUp(1000, function(){
    $(".thank-you-alert").slideUp(500);
  });
}


//funtion for collapse/accordion collapese on click event
function collapseHide() {
  $( ".slide-collapse" ).click(function() {
    collapse($(this));
  });
}


function PrintDiv() {
  if($('#reportTopicId').val()){
    var topic_id=$('#reportTopicId').val();
    var url=BASE_URL + 'report.php?topic_id='+topic_id;
    // var ajax='ajax';
    var ajax_print='ajax_print';

    var formData = new FormData();
    formData.append('topic_id', topic_id);
    formData.append('ajax_print', ajax_print);

    // alert(topic_id);
    $.ajax({
      url: url,
      type: 'POST',
      data: {
        topic_id:topic_id,
        ajax_print:ajax_print

      },
      success: function(response) {
        // console.log(response);
        // console.log(response);
        var mywindow = window.open('', 'PRINT', 'height=auto,width=auto');
        mywindow.document.write(response);
        mywindow.document.close();
        mywindow.focus();
        mywindow.print();
        mywindow.close();

      }
    });
  }
  // window.print();
  // var divToPrint = document.getElementById('divToPrint');
  // var popupWin = window.open('', '_blank', 'width=300,height=300');
  // popupWin.document.open();
  // popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
  // popupWin.document.close();
}



function login_form_validation() {
  $('#loginForm').submit(function(event) {
    event.preventDefault();
    //validating email address
    if ($('#targetemail').val().length < 1) {
      alert('Please enter your Email address');
      $('#targetemail').focus();
      return false;
    }

    if (!is_email($('#targetemail').val())) {
      alert('Please enter a valid Email address');
      $('#targetemail').focus();
      return false;
    }


    $("#loginForm")[0].submit();

  });

}



function register_form_validation() {
  $('#signupForm').submit(function(event) {
    event.preventDefault();

    //validating email address
    if ($('#targetemail').val().length < 1) {
      alert('Please enter your Email address');
      $('#targetemail').focus();
      return false;
    }

    if (!is_email($('#targetemail').val())) {
      alert('Please enter a valid Email address');
      $('#targetemail').focus();
      return false;
    }

    if ($('#password').val().length < 6) {
      alert('Minimum characters required 6');
      $('#password').focus();
      return false;
    }
    if (!is_password($('#password').val())) {
      alert('Please enter a valid Password');
      $('#password').focus();
      return false;
    }


    if($('#password_confirm').val()!= $('#password').val()){
      alert('Password do not match');
      $('#password_confirm').focus();
      return false;
    }

    $("#signupForm")[0].submit();
  });
}

function is_email(emailid) {
  var pattern = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
  return pattern.test(emailid);
}

function is_password(password) {
  var pattern = new RegExp(/^[0-9]+$/);
  return pattern.test(password);
}

function is_username(uname) {
  var pattern = new RegExp(/^[a-z0-9_]+$/);
  return pattern.test(uname);
}

function choose_topic_description() {
  $('.click-more-btn').click(function (event) {
    event.preventDefault();
    var title=$(this).parent().siblings("h3").text();
    var description=$(this).parent().find("input").val();

    swal({
      title: title,
      text: description,
      button: 'Close!',
      dangerMode: '#b4b4b4',
    });
  });
}


function checkOffset() {
  // if($('.div-fixed').offset().top + $('.div-fixed').height() >= $('footer').offset().top - 10){
  //   $('.div-fixed').removeClass('div-fixed');
  //   alert('sss');
  // }
  if($('.btn-location').length){
    var fixed_btn = $('#fixed_btn').offset().top ;

    $(window).scroll(function () {
      var currentScroll = $(window).scrollTop();
      var footer_top = $("footer").offset().top;

      if (currentScroll+480 >= fixed_btn){
        $('.btn-location').removeClass('div-fixed');

      }else {
        $('.btn-location').addClass('div-fixed');
      }
    });

  }
}


function questionnaire_form_validation() {
  $('#questionnaire_form').submit(function(event) {
    event.preventDefault();
    //validating email address
    if (!$('input[name=answer_id]').is(':checked')) {
      swal({
        text: 'Please select an answer',
        icon: "warning",
        button: 'Close!',
        dangerMode: '#b4b4b4',
      });
      return false;
    }



    $("#questionnaire_form")[0].submit();

  });

}


function scrollToTop() {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.scrollupbtn').fadeIn();
    } else {
        $('.scrollupbtn').fadeOut();
    }
});

$('.scrollupbtn').click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});
}

   