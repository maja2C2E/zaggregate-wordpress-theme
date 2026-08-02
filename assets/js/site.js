const toggle=document.querySelector('.menu-toggle');
const links=document.querySelector('.nav-links');
const closeSubmenus=()=>document.querySelectorAll('.menu-item-has-children.submenu-open').forEach(item=>{item.classList.remove('submenu-open');item.querySelector(':scope > .submenu-toggle')?.setAttribute('aria-expanded','false')});
const closeMenu=()=>{if(!links||!toggle)return;links.classList.remove('open');toggle.setAttribute('aria-expanded','false');toggle.setAttribute('aria-label','Open menu');closeSubmenus()};
if(toggle&&links){toggle.addEventListener('click',()=>{links.classList.toggle('open');const open=links.classList.contains('open');toggle.setAttribute('aria-expanded',open);toggle.setAttribute('aria-label',open?'Close menu':'Open menu')})}
document.querySelectorAll('.nav-links a').forEach(a=>a.addEventListener('click',closeMenu));
document.querySelectorAll('.submenu-toggle').forEach(button=>button.addEventListener('click',event=>{
  event.preventDefault();
  const item=button.closest('.menu-item-has-children');
  const willOpen=!item.classList.contains('submenu-open');
  closeSubmenus();
  item.classList.toggle('submenu-open',willOpen);
  button.setAttribute('aria-expanded',String(willOpen));
}));
document.addEventListener('click',event=>{if(!event.target.closest('.menu-item-has-children'))closeSubmenus()});
document.addEventListener('keydown',e=>{if(e.key==='Escape')closeMenu()});
const reveals=document.querySelectorAll('.reveal');
if('IntersectionObserver' in window){const observer=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');observer.unobserve(e.target)}}),{threshold:.12});reveals.forEach(el=>observer.observe(el))}else{reveals.forEach(el=>el.classList.add('visible'))}

document.querySelectorAll('[data-copy-target]').forEach(button=>{
  button.addEventListener('click',async()=>{
    const target=document.getElementById(button.dataset.copyTarget);
    if(!target)return;
    const text=target.textContent.trim();
    try{
      if(navigator.clipboard&&window.isSecureContext){
        await navigator.clipboard.writeText(text);
      }else{
        const textarea=document.createElement('textarea');
        textarea.value=text;
        textarea.setAttribute('readonly','');
        textarea.style.position='fixed';
        textarea.style.opacity='0';
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        textarea.remove();
      }
      const original=button.textContent;
      button.textContent='Copied';
      button.setAttribute('aria-live','polite');
      setTimeout(()=>{button.textContent=original},1800);
    }catch(error){
      target.focus();
      window.getSelection()?.selectAllChildren(target);
      button.textContent='Select and copy the text below';
    }
  });
});
