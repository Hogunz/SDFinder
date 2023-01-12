require('./bootstrap');
import Alpine from 'alpinejs';
import Toolkit from '@alpine-collective/toolkit'
import 'tw-elements';
import 'flowbite';

import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
Swiper.use([Autoplay, Navigation, Pagination]);
window.Alpine = Alpine;
window.Swiper = Swiper;


Alpine.plugin(Toolkit)
Alpine.start();
