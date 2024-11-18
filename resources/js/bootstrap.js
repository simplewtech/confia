import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
import { Tooltip, Toast, Popover } from "@coreui/coreui";
window.coreui = coreui;
