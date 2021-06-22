document.addEventListener( 'DOMContentLoaded', function() {
  const seasonItems = document.querySelectorAll(".season-item");

    for (let i = 0; i < seasonItems.length; i++){

        seasonItems[i].addEventListener('click',
        function (){
        let currentItem = document.querySelector('.active');
        currentItem.classList.remove('active');
        this.classList.add('active');
        }); 
    }
});




