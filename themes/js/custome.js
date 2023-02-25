/** @format */

$(document).ready(function () {
  $(".customer_menu").click(function () {
    $(".child_menu").slideToggle();
  });

  $(".mynavitem").click(function () {
    $("this").hide();
  });
  /*  HIDE BUTTON WHEN CLICK  */
/**** START TOLTIP ***/
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
/****  END TOOL TIP   */
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

  $('#tableone').DataTable({
    responsive: true,
    "pageLength": 30,
    language: {

      "search": "ابحث:",
      "emptyTable": " لا يوجد بيانات ",
      "infoEmpty": " لا يوجد بيانات ",
      "infoFiltered": " لا يوجد بيانات ",
      "paginate": {
        "first": "الأول",
        "previous": "السابق",
        "next": "التالي",
        "last": "الأخير"
      },
      "searchBuilder": {
        "add": "اضافة شرط",
        "clearAll": "ازالة الكل",
        "condition": "الشرط",
        "data": "المعلومة",
        "logicAnd": "و",
        "logicOr": "أو",
        "value": "القيمة",
        "conditions": {
          "date": {
            "after": "بعد",
            "before": "قبل",
            "between": "بين",
            "empty": "فارغ",
            "equals": "تساوي",
            "notBetween": "ليست بين",
            "notEmpty": "ليست فارغة",
            "not": "ليست "
          },
          "number": {
            "between": "بين",
            "empty": "فارغة",
            "equals": "تساوي",
            "gt": "أكبر من",
            "lt": "أقل من",
            "not": "ليست",
            "notBetween": "ليست بين",
            "notEmpty": "ليست فارغة",
            "gte": "أكبر أو تساوي",
            "lte": "أقل أو تساوي"
          },
          "string": {
            "not": "ليست",
            "notEmpty": "ليست فارغة",
            "startsWith": " تبدأ بـ ",
            "contains": "تحتوي",
            "empty": "فارغة",
            "endsWith": "تنتهي ب",
            "equals": "تساوي",
            "notContains": "لا تحتوي",
            "notStartsWith": "لا تبدأ بـ",
            "notEndsWith": "لا تنتهي بـ"
          },
          "array": {
            "equals": "تساوي",
            "empty": "فارغة",
            "contains": "تحتوي",
            "not": "ليست",
            "notEmpty": "ليست فارغة",
            "without": "بدون"
          }
        },
        "button": {
          "0": "فلاتر البحث",
          "_": "فلاتر البحث (%d)"
        },
        "deleteTitle": "حذف فلاتر",
        "leftTitle": "محاذاة يسار",
        "rightTitle": "محاذاة يمين",
        "title": {
          "0": "البحث المتقدم",
          "_": "البحث المتقدم (فعال)"
        }
      },
      "searchPanes": {
        "clearMessage": "ازالة الكل",
        "collapse": {
          "0": "بحث",
          "_": "بحث (%d)"
        },
        "count": "عدد",
        "countFiltered": "عدد المفلتر",
        "loadMessage": "جارِ التحميل ...",
        "title": "الفلاتر النشطة",
        "showMessage": "إظهار الجميع",
        "collapseMessage": "إخفاء الجميع",
        "emptyPanes": "لا يوجد مربع بحث"
      },
      "infoThousands": ",",
      "datetime": {
        "previous": "السابق",
        "next": "التالي",
        "hours": "الساعة",
        "minutes": "الدقيقة",
        "seconds": "الثانية",
        "unknown": "-",
        "amPm": [
          "صباحا",
          "مساءا"
        ],
        "weekdays": [
          "الأحد",
          "الإثنين",
          "الثلاثاء",
          "الأربعاء",
          "الخميس",
          "الجمعة",
          "السبت"
        ],
        "months": [
          "يناير",
          "فبراير",
          "مارس",
          "أبريل",
          "مايو",
          "يونيو",
          "يوليو",
          "أغسطس",
          "سبتمبر",
          "أكتوبر",
          "نوفمبر",
          "ديسمبر"
        ]
      },

      "decimal": ",",
      "infoFiltered": "(مرشحة من مجموع _MAX_ مُدخل)",
      "searchPlaceholder": "بحث"
    },
    select: true,
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'excel',
        className: 'btn btn-secondary btn-sm',
        text: ' <i class="fa fa-file-export"></i> تصدير لملف اكسل',
      },
      {
        extend: 'print',
        className: 'btn btn-primary btn-sm',
        text: '<i class="fa fa-print"></i>  طباعه   ',
      }
    ],

  });
  /*
  $('.input-daterange').datepicker({
    todayBtn:'linked',
    format: "yyyy-mm-dd",
    autoclose: true
   });
*/
   

  // START NEW WEB SITE EDUCTION

  // START Admin Users 
  if (window.location.href.indexOf("dir=admin_users") != -1) {
    $("#lnk-whatsapp").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-whatsapp").addClass("active-tab");
    } else {
      $("#lnk-rep-whatsapp").addClass("active-tab");
    }
  }
  // START Privilage
  if (window.location.href.indexOf("dir=privilage") != -1) {
    $("#lnk-privilage").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-rep-privilage").addClass("active-tab");
    } else {
      $("#lnk-rep-privilage").addClass("active-tab");
    }
  }
  /////////////////////////////////////
  if (window.location.href.indexOf("dir=clients/contract_request") != -1) {
    $("#lnk-contract").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-contract").addClass("active-tab");
    } else {
      $("#lnk-rep-contract").addClass("active-tab");
    }
  }
  //////////////////////////////////////////////
  /////////////////////////////////////
  if (window.location.href.indexOf("dir=clients/accounting_report") != -1) {
    $("#lnk-accounting").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-accounting").addClass("active-tab");
    } else {
      $("#lnk-rep-accounting").addClass("active-tab");
    }
  }
  //////////////////////////////////////////////
  if (window.location.href.indexOf("dir=clients/tax_services") != -1) {
    $("#lnk-tax-services").addClass("active menu-is-opening menu-open");
    if (window.location.href.indexOf("add") != -1) {
      $("#lnk-add-tax-services").addClass("active-tab");
    } else {
      $("#lnk-rep-tax-services").addClass("active-tab");
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
/** START DATEPICKER  */
$(function () {
  $(".datepick").datepicker();
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
