import {defineStore} from "pinia";
import {ref} from "vue";
import {worlds} from "@/js/constants/Words";

export const useWorldStore = defineStore('world', () => {

    const world = ref<worlds>(localStorage.getItem('world') ? parseInt(<string>localStorage.getItem('world')) : worlds.start);

    function setFairy () {
        world.value = worlds.fairy;
        localStorage.setItem('world', worlds.fairy.toString())
    }

    function setContinent () {
        world.value = worlds.continent;
        localStorage.setItem('world', worlds.continent.toString())
    }

    return {world, setContinent, setFairy};
});
