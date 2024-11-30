function addToCart(productId) {  
    const quantity = document.getElementById('quantity').value;  
    const productInfo = {  
       id: productId,  
       name: document.getElementById('productName').textContent,  
       price: document.getElementById('productPrice').textContent,  
       quantity: parseInt(quantity),  
       image: document.getElementById('productImage').src  
    };  
     
    localStorage.setItem('currentOrder', JSON.stringify(productInfo));  
     
    // Redirect to checkout page  
    window.location.href = 'checkout.html';  
     
    // Prevent default link behavior  
    return false;  
 }