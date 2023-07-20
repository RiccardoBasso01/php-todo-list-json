const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            newItem: '', // Viene compilato alla compilazione dell'input
            showInputElement: false, // Se true mostra l' input in pagina
            // Array di azioni da compiere
           actions: [],
        }
    },
    created(){
        // Chiamata axios per recuperare i dati
        axios.get('http://localhost/esercizi/php-todo-list-json/api').then(res => {this.actions = res.data});
    },
    methods: {
        // Funzione per filtarre l' array eliminando gli oggetti della lista completati
        removeAction(currentIndex) {
            this.actions = this.actions.filter((action, i) => currentIndex !== i);
        },
        // Funzione per fare il toggle di "done"
        actionComplete(currentIndex) {
            this.actions[currentIndex].done = !this.actions[currentIndex].done
        },
        // Funzione per aggiungere un elemento alla lista
        addAction() {
            if (!this.newItem.length) return;
            const newItem = { text: this.newItem, done: false }
            this.actions.push(newItem);
            this.newItem = '';
        },
        // Funzione per fare il toggle sull' input, lo fa comparire e scomparire
        showImput(){
            this.newItem = '';
            this.showInputElement = !this.showInputElement
        }
    }
});

app.mount('#root');