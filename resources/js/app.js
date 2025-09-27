// import './bootstrap';
import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min";
import Swiper from "swiper/bundle";
import 'swiper/css';
import 'swiper/css/autoplay';

document.addEventListener('DOMContentLoaded', function() {
    console.log('Initializing Swiper...');

const swiper = new Swiper(".mySwiper", {
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true, // ✅ تفعيل التكرار
    allowTouchMove: true, // إيقاف السحب اليدوي
    speed: 3000, // سرعة بطيئة لشريط الأخبار
    autoplay: {
        delay: 0, // بدون تأخير
        disableOnInteraction: false,
        pauseOnMouseEnter: false, // لا يتوقف عند الماوس
    },
    freeMode: true, // حركة حرة مستمرة
    centeredSlides: false,
    grabCursor: false,
    breakpoints: {
        640: {
            slidesPerView: 'auto'
        },
        768: {
            slidesPerView: 'auto'
        },
        1024: {
            slidesPerView: '4'
        }
    }
});

    console.log('Swiper initialized successfully:', swiper);
});
