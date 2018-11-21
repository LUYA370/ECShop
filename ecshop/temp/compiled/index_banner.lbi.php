 
 <style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    </style>
<div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./././data/afficheimg/20161114prfywc.jpg" width="970" height="460"/></div>
            <div class="swiper-slide"><img src="./././data/afficheimg/20161114ypdlyr.jpg" width="970" height="460"/></div>
            <div class="swiper-slide"><img src="./././data/afficheimg/20161114nraqzu.jpg" width="970" height="460"/></div>
        </div>
        
        <div class="swiper-pagination"></div>
    </div>
<script>
       var swiper = new Swiper('.swiper1', {
           pagination: '.swiper-pagination',
           nextButton: '.swiper-button-next',
           prevButton: '.swiper-button-prev',
           paginationClickable: true,
           spaceBetween: 0,
           centeredSlides: true,
           autoplay: 4000,
           loop:true,
           autoplayDisableOnInteraction: false
       });
</script>