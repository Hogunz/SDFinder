require('./bootstrap');
import Alpine from 'alpinejs';
import Toolkit from '@alpine-collective/toolkit'
import 'tw-elements';
import 'flowbite';
window.Alpine = Alpine;

Alpine.plugin(Toolkit)
Alpine.start();
