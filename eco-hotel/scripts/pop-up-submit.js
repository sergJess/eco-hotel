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