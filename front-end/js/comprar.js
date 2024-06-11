/* 
const app = new Vue({
    el: '#app',
    data: {
        carrito: [],
        producto: [
            {
                "id": 1,
                "nombre": "BBQ Pollo",
                "tamaño": "Chica",
                "imagen": "img/pizza-bbq-Pollo.jpg",
                "precio": 9000
            },
            {
                "id": 2,
                "nombre": "Margarita",
                "tamaño": "Chica",
                "imagen": "img/pizza-margarita.jpg",
                "precio": 11000
            },
            {
                "id": 3,
                "nombre": "Vegetariana",
                "tamaño": "Chica",
                "imagen": "img/pizza-vegetariana.jpg",
                "precio": 11000
            },
            {
                "id": 4,
                "nombre": "Marinera",
                "imagen": "img/pizza-marinera.jpg",
                "tamaño": "Chica",
                "precio": 15000
            },
            {
                "id": 5,
                "nombre": "Pepperoni",
                "tamaño": "Chica",
                "imagen": "img/pizza-pepperoni.jpg",
                "precio": 11500
            },
            {
                "id": 6,
                "nombre": "Hawaiana",
                "tamaño": "Chica",
                "imagen": "img/pizza-hawaiana.jpg",
                "precio": 14000
            },
            {
                "id": 7,
                "nombre": "Cuatro Quesos",
                "tamaño": "Chica",
                "imagen": "img/pizzacuatro-quesos.jpg",
                "precio": 14500
            },
            {
                "id": 8,
                "nombre": "Diavola",
                "tamaño": "Chica",
                "imagen": "img/pizza-diavola.jpg",
                "precio": 1400
            },
            {
                "id": 9,
                "nombre": "Capricciosa",
                "tamaño": "Chica",
                "imagen": "img/pizza-capricciosa.jpg",
                "precio": 14000
            },
            {
                "id": 10,
                "nombre": "BBQ Pollo",
                "tamaño": "Grande",
                "imagen": "img/pizza-bbq-Pollo.jpg",
                "precio": 15000
            },
            {
                "id": 11,
                "nombre": "Margarita",
                "tamaño": "Grande",
            }
        
        ],
    },
    computed: {
        cantidad() {
            return this.carrito.reduce((total, producto) => total + producto.cantidad, 0);
        },
        total() {
            return this.carrito.reduce((acc, producto) => acc + (producto.precio * producto.cantidad), 0);
        }
    },
    watch: {
        total(newValue) {
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
        borrarTodo() {
            this.carrito = [];
        },
        pagar() {
            axios.post('../../mvc/app/Controllers/Controller-guardarpedido.php', {
                nombre: producto.nombre,
                cantidad: producto.cantidad
            })
      .then(response => {
        console.log(response.data);
        // Hacer algo con la respuesta si es necesario
      })
      .catch(error => {
        console.error(error);
      });
        }
    }
}); */
let cart = [];

        function addToCart(tipo, precio) {
            cart.push({ tipo: tipo, precio: precio });
            updateCartUI();
        }

        function updateCartUI() {
            const cartItems = document.getElementById('cart-items');
            cartItems.innerHTML = '';
            cart.forEach((item, index) => {
                cartItems.innerHTML += `<li>${item.tipo} - $${item.precio} <button onclick="removeFromCart(${index})">Eliminar</button></li>`;
            });
        }

        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCartUI();
        }

        function checkout() {
            fetch('../../mvc/app/Controllers/Controller-guardarpedido.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(cart)
            })
            .then(response => response.text())
            .then(data => {
                alert('Compra realizada: ' + data);
                cart = [];
                updateCartUI();
            })
            .catch(error => console.error('Error:', error));
        }

        function loadProducts() {
            console.log('Cargando productos...');
            fetch('../../mvc/app/Controllers/Controller-mostrarproductos.php')


            .then(response => {
                if (!response.ok) {
                    throw new Error('La respuesta no fue exitosa');
                }
                return response.json();
            })
            .then(products => {
                console.log(products); // Verificar los datos devueltos
        
                const productList = document.getElementById('product-list');
                productList.innerHTML = ''; // Limpiar el contenido antes de agregar nuevos productos
        
                if (!Array.isArray(products)) {
                    throw new Error('Los productos no están en un formato válido');
                }
        
                products.forEach(product => {
                    productList.innerHTML += `
                        <div class="product">
                            <span>${product.tipo}</span>
                            <button onclick="addToCart('${product.tipo}', ${product.precio})">Agregar al carrito</button>
                        </div>
                    `;
                });
            })
            .catch(error => console.error('Error al cargar productos:', error));
        }
        
        
        
// Llamar a la función para cargar productos al cargar la página
window.onload = loadProducts;