const app = Vue.createApp({
    el: '#app',
    data() {
        return {
            fifa_versions: [
                'fifa 15',
                'fifa 16',
                'fifa 17',
                'fifa 18',
                'fifa 19',
                'fifa 20',
                'fifa 21',
                'fifa 22',
                'fifa 23',
                'FC 24',
            ],
            selected_version: '',
        }
    },
    methods: {

        select_version: function(index){
            this.selected_version = this.fifa_versions[index]
            document.getElementById('dropdown-list').classList.add('hidden')
        }
    },
});

app.mount('#app')
