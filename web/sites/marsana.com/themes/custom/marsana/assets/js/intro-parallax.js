TweenLite.defaultEase = Linear.easeNone;
var controller = new ScrollMagic.Controller();
var tl = new TimelineMax();

tl.to(".shape-left-top", 1.5, {scale: 4, autoAlpha:0,display:"none", x: -500, y:-1000});
tl.to(".shape-left-bottom", 1.5, {scale: 4, autoAlpha:0,display:"none", x: -500, y:1000}, "-=1.5");
tl.to(".shape-right-top", 1.5, {scale: 4, autoAlpha:0,display:"none", x: 500, y:-500}, "-=1.5");
tl.to(".shape-right-bottom", 1.5, {scale: 4, autoAlpha:0,display:"none", x: 1000, y:1000}, "-=1.5");
tl.to(".scroll-info", 1.5, {autoAlpha:0,display:"none", y:100}, "-=1.5");
tl.to(".big-logo-wrapper", 2.5, {scale: 1.2, }, "-=1.5");
tl.staggerTo(".strips-wrapper span", 2.5, {height: '16.6vh', }, 0.5, "-=1.5");
tl.to(".strips-links li", 0.1, { autoAlpha:1,display:"block"}, "-=0");
var scene = new ScrollMagic.Scene({
  triggerElement: ".animation-main-wrapper",
  duration: "100%",
  triggerHook: 0
})
  // .addIndicators({
  //   name: "Box Timeline",
  //   colorTrigger: "red",
  //   colorStart: "red",
  //   colorEnd: "red"
  // })
  .setTween(tl)
  .addTo(controller);
