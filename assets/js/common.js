$(function(){
    // mobile로 볼 시 각 켜는 위치마다 높이가 다르다
    // 터치시 다를때나 사이즈 변동이 있을 때 다시 높이 계산
    // css에서 var(--vh)를 쓴다
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
    window.addEventListener('touchend', () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });
})