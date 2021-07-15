

function navbar(){
  const root = document.querySelector('.wanderer-nav-header');
  const menuBtn = root.querySelector('.wanderer-menu-btn');
  const closeBtn = root.querySelector('.wanderer-close-btn');
  const backdrop = root.querySelector('.wanderer-backdrop');

  const closeNavbar = ()=>{
    root.classList.add('wanderer-close');
  }

  const openNavbar = ()=>{
    root.classList.remove('wanderer-close');
  }

  menuBtn.addEventListener('click', openNavbar);
  closeBtn.addEventListener('click', closeNavbar);
  backdrop.addEventListener('click', closeNavbar);
}

navbar();