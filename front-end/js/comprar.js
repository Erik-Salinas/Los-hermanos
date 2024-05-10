const app = new Vue({
    el: '#app',
    data: {
        carrito: [],
        producto: [{
                id: 1,
                nombre: 'Pizza de Muzzarella',
                tamaño: 'Chica',
                precio: 9000,
            },
            {
                id: 2,
                nombre: 'Pizza de Muzzarella',
                tamaño: 'Grande',
                precio: 12000,
            },
            {
                id: 3,
                nombre: 'Jamon y Morrones',
                tamaño: 'Chica',
                precio: 11000,

            },
            {
                id: 4,
                nombre: 'Jamon y Morrones',
                tamaño: 'Grande',
                precio: 15000,
            },
            {
                id: 5,
                nombre: 'Fugazzeta',
                tamaño: 'Chica',
                precio: 11500,
            },
            {
                id: 6,
                nombre: 'Fugazzeta',
                tamaño: 'Grande',
                precio: 14000,
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
