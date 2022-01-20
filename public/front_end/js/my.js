let top_nav_toggle   = document.querySelector('.top_nav .toggle'),
    navigation_close = document.querySelector('.bottom_nav .navigation_close'),
    bottom_nav       = document.querySelector('.bottom_nav');

if (top_nav_toggle && navigation_close && bottom_nav)
{
    top_nav_toggle.addEventListener('click', function(){
        bottom_nav.classList.add('active');
    });

    navigation_close.addEventListener('click', function(){
        bottom_nav.classList.remove('active');
    });
}



/* dropdown toggler start */
let dropdowns = document.querySelectorAll('.dropdown_container>a');
dropdowns.forEach(dropdown=>{
    dropdown.addEventListener('click', function(){
        this.closest('.dropdown_container').classList.toggle('active');
    });
});
/* dropdown toggler end */



let search_toggle                   = document.querySelector('.search_toggle'),
    search_box_container_for_mobile = document.querySelector('.search_box_container_for_mobile');

if (search_toggle && search_box_container_for_mobile)
{
    search_toggle.addEventListener('click', function(){
        search_box_container_for_mobile.classList.add('active');
    });

    search_box_container_for_mobile.addEventListener('click', function(event)
    {
        if(event.target.classList.contains('search_box_container_for_mobile'))
        {
            this.classList.remove('active');
        }
    });
}




/* product slider start */
let goto_lefts = document.querySelectorAll('.product_section > * .goto_left'),
    goto_rights = document.querySelectorAll('.product_section > * .goto_right');

if (goto_lefts && goto_rights)
{
    goto_lefts.forEach(goto_left=>{
        goto_left.addEventListener('click', goBackward);
    });

    goto_rights.forEach(goto_right=>{
        goto_right.addEventListener('click', goForward);
    });
}


function goBackward() {
    let product_container = this.closest('.product_section').querySelector('.product_container');
    if (product_container) {
        let scroll_able = product_container.offsetWidth;
        product_container.scrollBy(-scroll_able, 0);
    }
}

function goForward() {
    let product_container = this.closest('.product_section').querySelector('.product_container');
    if (product_container) {
        let scroll_able = product_container.offsetWidth;
        product_container.scrollBy(scroll_able, 0);
    }
}
/* product slider end */