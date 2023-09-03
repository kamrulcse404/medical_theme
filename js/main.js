jQuery(document).ready(function () {
  // register new client
  jQuery("#get_appoinment").submit(function (event) {
    event.preventDefault();

    jQuery(".custom-form").addClass("processing-loader");

    // var name = jQuery("#get_name").val();

    // if(name == ''){
      
    //   alert('Name Field Required !');
    //   }
    var ajax_url = jQuery(this).attr("ajax_url");
    // var ajax_url = my_ajax_object.ajax_url;

    // alert(ajax_url);

    // form functionality
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
        jQuery(".custom-form").removeClass("processing-loader");

        // console.log(res) ;
        if (res.success === false) {
          alert(res.message);

          if (res.type === "email_error") {
            jQuery("#email_error").text(res.message);
          } else {
            jQuery("#email_error").text("");
          }

          if (res.type === "username_error") {
            jQuery("#username_error").text(res.message);
          } else {
            jQuery("#username_error").text("");
          }
        } else {
          alert(res.data);
          jQuery("#register_new_client")[0].reset();
          // alert(home_url) ;
          window.location.href = home_url;
        }
      },

      error: function (err) {},
    });
  });
});
