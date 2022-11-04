/** @format */

$(document).ready(function () {
  $(".customer_menu").click(function () {
    $(".child_menu").slideToggle();
  });

  $(".mynavitem").click(function () {
    $("this").hide();
  });
  /*  HIDE BUTTON WHEN CLICK  */


  // START CONFIRM MESSAGE
  $(".confirm").click(function () {
    return confirm(" هل تريد حذف هذا العنصر ");
  });

  $(".btn_image").click(function () {
    $(".image_info").css("top", "0px");
  });

  $(".add_new_rental_accident").click(function () {
    $(".add_rental_accident").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".add_rental_accident").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  $(".add_new_payment_accident").click(function () {
    $(".add_payment_accident").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".add_payment_accident").css("top", "-900px");
    $(".overflow").css("display", "none");
  });
  ////// show payment customer
  $(".show_payment_customer").click(function () {
    $(".show_new_payment_customer").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  ////// show infraction
  $(".show_payment_customer2").click(function () {
    $(".show_new_payment_customer2").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer2").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  ////// show Accident
  $(".show_payment_customer3").click(function () {
    $(".show_new_payment_customer3").css("top", "100px");
    $(".overflow").css("display", "block");
  });
  $(".closebtn").click(function () {
    $(".show_new_payment_customer3").css("top", "-900px");
    $(".overflow").css("display", "none");
  });

  $(".savebutton").click(function () {
    $(".image_info").css("top", "-600px");
  });
  $(".printbtn").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content").printArea(options);
  });

  $(".printbtn2").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content2").printArea(options);
  });
  $(".printbtn3").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content3").printArea(options);
  });
  $(".printbtn4").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content4").printArea(options);
  });
  $(".printbtn5").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content5").printArea(options);
  });
  $(".printbtn6").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content6").printArea(options);
  });
  $(".printbtn7").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content7").printArea(options);
  });

  $(".new_select").select2();
  // loader
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  var dev = $("#logo").dropify({});
  dev = dev.data("dropify");
  var dev2 = $("#logo2").dropify({});
  dev2 = dev2.data("dropify");
  var dev3 = $("#logo3").dropify({});
  dev3 = dev3.data("dropify");
  var dev4 = $("#logo4").dropify({});
  dev4 = dev4.data("dropify");
  var dev5 = $(".logo2").dropify({});
  dev5 = dev5.data("dropify");
  var dev = $("#logo").dropify({});
  dev.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo").attr("data_table");
    var col_pk = $("#logo").attr("col_pk");
    var col_val = $("#logo").attr("col_val");

    var img_column = $("#logo").attr("name");
    var data_value = $("#logo").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });

  var dev2 = $("#logo2").dropify({});
  dev2.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo2").attr("data_table");
    var col_pk = $("#logo2").attr("col_pk");
    var col_val = $("#logo2").attr("col_val");

    var img_column = $("#logo2").attr("name");
    var data_value = $("#logo2").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });
  var dev3 = $("#logo3").dropify({});
  dev3.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo3").attr("data_table");
    var col_pk = $("#logo3").attr("col_pk");
    var col_val = $("#logo3").attr("col_val");

    var img_column = $("#logo3").attr("name");
    var data_value = $("#logo3").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });
  var dev4 = $("#logo4").dropify({});
  dev4.on("dropify.beforeClear", function (event, element) {
    //alert($(element).attr("data-table"));
    var data_table = $("#logo4").attr("data_table");
    var col_pk = $("#logo4").attr("col_pk");
    var col_val = $("#logo4").attr("col_val");

    var img_column = $("#logo4").attr("name");
    var data_value = $("#logo4").attr("data_value");

    delete_image(data_table, col_pk, col_val, img_column, data_value);
  });
  $("#tableone").DataTable({
    responsive: true,
    bLengthChange: false,
  });
  $("#table").DataTable();


  // START NEW WEB SITE EDUCTION

  // START WHATSAPP
  if (window.location.href.indexOf("dir=admin_users") != -1) {
    $("#lnk-whatsapp").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-whatsapp").addClass("active-tab");
    } else {
      $("#lnk-rep-whatsapp").addClass("active-tab");
    }
  }

  // END CONTACT

  $(".fa-eye").click(function () {
    $(this).toggleClass("active");
    if ($(this).hasClass("active")) {
      $(this).removeClass("fa-eye");
      $(this).addClass("fa-eye-slash");

      $(".passwordinput").attr("type", "text");
    } else {
      $(this).removeClass("fa-eye-slash");
      $(this).addClass("fa-eye");
      $(".passwordinput").attr("type", "password");
    }
  });
  /** PRINT CONTENT */
  $(".printbtn").click(function () {
    var mode = "iframe";
    var close = mode == "popup";
    var options = { mode: mode, popClose: close };
    $(".print_content").printArea(options);
  });
  // END NEW WEBSITE EDUCATION

  $(function () {
    $(".rateyo")
      .rateYo()
      .on("rateyo.change", function (e, data) {
        var rating = data.rating;
        $(this)
          .parent()
          .find(".score")
          .text("score :" + $(this).attr("data-rateyo-score"));
        $(this)
          .parent()
          .find(".result")
          .text("rating :" + rating);
        $(this).parent().find("input[name=rating]").val(rating); //add rating value to input field
      });
  });
  $(".country").select2({
    dropdownParent: $("#staticBackdrop")
  });
  $(".new_select").select2({
    dropdownParent: $(".modal")
  });

  $('select:not(.normal)').each(function () {
    $(this).select2({
      dropdownParent: $(this).parent()
    });
  });

  
});
