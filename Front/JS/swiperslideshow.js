var swiper = new Swiper(".mySwiper", {
        // Optional parameters
             slidesPerView: 1,
            //direction: 'vertical',
            direction: 'horizontal',
             loop:true,
             pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
        
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
       
          });