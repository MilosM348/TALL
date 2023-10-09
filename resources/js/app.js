import "./bootstrap";
import datepicker from "./datepicker";
import rangepicker from "./rangepicker";
import pikaDateRange from "./pikaday";

import Alpine from "alpinejs";
import pikaday from "pikaday";
import moment from "moment";

window.moment = moment;
window.Alpine = Alpine;
window.Pikaday = pikaday;
Alpine.data("datepicker", datepicker);
Alpine.data("rangepicker", rangepicker);
Alpine.data("pikaDateRange", pikaDateRange);

Alpine.start();
