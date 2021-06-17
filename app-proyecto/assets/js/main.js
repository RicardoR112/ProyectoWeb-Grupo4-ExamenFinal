/*Subiendo imagen de JEFE DE PRODUCCION al server
 */
function upload_image_calificador() {
  //Funcion encargada de enviar el archivo via AJAX
  $(".upload-msg").text("Subiendo, por favor espere...");
  var inputFileImage = document.getElementById("fileToUpload");
  var file = inputFileImage.files[0];
  var data = new FormData();

  data.append("fileToUpload", file);

  /*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
    data.append('file'+i, file);
  });*/

  // console.log(inputFileImage);
  $.ajax({
    url: "accountcalificador/upload", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {
      if (data == "") {
        $(".upload-msg")
          .html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Ups! no pudimos subir tu imagen</h4>
      <p></p>
      <hr>
      <p class="mb-0">Ah ocurrido un error, puede que el archivo no sea una imagen, ya este en nuestro servidor o exceda el tamaño de 1.440536 MB.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`);
      } else {
        $(".profile-img").attr("src", data);
        $(".upload-msg")
          .html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Imagen subida correctamente!</h4>
    <p></p>
    <hr>
    <p class="mb-0">Su foto de perfil ha sido actualizada.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>`);
      }

      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(700, 0)
          .slideUp(700, function () {
            $(this).remove();
          });
      }, 7000);
    },
  });
}

function upload_image_estudiante() {
  //Funcion encargada de enviar el archivo via AJAX
  $(".upload-msg").text("Subiendo, por favor espere...");
  var inputFileImage = document.getElementById("fileToUpload");
  var file = inputFileImage.files[0];
  var data = new FormData();

  data.append("fileToUpload", file);

  /*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
    data.append('file'+i, file);
  });*/

  // console.log(inputFileImage);
  $.ajax({
    url: "accountestudiante/upload", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {
      if (data == "") {
        $(".upload-msg")
          .html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Ups! no pudimos subir tu imagen</h4>
      <p></p>
      <hr>
      <p class="mb-0">Ah ocurrido un error, puede que el archivo no sea una imagen, ya este en nuestro servidor o exceda el tamaño de 1.440536 MB.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`);
      } else {
        $(".profile-img").attr("src", data);
        $(".upload-msg")
          .html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Imagen subida correctamente!</h4>
    <p></p>
    <hr>
    <p class="mb-0">Su foto de perfil ha sido actualizada.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>`);
      }

      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(700, 0)
          .slideUp(700, function () {
            $(this).remove();
          });
      }, 7000);
    },
  });
}


function upload_image_admin() {
  //Funcion encargada de enviar el archivo via AJAX
  $(".upload-msg").text("Subiendo, por favor espere...");
  var inputFileImage = document.getElementById("fileToUpload");
  var file = inputFileImage.files[0];
  var data = new FormData();

  data.append("fileToUpload", file);

  /*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
    data.append('file'+i, file);
  });*/

  // console.log(inputFileImage);
  $.ajax({
    url: "account/upload", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {
      if (data == "") {
        $(".upload-msg")
          .html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Ups! no pudimos subir tu imagen</h4>
      <p></p>
      <hr>
      <p class="mb-0">Ah ocurrido un error, puede que el archivo no sea una imagen, ya este en nuestro servidor o exceda el tamaño de 1.440536 MB.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`);
      } else {
        $(".profile-img").attr("src", data);
        $(".upload-msg")
          .html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Imagen subida correctamente!</h4>
    <p></p>
    <hr>
    <p class="mb-0">Su foto de perfil ha sido actualizada.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>`);
      }

      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(700, 0)
          .slideUp(700, function () {
            $(this).remove();
          });
      }, 7000);
    },
  });
}

/*actualiza datos del usuario tipo admin
 */
function updateProfileAdmin() {
  var nombres = window.document.getElementById("nombres").value;
  var apellidos = window.document.getElementById("apellidos").value;
  var email = window.document.getElementById("email").value;
  var document = window.document.getElementById("documento").value;
  var tipo_document = window.document.getElementById("tipo_documento").value;
  var fecha_nac = window.document.getElementById("fecha_nac").value;
  var sexo = window.document.querySelector('input[name="sexo"]:checked').value;
  
  
  
  var data = new FormData();


  data.append("nombres", nombres);
  data.append("apellidos", apellidos);
  data.append("email", email);
  data.append("document", document);
  data.append("tipo_document", tipo_document);
  data.append("fecha_nac", fecha_nac);
  data.append("sexo", sexo);
  $.ajax({
    url: "account/updatedataprofile", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {
      var message = window.document.getElementById("msg-succes");
      message.innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Acción exitosa! ${nombres}</h4>
      <p>${data}</p>
      <hr>
      <p class="mb-0">Operacion completada.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`;
      $("html, body").animate({ scrollTop: 0 }, 600);
      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(400, 0)
          .slideUp(400, function () {
            $(this).remove();
          });
      }, 4000);
    },
  });
}

function guardarCalificacion(){
  var calificacion = $("#calificacion").val();
  var id_articulo = $("#id_articulo").val();

  var data = new FormData();


  data.append("calificacion", calificacion);
  data.append("id_articulo", id_articulo);
  
  $.ajax({
    url: "accountcalificador/calificar", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {
      var message = window.document.getElementById("message");
      message.innerHTML = `<div class="alert alert-success alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Acción exitosa!</h4>
      <p>${data}</p>
      <hr>
      <p class="mb-0">Operacion completada.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`;
      $("html, body").animate({ scrollTop: 0 }, 600);
      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(400, 0)
          .slideUp(400, function () {
            $(this).remove();
          });
      }, 4000);
    },
  });

  
}

function downloadpdf(id){
  console.log('el id del articulo a descargar es '+id);
}


$(document).ready(function (e) {
  $("#calificar").on("show.bs.modal", function (e) {

    var id_calificador = $(e.relatedTarget).data().idcalificador;
    var autor = $(e.relatedTarget).data().autor;
    var id_autor = $(e.relatedTarget).data().idautor;
    var fecha = $(e.relatedTarget).data().fecha;
    var titulo = $(e.relatedTarget).data().titulo;
    var id_articulo = $(e.relatedTarget).data().idarticulo;
    console.log('idart'+id_articulo);
     fecha = jQuery.timeago(fecha);
   $("#labelArticulo").html(titulo);
   $("#labelAutor").html(autor);
   $("#labelFecha").html(fecha);
   $("#id_articulo").val(id_articulo);

  });
});


/*Codigo modal
 */

$(document).ready(function (e) {
  $('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    
    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
});
});

$(document).ready(function (e) {
  $("#edit-user").on("show.bs.modal", function (e) {
    var id = $(e.relatedTarget).data().id;
    var nombres = $(e.relatedTarget).data().nombres;
    var apellidos = $(e.relatedTarget).data().apellidos;
    var documento = $(e.relatedTarget).data().document;
    var tipoDoc = $(e.relatedTarget).data().tipodoc;
    var email = $(e.relatedTarget).data().email;
    var rol = $(e.relatedTarget).data().rol;
    var imagen = $(e.relatedTarget).data().imagen;
    if(imagen ==''){
      imagen = 'assets/images/profile-default.png';
    }

    console.log(imagen);
    console.log(nombres);
    console.log(apellidos);
    console.log(documento);
    console.log(tipoDoc);
    console.log(email);
    console.log(rol);
$(e.currentTarget)
      .find("#image-user")
      .html(
        `<img src="${imagen}"  style="width:50px; height:50px;" alt="defaultPhoto">`
      );
    $(e.currentTarget).find("#idUser").val(id);
    $(e.currentTarget).find("#nombres").val(nombres);
    $(e.currentTarget).find("#apellidos").val(apellidos);
    $(e.currentTarget).find("#documento").val(documento);
    $(e.currentTarget).find("#selectedTD").val(tipoDoc);
    $(e.currentTarget).find("#selectedTD").html(tipoDoc);
    $(e.currentTarget).find("#email").val(email);
    $(e.currentTarget).find("#selectedTU").val(rol);
    if(rol==0){
      $(e.currentTarget).find("#selectedTU").html('Administrador');
    }
    if(rol==1){
      $(e.currentTarget).find("#selectedTU").html('Calificador');
    }
    if(rol==2){
      $(e.currentTarget).find("#selectedTU").html('Estudiante');
    }
    if(rol==3){
      $(e.currentTarget).find("#selectedTU").html('Estudiante');
    }
    
    

    
  });
});

function saveChangesUser(){
  /* Para obtener el valor */
var tipo_user = document.getElementById("selectTU").value;
 /* Para obtener el texto */
  combo = document.getElementById("selectTD");
 var tipo_doc = combo.options[combo.selectedIndex].text;
 var nombres = document.getElementById("nombres").value;
 var apellidos = document.getElementById("apellidos").value;
 var documento = document.getElementById("documento").value;
 var email = document.getElementById("email").value;
 var id_user = document.getElementById("idUser").value;

 var data = new FormData();

  data.append("id_user", id_user);
  data.append("nombres", nombres);
  data.append("apellidos", apellidos);
  data.append("email", email);
  data.append("documento", documento);
  data.append("tipo_documento", tipo_doc);
  data.append("tipo_user", tipo_user);

  $.ajax({
    url: "account/editUserByAdmin", // Url to which the request is send
    type: "POST", // Type of request to be send, called as method
    data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    contentType: false, // The content type used when sending data to the server.
    cache: false, // To unable request pages to be cached
    processData: false, // To send DOMDocument or non processed data file it is set to false
    success: function (
      data // A function to be called if request succeeds
    ) {

      $(".msg-success").html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Acción exitosa! ${nombres}</h4>
      <p>${data}</p>
      <hr>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>`);
      
      $("#edit-user").animate({ scrollTop: 0 }, 600);
      window.setTimeout(function () {
        $(".alert-dismissible")
          .fadeTo(400, 0)
          .slideUp(400, function () {
            $(this).remove();
          });
      }, 4000);
    },
  });

 
}



(function ($) {
  // USE STRICT
  "use strict";
  var navbars = ["header", "aside"];
  var hrefSelector =
    'a:not([target="_blank"]):not([href^="#"]):not([class^="chosen-single"])';
  var linkElement = navbars
    .map((element) => element + " " + hrefSelector)
    .join(", ");
  $(".animsition").animsition({
    inClass: "fade-in",
    outClass: "fade-out",
    inDuration: 900,
    outDuration: 900,
    linkElement: linkElement,
    loading: true,
    loadingParentElement: "html",
    loadingClass: "page-loader",
    loadingInner: '<div class="page-loader__spin"></div>',
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: ["animation-duration", "-webkit-animation-duration"],
    overlay: false,
    overlayClass: "animsition-overlay-slide",
    overlayParentElement: "html",
    transition: function (url) {
      window.location.href = url;
    },
  });
})(jQuery);

(function ($) {
  // Use Strict
  "use strict";
  try {
    var progressbarSimple = $(".js-progressbar-simple");
    progressbarSimple.each(function () {
      var that = $(this);
      var executed = false;
      $(window).on("load", function () {
        that.waypoint(
          function () {
            if (!executed) {
              executed = true;
              /*progress bar*/
              that.progressbar({
                update: function (current_percentage, $this) {
                  $this.find(".js-value").html(current_percentage + "%");
                },
              });
            }
          },
          {
            offset: "bottom-in-view",
          }
        );
      });
    });
  } catch (err) {
    console.log(err);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Scroll Bar
  try {
    var jscr1 = $(".js-scrollbar1");
    if (jscr1[0]) {
      const ps1 = new PerfectScrollbar(".js-scrollbar1");
    }

    var jscr2 = $(".js-scrollbar2");
    if (jscr2[0]) {
      const ps2 = new PerfectScrollbar(".js-scrollbar2");
    }
  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Select 2
  try {
    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next(".dropDownSelect2"),
      });
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);
(function ($) {
  // USE STRICT
  "use strict";

  // Dropdown
  try {
    var menu = $(".js-item-menu");
    var sub_menu_is_showed = -1;

    for (var i = 0; i < menu.length; i++) {
      $(menu[i]).on("click", function (e) {
        e.preventDefault();
        $(".js-right-sidebar").removeClass("show-sidebar");
        if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
          $(this).toggleClass("show-dropdown");
          sub_menu_is_showed = -1;
        } else {
          for (var i = 0; i < menu.length; i++) {
            $(menu[i]).removeClass("show-dropdown");
          }
          $(this).toggleClass("show-dropdown");
          sub_menu_is_showed = jQuery.inArray(this, menu);
        }
      });
    }
    $(".js-item-menu, .js-dropdown").click(function (event) {
      event.stopPropagation();
    });

    $("body,html").on("click", function () {
      for (var i = 0; i < menu.length; i++) {
        menu[i].classList.remove("show-dropdown");
      }
      sub_menu_is_showed = -1;
    });
  } catch (error) {
    console.log(error);
  }

  var wW = $(window).width();
  // Right Sidebar
  var right_sidebar = $(".js-right-sidebar");
  var sidebar_btn = $(".js-sidebar-btn");

  sidebar_btn.on("click", function (e) {
    e.preventDefault();
    for (var i = 0; i < menu.length; i++) {
      menu[i].classList.remove("show-dropdown");
    }
    sub_menu_is_showed = -1;
    right_sidebar.toggleClass("show-sidebar");
  });

  $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
    event.stopPropagation();
  });

  $("body,html").on("click", function () {
    right_sidebar.removeClass("show-sidebar");
  });

  // Sublist Sidebar
  try {
    var arrow = $(".js-arrow");
    arrow.each(function () {
      var that = $(this);
      that.on("click", function (e) {
        e.preventDefault();
        that.find(".arrow").toggleClass("up");
        that.toggleClass("open");
        that.parent().find(".js-sub-list").slideToggle("250");
      });
    });
  } catch (error) {
    console.log(error);
  }

  try {
    // Hamburger Menu
    $(".hamburger").on("click", function () {
      $(this).toggleClass("is-active");
      $(".navbar-mobile").slideToggle("500");
    });
    $(".navbar-mobile__list li.has-dropdown > a").on("click", function () {
      var dropdown = $(this).siblings("ul.navbar-mobile__dropdown");
      $(this).toggleClass("active");
      $(dropdown).slideToggle("500");
      return false;
    });
  } catch (error) {
    console.log(error);
  }
})(jQuery);



