gsap.from('.content-header', { 
    x:-50,
    opacity:0,
    duration: 1
 })

gsap.from('.heroimg', {
    scale:0, 
    opacity:0,
    duration: 1,
})

gsap.from('.aboutimg', {
    x:-50,
    opacity:0,
    duration: 1,
    scrollTrigger: {
        trigger: '.aboutimg',
        start: 'top 90%',
        end: 'top 60%',
    }
})

gsap.from('.about-text', {
    x:50,
    opacity:0,
    duration: 1,
    scrollTrigger: {
        trigger: '.aboutimg',
        start: 'top 90%',
        end: 'top 60%',
    }
})

gsap.from('.mission-container', {
    y:50,
    opacity:0,
    duration: 1,
    scrollTrigger: {
        trigger: '.mission-container',
        start: 'top 90%',
        end: 'top 60%',
    }
})

gsap.from('.quote-content',{
    y:50,
    opacity:0,
    duration: 1,
    scrollTrigger: {
        trigger: '.quote-content',
        start: 'top 90%',
        end: 'top 60%',
    }
})

gsap.from('.support-section', {
    y:50,
    opacity:0,
    duration: 1,
    scrollTrigger: {
        trigger: '.support-section',
        start: 'top 90%',
        end: 'top 60%',
    }
})