$(document).ready(function () {
   // Открыть/Закрыть меню с категориями
   $('.click-1').on('click', function () {
      $('.popup__menu-1').fadeToggle();
   });

   // Скрыть блок с категориями, по клику вне блока
   let click_1 = $(".click-1"); // указываем кнопку
   let menu_1 = $(".popup__menu-1");

   $(document).mouseup(function (e) { // событие клика по веб-документу
      if (!menu_1.is(e.target) && menu_1.has(e.target).length === 0 &&
         // если клик был не по нашему блоку
         !click_1.is(e.target) && click_1.has(e.target).length === 0
         // и не по его дочерним элементам
      ) {
         menu_1.fadeOut(); // скрываем его
      }
   });


   // 2
   $('.click-2').on('click', function () {
      $('.popup__menu-2').fadeToggle();
   });


   let click_2 = $(".click-2");
   let menu_2 = $(".popup__menu-2");

   $(document).mouseup(function (e) {
      if (!menu_2.is(e.target) && menu_2.has(e.target).length === 0 &&

         !click_2.is(e.target) && click_2.has(e.target).length === 0

      ) {
         menu_2.fadeOut();
      }
   });

   // 3
   $('.click-3').on('click', function () {
      $('.popup__menu-3').fadeToggle();
   });


   let click_3 = $(".click-3");
   let menu_3 = $(".popup__menu-3");

   $(document).mouseup(function (e) {
      if (!menu_3.is(e.target) && menu_3.has(e.target).length === 0 &&

         !click_3.is(e.target) && click_3.has(e.target).length === 0

      ) {
         menu_3.fadeOut();
      }
   });

   // 4
   $('.click-4').on('click', function () {
      $('.popup__menu-4').fadeToggle();
   });


   let click_4 = $(".click-4");
   let menu_4 = $(".popup__menu-4");

   $(document).mouseup(function (e) {
      if (!menu_4.is(e.target) && menu_4.has(e.target).length === 0 &&

         !click_4.is(e.target) && click_4.has(e.target).length === 0

      ) {
         menu_4.fadeOut();
      }
   });

   // 5
   $('.click-5').on('click', function () {
      $('.popup__menu-5').fadeToggle();
   });


   let click_5 = $(".click-5");
   let menu_5 = $(".popup__menu-5");

   $(document).mouseup(function (e) {
      if (!menu_5.is(e.target) && menu_5.has(e.target).length === 0 &&

         !click_5.is(e.target) && click_5.has(e.target).length === 0

      ) {
         menu_5.fadeOut();
      }
   });
});

// burger

$(document).ready(function () {

   // Открыть/Закрыть меню с категориями
   $('.header__icon-menu').on('click', function () {
      $('.menu-tab').fadeToggle();
   });
   $('.header__icon-menu').click(function () {
      $('.header__icon-menu').toggleClass('active')
   })

   // Скрыть блок с категориями, по клику вне блока
   let burger = $(".header__icon-menu"); // указываем кнопку
   let menu = $(".menu-tab");

   $(document).mouseup(function (e) { // событие клика по веб-документу
      if (!menu.is(e.target) && menu.has(e.target).length === 0 &&
         // если клик был не по нашему блоку
         !burger.is(e.target) && burger.has(e.target).length === 0
         // и не по его дочерним элементам
      ) {
         menu.fadeOut(); // скрываем его
      }
   });
});