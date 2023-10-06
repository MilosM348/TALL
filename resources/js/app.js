import "./bootstrap";
import datepicker from "./datepicker";
import rangepicker from "./rangepicker";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.data("datepicker", datepicker);
Alpine.data("rangepicker", rangepicker);

Alpine.start();
