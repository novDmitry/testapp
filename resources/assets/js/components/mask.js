import Inputmask from "Inputmask"

if ($(".phone__mask").length) {
    Inputmask("+380 99 999 99 99", { placeholder: "" }).mask($(".phone__mask"));
  }