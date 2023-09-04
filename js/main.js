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

jQuery(document).ready(function () {
  jQuery("#get_contact-form").submit(function (event) {
    event.preventDefault();

    var ajax_url = jQuery(this).attr("ajax_url");

    var form = jQuery("#get_contact-form").serialize();
    var formdata = new FormData();

    formdata.append("action", "get_contact_data");
    formdata.append("get_contact_data", form);

    // alert(ajax_url);

    // console.log("hello KAmrul");

    // alert("from ajax");
    jQuery.ajax(ajax_url, {
      type: "POST",
      data: formdata,
      processData: false,
      contentType: false,

      success: function (res) {
        // alert(res);
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
