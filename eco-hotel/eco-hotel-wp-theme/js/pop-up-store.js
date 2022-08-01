function popUpStoreOpen(){
  const popUp = document.querySelector('.pop-up-store');
  popUp.classList.add('pop-up-store_opened');
}

function popUpStoreClose(){
  const popUp = document.querySelector('.pop-up-store');
  popUp.classList.remove('pop-up-store_opened');
}

function popUpStorePhone(elem){
  if(elem.value.length >= 11){
    elem.value = elem.value.slice(0, 11);
  }
    elem.value = elem.value.replace(/[^0-9]/g, '');
}

function popUpStoreSubmit(element){
const parent = element.parentNode;

if(parent){
const inputPhone = parent.querySelector('.pop-up-store__phone');
  if(inputPhone.value.length === 11){
  parent.parentNode.classList.remove('pop-up-store_opened');
  inputPhone.value = '';
   }
  else{
    inputPhone.value = '';
   }
  
}
}