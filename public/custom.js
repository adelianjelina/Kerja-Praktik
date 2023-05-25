$(document).ready(function () {
  $("[data-cetak]").on("click", function () {
    var formId = "formulir_saya"; // Ganti dengan ID formulir Anda
    var formElement = document.getElementById(formId);
    if (formElement) {
      newWin = window.open("", "_blank");
      newWin.document.write(
        "<html><head><title>Cetak Formulir</title></head><body>"
      );
      newWin.document.write(formElement.innerHTML);
      newWin.document.write("</body></html>");
      newWin.document.close();
      newWin.print();
    }
  });
});
