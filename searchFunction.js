// Get the search input and products container  
const searchInput = document.getElementById('search');  
const productsContainer = document.getElementById('products-container');  
  
// Add an event listener to the search input  
searchInput.addEventListener('input', (e) => {  
   const searchQuery = e.target.value.toLowerCase();  
   const products = productsContainer.children;  
  
   // Loop through the products and hide/show them based on the search query  
   for (const product of products) {  
      const productName = product.querySelector('h2').textContent.toLowerCase();  
      if (productName.includes(searchQuery)) {  
        product.style.display = 'block';  
      } else {  
        product.style.display = 'none';  
      }  
   }  
});