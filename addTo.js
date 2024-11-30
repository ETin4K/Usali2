// Add event listener to add to cart button  
document.querySelectorAll('.add-to-cart').forEach(button => {  
    button.addEventListener('click', () => {  
     // Get product details from button attributes  
     const productId = button.getAttribute('data-product-id');  
     const productName = button.getAttribute('data-product-name');  
     const productPrice = button.getAttribute('data-product-price');  
     const productImage = button.getAttribute('data-product-image');  
    
     // Set product details on checkout page  
     document.getElementById('product-image').src = productImage;  
     document.getElementById('product-name').textContent = productName;  
     document.getElementById('product-price').textContent = productPrice;  
    
     // Get quantity from user input (assuming you have a quantity input field)  
     const quantity = document.getElementById('quantity').value;  
    
     // Calculate subtotal, shipping, and total  
     const subtotal = productPrice * quantity;  
     const shipping = 5; // assuming a fixed shipping cost  
     const total = subtotal + shipping;  
    
     // Update order summary on checkout page  
     document.getElementById('subtotal').textContent = subtotal.toFixed(2);  
     document.getElementById('shipping').textContent = shipping.toFixed(2);  
     document.getElementById('total').textContent = total.toFixed(2);  
    
     // Redirect to checkout page  
     window.location.href = 'checkout.html';  
    });  
  });c