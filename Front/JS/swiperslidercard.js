var swiper = new Swiper(".mySwiper", {
    // Optional parameters
             slidesPerView: 3,
             slidesPerGroup:3,
             cursorChar:'pointer',
             centerSlide:'true',
             spaceBetween: 20,
             fade:true,
             loopFillGroupWithBlank:true,
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
    
    breakpoints:{
    0:{
    
    slidesPerView: 1,
    
    },
    
    
    520:{
    
    slidesPerView: 2,
    
    },
    920:{
    slidesPerView: 3,
    },
    
    },
          });