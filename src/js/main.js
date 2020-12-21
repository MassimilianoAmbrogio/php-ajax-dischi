import Vue from 'vue';
import axios from 'axios';

/**
 * ALBUMS
 */
const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        artists: [],
        filterArtist: 'all'
    },
    created() {

        axios.get(window.location.href + '/scripts/get-albums.php')
        .then(response => {
            console.log(response.data);
            this.albums = response.data.albums;
            this.artists = response.data.artists;
        })
        .catch(error => {
            console.log(error);
        });
    },
    methods: {
        getFiltered() {
            axios.get(window.location.href + '/scripts/get-albums.php', { 
                params: {
                    artist: this.filterArtist
                }
            })
            .then(response => {
                console.log(response.data);
                this.albums = response.data.albums;
                this.artists = response.data.artists;
            })
            .catch(error => {
                 console.log(error);
            });
        }   
    }
});