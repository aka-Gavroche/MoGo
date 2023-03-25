//----------------------------------------Кнопка скролу вверх----------------------------------------
//оголошуємо константу goTopBtn і закидуємо в неї наш об'єкт по його класу
const goTopBtn = document.querySelector (".top_button");

//прикріплюємо на нашу константу обробник подій: при натисканні виконується функція goTop
goTopBtn.addEventListener ('click', goTop); 

//закидуємо у константу головну обгортку сайту
const wrapperWindow = document.querySelector (".main_wrapper");

//описуємо функцію goTop
function goTop () {
    if (window.pageYOffset > 0) {//якщо позиція скролу більша за 0, то піднятись догори на 100 одиниць
        window.scrollBy (0, -100);
        setTimeout(goTop, 0); //робимо рекурсію цієї функції, доки позиція скролу не дорівнюватиме 0.
    }
}

//--------------------------------------------------------------------------------------------------

//оголошуємо константу suptitleFixed і закидуємо в неї наш об'єкт по його класу
const suptitleFixed = document.querySelector ('.suptitle'); 

//оголошуємо константу suptitleText і закидуємо в неї наш об'єкт по його класу
const suptitleText = document.querySelector ('.suptitle_text');

//оголошуємо константу suptitleText2 і закидуємо в неї наш об'єкт по його класу
const suptitleText2 = document.querySelector ('.suptitle_text--second');

//оголошуємо константу suptitleList і закидуємо в неї наш об'єкт по його класу
const suptitleList = document.querySelector('.suptitle_list');

//оголошуємо константу suptitleList і закидуємо в неї наш об'єкт по його класу
const closeButton = document.querySelector('.close_button');



//прикріплюємо на вікно обробник подій: при скролі виконується функція trackScroll
window.addEventListener ('scroll', trackScroll);

//прикріплюємо на нашу константу обробник подій: при натисканні виконується функція showSuptitleList
suptitleText.addEventListener ('click', showSuptitleList);

//прикріплюємо на нашу константу обробник подій: при натисканні виконується функція showSuptitleList
suptitleText2.addEventListener ('click', showSuptitleList);

// //прикріплюємо на нашу константу обробник подій: при натисканні виконується функція showSuptitleList
// closeButton.addEventListener ('click', showSuptitleList);

//описуємо функцію trackScroll 
function trackScroll () {
    //оголошуємо константу offset і закидуємо в неї поточне положення скролу
    const offset = window.pageYOffset;

    //оголошуємо константу coords і в неї закидуємо висоту вікна браузера користувача
    const coords = document.documentElement.clientHeight;

   if (offset > coords/3) {  //якщо зміщення більше аніж висота третини першого екрану, то додаємо клас до нашої кнопки
    goTopBtn.classList.add("top_button--show");

    suptitleFixed.classList.add("suptitle--show");
   } else {
    goTopBtn.classList.remove("top_button--show");

    suptitleFixed.classList.remove("suptitle--show");
   }
}

//описуємо функцію showSuptitleList
function showSuptitleList () {
    let style = getComputedStyle(suptitleList); //отримуємо доступ до стилів константи
    if (style.display === 'none') { //якщо властивість display має значення none
        suptitleList.classList.add ("suptitle_list--show");
    } else if (style.display !== 'none') { //якщо властивість display має значення не none
        suptitleList.classList.remove ("suptitle_list--show");
    }
    
}

