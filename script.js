function addToCart(button) {
    const courseName = button.getAttribute('data-course');
    const cartItemsElement = document.getElementById('cart-items');
    const cartSection = document.querySelector('.cart-section');
    console.log("it is clicked")

    
    if (!cartItemsElement.innerHTML.includes(courseName)) {

        cartSection.classList.remove('hidden');
        const listItem = document.createElement('li');
        listItem.textContent = courseName;

         
         const removeButton = document.createElement('button');
         removeButton.textContent = 'Remove';
         removeButton.addEventListener('click', function () {
             cartItemsElement.removeChild(listItem);
             
             if (cartItemsElement.children.length === 0) {
                 cartSection.classList.add('hidden');
             }
         });
 

         listItem.appendChild(removeButton);
        cartItemsElement.appendChild(listItem);
        console.log(courseName);

    }
}
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart-button');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function () {
            addToCart(button);
        });
    });
});
