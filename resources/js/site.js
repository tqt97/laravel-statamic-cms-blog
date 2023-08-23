import 'flowbite'

import Alpine from "alpinejs";
import Mousetrap from '@danharrin/alpine-mousetrap'
import screen from "@victoryoalli/alpinejs-screen"

Alpine.plugin(screen)
Alpine.plugin(Mousetrap)

window.Alpine = Alpine

Alpine.start();
