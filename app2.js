const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toogle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}

/*===== REMOVE MENU ON CLICK =====*/
const navLink = document.querySelectorAll('.menu__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))




const valMenu = document.getElementById('good-component'),
      valToggle = document.getElementById('nvv'),
      valClose = document.getElementById('nv'),
      valClose2 = document.getElementById('nb')

      if(valToggle){
       valToggle.addEventListener('click', () =>{
            valMenu.classList.add('switch__mode')
        })
    }

    if(valClose){
        valClose.addEventListener('click', () =>{
            valMenu.classList.remove('switch__mode')
        })
    }

    if(valClose2){
        valClose2.addEventListener('click', () =>{
            valMenu.classList.remove('switch__mode')
        })
    }


    const valMenu2 = document.getElementById('very-component'),
      valToggle2 = document.getElementById('nv'),
      valClose3 = document.getElementById('nvv'),
      valClose4 = document.getElementById('nb')

      if(valToggle2){
       valToggle2.addEventListener('click', () =>{
            valMenu2.classList.add('switch__mode')
        })
    }

    if(valClose3){
        valClose3.addEventListener('click', () =>{
            valMenu2.classList.remove('switch__mode')
        })
    }

    if(valClose4){
        valClose4.addEventListener('click', () =>{
            valMenu2.classList.remove('switch__mode')
        })
    }


    const valMenu3 = document.getElementById('excellent-component'),
      valToggle3 = document.getElementById('nb'),
      valClose5 = document.getElementById('nvv'),
      valClose6 = document.getElementById('nv')

      if(valToggle3){
       valToggle3.addEventListener('click', () =>{
            valMenu3.classList.add('switch__mode')
        })
    }

    if(valClose5){
        valClose5.addEventListener('click', () =>{
            valMenu3.classList.remove('switch__mode')
        })
    }

    if(valClose6){
        valClose6.addEventListener('click', () =>{
            valMenu3.classList.remove('switch__mode')
        })
    }