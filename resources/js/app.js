import './bootstrap.js';
import '../css/app.css';
import 'flowbite';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });

