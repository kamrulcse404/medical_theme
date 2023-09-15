// appoinment 

jQuery(document).ready(function () {
  // register new client
  jQuery("#get_appoinment").submit(function (event) {
    event.preventDefault();

    // jQuery(".custom-form").addClass("processing-loader");

    var ajax_url = jQuery(this).attr("ajax_url");

    var form = jQuery("#get_appoinment").serialize();
    var formdata = new FormData();
    formdata.append("action", "get_appoinment_data");
    formdata.append("get_appoinment_data", form);

    // console.log(form);

    jQuery.ajax(ajax_url, {
      // Using the localized object here
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {

        document.getElementById("get_appoinment").reset(); 

        if (res.success === false) {
          alert(res.message);
        } else {
          alert(res.data);
          window.location.href = home_url;
        }
      },
      error: function (err) {},
    });
  });
});


// contact
jQuery(document).ready(function () {
  jQuery("#get_contact-form").submit(function (event) { 


    event.preventDefault();
    // jQuery("#get_contact-form").addClass("processing-loader");

    var ajax_url = jQuery(this).attr("ajax_url");

    var form = jQuery("#get_contact-form").serialize();
    var formdata = new FormData();

    formdata.append("action", "get_contact_data");
    formdata.append("get_contact_data", form);

    jQuery.ajax(ajax_url, {
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {

        document.getElementById("get_contact-form").reset();      

        alert('res123');
       
        if (res.success === false) {
          alert(JSON.stringify(res.message));
        } else {
          
          alert(res.data);
          window.location.href = home_url;
        }
      },

      error: function (err) {},
    });
  });
});

// comments 
jQuery(document).ready(function () {
  jQuery("#get-comment").submit(function (event) { 


    event.preventDefault();
    // jQuery("#get_contact-form").addClass("processing-loader");

    var ajax_url = jQuery(this).attr("ajax_url");

    var form = jQuery("#get-comment").serialize();
    var formdata = new FormData();

    formdata.append("action", "get_comment_data");
    formdata.append("get_comment_data", form);

    jQuery.ajax(ajax_url, {
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {

        document.getElementById("get-comment").reset();      

        alert('comment 123');
       
        if (res.success === false) {
          alert(JSON.stringify(res.message));
        } else {
          
          alert(res.data);
          window.location.href = home_url;
        }
      },

      error: function (err) {},
    });
  });
});

