// Add your custom JS here.
var e,t=["scroll","wheel","touchstart","touchmove","touchenter","touchend","touchleave","mouseout","mouseleave","mouseup","mousedown","mousemove","mouseenter","mousewheel","mouseover"];if(function(){var e=!1;try{var t=Object.defineProperty({},"passive",{get:function(){e=!0}});window.addEventListener("test",null,t),window.removeEventListener("test",null,t)}catch(e){}return e}()){var o=EventTarget.prototype.addEventListener;e=o,EventTarget.prototype.addEventListener=function(o,r,n){var s,a="object"==typeof n&&null!==n,i=a?n.capture:n;(n=a?function(e){var t=Object.getOwnPropertyDescriptor(e,"passive");return t&&!0!==t.writable&&void 0===t.set?Object.assign({},e):e}(n):{}).passive=void 0!==(s=n.passive)?s:-1!==t.indexOf(o)&&!0,n.capture=void 0!==i&&i,e.call(this,o,r,n)},EventTarget.prototype.addEventListener._original=e}



// const people = document.querySelectorAll('.person');
// people.forEach((person) => {
//     person.addEventListener("click", (e) => {
//       // Remove "active" class from all elements
//       people.forEach((member) => {
//         member.classList.remove("reveal");
//       });
  
//       // Add "active" class to the clicked element
//       person.classList.add("reveal");
//       e.stopPropagation();
//     });
// });



const people = document.querySelectorAll('.person-card');
const bios = document.querySelectorAll('.bio-card');

people.forEach((person) => {
    person.addEventListener('click', (e) => {

        people.forEach((member) => {
            member.classList.remove('reveal');
        });

        person.classList.add('reveal');

        let who = person.getAttribute('id')

        const shown = document.querySelectorAll('.bio-show');
        shown.forEach((elem) => {
            elem.remove();
        });

        const newItem = document.createElement('div');
        newItem.classList.add('bio-show');

        
        const content = document.getElementById(who + '-info');
        
        newItem.innerHTML = content.innerHTML;
        
        person.after(newItem);

        e.stopPropagation();
    })
})


// Add click event listener to the document
document.addEventListener("click", () => {
    // Remove "active" class from all elements
    people.forEach((member) => {
      member.classList.remove("reveal");
    });
    const shown = document.querySelectorAll('.bio-show');
    shown.forEach((elem) => {
        elem.remove();
    });

});


//use window.scrollY
var scrollpos = window.scrollY;
var header = document.getElementById("navbar");

function add_class_on_scroll() {
    header.classList.add("navShort");
}

function remove_class_on_scroll() {
    header.classList.remove("navShort");
}

window.addEventListener('scroll', function(){ 
    scrollpos = window.scrollY;
    if(scrollpos > 152){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
});


// AOS.init({
//     duration: 1000,
//     once: true
// });

