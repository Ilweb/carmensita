
TweenMax.from("#salad > img", 0.5, {opacity:0.5, scale:0, ease:Bounce.easeOut});
TweenMax.from(".text", 0.5, {opacity:0, y:200, rotation:360, scale:2, delay:0.5,repeat:2, yoyo:true });
TweenMax.from(".bottom", 0.5, {opacity:0, y:-200, delay:0.5});


TweenLite.to(".logo", 4, {rotationX:0, rotationY:360, z:400, trnsformOrigin:"left50%", borderRadius:"10px"});

