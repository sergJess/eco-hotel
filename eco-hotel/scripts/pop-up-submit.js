function increaceCount (elem){
  const countInner = elem.parentNode.querySelector('.poup-up__count-value');
  const isMinus = elem.getAttribute('data-count') === '-';
  const isPlus = elem.getAttribute('data-count') === '+';
  if(countInner) {
    let count = +(countInner.getAttribute('data-count-value'));
    switch(true) {
      case isMinus && count > 0:
      count--;
      countInner.setAttribute('data-count-value', `${count}`);
      countInner.textContent = `${count}`;
      break;

      case isPlus:
        count++;
        countInner.setAttribute('data-count-value', `${count}`);
        countInner.textContent = `${count}`;
      break;
    }

  }
}

function validateDateString(str){
  const arr = str.split('.');
  const length = arr.length;
  if(length === 3){
    const currentDate = new Date();
   let swip = arr[0];
   arr[0] = arr[1];
   arr[1] = swip;
   const orderDate = new Date(arr.join('.'));
    return orderDate - currentDate >= 0 ? true: false;
  }
  return false;
}

function dateReserve(elem){
const isValidDate = validateDateString(elem.value);
if(!isValidDate) elem.value = '';
}