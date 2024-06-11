/* const app = new Vue({
    el: '#app',
    data: {
        carrito: [],
        producto: [{
                id: 1,
                nombre: 'BBQ Pollo',
                tam: 'Chica',
                imagen:'img/pizza-bbq-Pollo.jpg',
                precio: 9000,
            },
            {
                id: 2,
                nombre: 'Margarita',
                tam: 'Chica',
                imagen:'img/pizza-margarita.jpg',
                precio: 11000,
            },
            {
                id: 3,
                nombre: 'Vegetariana',
                tam: 'Chica',
                imagen:'img/pizza-vegetariana.jpg',
                precio: 11000,

            },
            {
                id: 4,
                nombre: 'Marinera',
                imagen:'img/pizza-marinera.jpg',
                tam: 'Chica',
                precio: 15000,
            },
            {
                id: 5,
                nombre: 'Pepperoni',
                tam: 'Chica',
                imagen:'img/pizza-pepperoni.jpg',
                precio: 11500,
            },
            {
                id: 6,
                nombre: 'Hawaiana',
                tam: 'Chica',
                imagen:'img/pizza-hawaiana.jpg',
                precio: 14000,
            },
            {
                id:7,
                nombre:'Cuatro Quesos',
                tam:'Chica',
                imagen:'img/pizzacuatro-quesos.jpg',
                precio: 14500,
            },
            {
                id:8,
                nombre:'Diavola',
                tam:'Chica',
                imagen:'img/pizza-diavola.jpg',
                precio:1400,
            },
            {
                id:9,
                nombre:'Capricciosa',
                tam:'Chica',
                imagen:'img/pizza-capricciosa.jpg',
                precio:14000,
            },
            {
                id: 10,
                nombre: 'BBQ Pollo',
                tam: 'Grande',
                imagen:'img/pizza-bbq-Pollo.jpg',
                precio: 15000,
            },
            {
                id: 11,
                nombre: 'Margarita',
                tam: 'Grande',
                imagen:'img/pizza-margarita.jpg',
                precio: 18000,
            },
            {
                id: 12,
                nombre: 'Vegetariana',
                tam: 'Grande',
                imagen:'img/pizza-vegetariana.jpg',
                precio: 18500,
            },
            {
                id: 13,
                nombre: 'Marinera',
                imagen:'img/pizza-marinera.jpg',
                tam: 'Grande',
                precio: 17500,
            },
            {
                id: 14,
                nombre: 'Pepperoni',
                tam: 'Grande',
                imagen:'img/pizza-pepperoni.jpg',
                precio: 16999,
            },
            {
                id: 15,
                nombre: 'Hawaiana',
                tam: 'Grande',
                imagen:'img/pizza-hawaiana.jpg',
                precio: 17500,
            },
            {
                id:16,
                nombre:'Cuatro Quesos',
                tam:'Grande',
                imagen:'img/pizzacuatro-quesos.jpg',
                precio: 20000,
            },
            {
                id:17,
                nombre:'Diavola',
                tam:'Grande',
                imagen:'img/pizza-diavola.jpg',
                precio:21100,
            },
            {
                id:18,
                nombre:'Capricciosa',
                tam:'Grande',
                imagen:'img/pizza-capricciosa.jpg',
                precio:18250,
            },
        ],
    },
    computed: {
        cantidad: function() {
            return this.carrito.reduce((total, producto) => total + producto.cantidad, 0);
        },
        total() {
            return this.carrito.reduce((accumulator, product) => accumulator + (product.precio * product.cantidad), 0);
        }
    },
    watch: {
        total(newValue, oldValue) {
            const totalElement = document.getElementById('tot');
            if (totalElement) {
                totalElement.value = newValue;
            }
        }
    },
    methods: {
        agregar(producto) {
            let item = this.carrito.find(p => p.id === producto.id);
            if (item) {
                item.cantidad++;
            } else {
                this.carrito.push({ ...producto, cantidad: 1 });
            }
        },
        incrementar(index) {
            this.carrito[index].cantidad++;
        },
        decrementar(index) {
            if (this.carrito[index].cantidad > 1) {
                this.carrito[index].cantidad--;
            } else {
                this.carrito.splice(index, 1);
            }
        },
        borrar(index) {
            if (this.carrito[index].cantidad > 1) {
                this.carrito[index].cantidad--;
            } else {
                this.carrito.splice(index, 1);
            }
        },
        borrarTodo() {
            this.carrito = [];
        },
        pagar() {
            // Itera sobre los productos en el carrito y crea un array de objetos para enviar
            const data = this.carrito.map(producto => ({
                tipo: producto.nombre,
                tam: producto.tam,
                precio: producto.precio,
                cantidad: producto.cantidad
            }));
        
            fetch('../mvc/app/Controllers/Controller-guardarpedido.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data) // Envía el array de objetos JSON
            })
            .then(response => response.json()) // Usar .json() si la respuesta es JSON
            .then(data => {
                console.log(data);
                this.borrarTodo(); // Asegúrate de que 'this' esté en el contexto correcto
            })
            .catch(error => {
                console.error('Error', error);
            });
        }
        
    },
}); */