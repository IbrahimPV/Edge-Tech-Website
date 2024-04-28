document.querySelectorAll('.add').forEach(item => {
    item.addEventListener('click', event => {
        var product_id = event.target.getAttribute('data-id');
        addToCart(product_id);
    });
  });
  
  