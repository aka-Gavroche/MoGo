//Перше посилання
const suptitleItem1 = document.querySelector ('#suptitleItem1');
const block1 = document.querySelector ('.block1');

suptitleItem1.addEventListener ('click', getScroll1); 

function getScroll1() {
    block1.scrollIntoView({
        block: "center",
        behavior: "smooth"
    });
};

//Друге посилання
const suptitleItem2 = document.querySelector ('#suptitleItem2');
const block2 = document.querySelector ('.block2');

suptitleItem2.addEventListener ('click', getScroll2); 

function getScroll2() {
    block2.scrollIntoView({
        block: "center",
        behavior: "smooth"
    });
};

//Третє посилання
const suptitleItem3 = document.querySelector ('#suptitleItem3');
const block3 = document.querySelector ('.block3');

suptitleItem3.addEventListener ('click', getScroll3); 

function getScroll3() {
    block3.scrollIntoView({
        block: "center",
        behavior: "smooth"
    });
};

//Четверте посилання
const suptitleItem4 = document.querySelector ('#suptitleItem4');
const block4 = document.querySelector ('.block4');

suptitleItem4.addEventListener ('click', getScroll4); 

function getScroll4() {
    block4.scrollIntoView({
        block: "center",
        behavior: "smooth"
    });
};

//П'яте посилання
const suptitleItem5 = document.querySelector ('#suptitleItem5');
const block5 = document.querySelector ('.block5');

suptitleItem5.addEventListener ('click', getScroll5); 

function getScroll5() {
    block5.scrollIntoView({
        block: "center",
        behavior: "smooth"
    });
};

// //Шосте посилання
// const suptitleItem6 = document.querySelector ('#suptitleItem6');
// const block6 = document.querySelector ('.block6');

// suptitleItem6.addEventListener ('click', getScroll6); 

// function getScroll6() {
//     block6.scrollIntoView({
//         block: "center",
//         behavior: "smooth"
//     });
// };

// //Сьоме посилання
// const suptitleItem7 = document.querySelector ('#suptitleItem7');
// const block7 = document.querySelector ('.block7');

// suptitleItem7.addEventListener ('click', getScroll7); 

// function getScroll7() {
//     block7.scrollIntoView({
//         block: "center",
//         behavior: "smooth"
//     });
// };