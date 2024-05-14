const app = new Vue({
    el: '#app',
    data: {
        carrito: [],
        producto: [{
                id: 1,
                nombre: 'BBQ Pollo',
                tamaño: 'Chica',
                imagen:'img/pizza-bbq-Pollo.jpg',
                precio: 9000,
            },
            {
                id: 2,
                nombre: 'Margarita',
                tamaño: 'Chica',
                imagen:'img/pizza-margarita.jpg',
                precio: 11000,
            },
            {
                id: 3,
                nombre: 'Vegetariana',
                tamaño: 'Chica',
                imagen:'img/pizza-vegetariana.jpg',
                precio: 11000,

            },
            {
                id: 4,
                nombre: 'Marinera',
                imagen:'img/pizza-marinera.jpg',
                tamaño: 'Chica',
                precio: 15000,
            },
            {
                id: 5,
                nombre: 'Pepperoni',
                tamaño: 'Chica',
                imagen:'img/pizza-pepperoni.jpg',
                precio: 11500,
            },
            {
                id: 6,
                nombre: 'Hawaiana',
                tamaño: 'Chica',
                imagen:'img/pizza-hawaiana.jpg',
                precio: 14000,
            },
            {
                id:7,
                nombre:'Cuatro Quesos',
                tamaño:'Chica',
                imagen:'img/pizzacuatro-quesos.jpg',
                precio: 14500,
            },
            {
                id:8,
                nombre:'Diavola',
                tamaño:'Chica',
                imagen:'img/pizza-diavola.jpg',
                precio:1400,
            },
            {
                id:9,
                nombre:'Capricciosa',
                tamaño:'Chica',
                imagen:'img/pizza-capricciosa.jpg',
                precio:14000,
            },
            {
                id: 10,
                nombre: 'BBQ Pollo',
                tamaño: 'Grande',
                imagen:'img/pizza-bbq-Pollo.jpg',
                precio: 15000,
            },
            {
                id: 11,
                nombre: 'Margarita',
                tamaño: 'Grande',
                imagen:'img/pizza-margarita.jpg',
                precio: 18000,
            },
            {
                id: 12,
                nombre: 'Vegetariana',
                tamaño: 'Grande',
                imagen:'img/pizza-vegetariana.jpg',
                precio: 18500,
            },
            {
                id: 13,
                nombre: 'Marinera',
                imagen:'img/pizza-marinera.jpg',
                tamaño: 'Grande',
                precio: 17500,
            },
            {
                id: 14,
                nombre: 'Pepperoni',
                tamaño: 'Grande',
                imagen:'img/pizza-pepperoni.jpg',
                precio: 16999,
            },
            {
                id: 15,
                nombre: 'Hawaiana',
                tamaño: 'Grande',
                imagen:'img/pizza-hawaiana.jpg',
                precio: 17500,
            },
            {
                id:16,
                nombre:'Cuatro Quesos',
                tamaño:'Grande',
                imagen:'img/pizzacuatro-quesos.jpg',
                precio: 20000,
            },
            {
                id:17,
                nombre:'Diavola',
                tamaño:'Grande',
                imagen:'img/pizza-diavola.jpg',
                precio:21100,
            },
            {
                id:18,
                nombre:'Capricciosa',
                tamaño:'Grande',
                imagen:'img/pizza-capricciosa.jpg',
                precio:18250,
            },
        ],
    },
    computed: {
        cantidad: function() {
            return this.carrito.length;
        },
        total() {
            let suma = 0;
            for (let i = 0; i < this.carrito.length; i++) {
                suma = suma + this.carrito[i].precio;
            }
            return suma;
        },
    },
    methods: {
        agregar(producto) {
            this.carrito.push(producto);
        },
        borrar(index) {
            this.carrito.splice(index, 1);
        },
        borrarTodo() {
            this.carrito = [];
        },
    },
});