$(document).ready(function () {
  var inputs = document.querySelectorAll(".masukanfile");
  Array.prototype.forEach.call(inputs, function (input) {
    var label = input.nextElementSibling,
      labelVal = label.innerHTML;

    input.addEventListener("change", function (e) {
      var countFiles = $(this)[0].files.length;
      var imgPath = $(this)[0].value;
      var extn = imgPath.substring(imgPath.lastIndexOf(".") + 1).toLowerCase();
      var image_holder = $("#view-image");
      image_holder.empty();
      let result = "";
      var fileName = "";
      if (extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof FileReader != "undefined") {
          if (this.files && this.files.length > 1)
            fileName = (
              this.getAttribute("data-multiple-caption") ||
              this.getAttribute("multiple")
            ).replace("{count}", this.files.length);
          else fileName = e.target.value.split("\\").pop();

          if (fileName) {
            for (var i = 0; i < countFiles; i++) {
              var reader = new FileReader();
              reader.onload = function (e) {
                $("<img />", {
                  src: e.target.result,
                  class: "img-thumbnail",
                  style: "height: 200px;display:block; margin:auto;",
                }).appendTo(image_holder);
              };
              image_holder.show();
              reader.readAsDataURL($(this)[0].files[0]);
             
            }

            label.querySelector("span").innerHTML = fileName;
          }
        }
      } else {
        alert("Please select only images");
        window.location = "/user/edit";
      }
    });

    // Firefox bug fix
    input.addEventListener("focus", function () {
      input.classList.add("has-focus");
    });
    input.addEventListener("blur", function () {
      input.classList.remove("has-focus");
    });
  });
});

