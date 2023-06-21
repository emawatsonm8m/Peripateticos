const productContainer = document.querySelector('../moverproductos');

Sortable.create(productContainer, {
  animation: 150,
  handle: '.product-handle',
  onEnd: () => {
    // Save the new product order to the database or file
  },
});