/*===== EXPANDER MENU  =====*/ 
const showMenu = (toggleId, nvaId)=>{
  const toggle = document.getElementById(toggleId),
  nva = document.getElementById(nvaId)

  if(toggle && nva){
    toggle.addEventListener('click', ()=>{
      nva.classList.toggle('show')
      toggle.classList.toggle('bx-x')
      toggle.classList.toggle('x')
    })
  }
}
showMenu('header0-toggle','nva-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const nvaLink = document.querySelectorAll('.nva__link');   

function linkAction(){
/*Active link*/
nvaLink.forEach(n => n.classList.remove('active'));
this.classList.add('active');
}
nvaLink.forEach(n => n.addEventListener('click', linkAction));