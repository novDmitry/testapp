import Inputmask from "Inputmask"

if ($(".phone__mask").length) {
    Inputmask("+380 99 999 99 99", { placeholder: "" }).mask($(".phone__mask"));
  }

  Inputmask("99 шт.", { placeholder: "" }).mask($(".jsBasketCount"));

  Inputmask({ placeholder: "", alias : "currency", groupSeparator: " ", prefix: '', digits: '', rightAlign: false}).mask($(".jsPrice"));