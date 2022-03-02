jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(i,n,r,e,u){return jQuery.easing[jQuery.easing.def](i,n,r,e,u)},easeInQuad:function(i,n,r,e,u){return e*(n/=u)*n+r},easeOutQuad:function(i,n,r,e,u){return-e*(n/=u)*(n-2)+r},easeInOutQuad:function(i,n,r,e,u){return(n/=u/2)<1?e/2*n*n+r:-e/2*(--n*(n-2)-1)+r},easeInCubic:function(i,n,r,e,u){return e*(n/=u)*n*n+r},easeOutCubic:function(i,n,r,e,u){return e*((n=n/u-1)*n*n+1)+r},easeInOutCubic:function(i,n,r,e,u){return(n/=u/2)<1?e/2*n*n*n+r:e/2*((n-=2)*n*n+2)+r},easeInQuart:function(i,n,r,e,u){return e*(n/=u)*n*n*n+r},easeOutQuart:function(i,n,r,e,u){return-e*((n=n/u-1)*n*n*n-1)+r},easeInOutQuart:function(i,n,r,e,u){return(n/=u/2)<1?e/2*n*n*n*n+r:-e/2*((n-=2)*n*n*n-2)+r},easeInQuint:function(i,n,r,e,u){return e*(n/=u)*n*n*n*n+r},easeOutQuint:function(i,n,r,e,u){return e*((n=n/u-1)*n*n*n*n+1)+r},easeInOutQuint:function(i,n,r,e,u){return(n/=u/2)<1?e/2*n*n*n*n*n+r:e/2*((n-=2)*n*n*n*n+2)+r},easeInSine:function(i,n,r,e,u){return-e*Math.cos(n/u*(Math.PI/2))+e+r},easeOutSine:function(i,n,r,e,u){return e*Math.sin(n/u*(Math.PI/2))+r},easeInOutSine:function(i,n,r,e,u){return-e/2*(Math.cos(Math.PI*n/u)-1)+r},easeInExpo:function(i,n,r,e,u){return n==0?r:e*Math.pow(2,10*(n/u-1))+r},easeOutExpo:function(i,n,r,e,u){return n==u?r+e:e*(-Math.pow(2,-10*n/u)+1)+r},easeInOutExpo:function(i,n,r,e,u){return n==0?r:n==u?r+e:(n/=u/2)<1?e/2*Math.pow(2,10*(n-1))+r:e/2*(-Math.pow(2,-10*--n)+2)+r},easeInCirc:function(i,n,r,e,u){return-e*(Math.sqrt(1-(n/=u)*n)-1)+r},easeOutCirc:function(i,n,r,e,u){return e*Math.sqrt(1-(n=n/u-1)*n)+r},easeInOutCirc:function(i,n,r,e,u){return(n/=u/2)<1?-e/2*(Math.sqrt(1-n*n)-1)+r:e/2*(Math.sqrt(1-(n-=2)*n)+1)+r},easeInElastic:function(i,n,r,e,u){var f=1.70158,a=0,s=e;if(n==0)return r;if((n/=u)==1)return r+e;if(a||(a=u*.3),s<Math.abs(e)){s=e;var f=a/4}else var f=a/(2*Math.PI)*Math.asin(e/s);return-(s*Math.pow(2,10*(n-=1))*Math.sin((n*u-f)*(2*Math.PI)/a))+r},easeOutElastic:function(i,n,r,e,u){var f=1.70158,a=0,s=e;if(n==0)return r;if((n/=u)==1)return r+e;if(a||(a=u*.3),s<Math.abs(e)){s=e;var f=a/4}else var f=a/(2*Math.PI)*Math.asin(e/s);return s*Math.pow(2,-10*n)*Math.sin((n*u-f)*(2*Math.PI)/a)+e+r},easeInOutElastic:function(i,n,r,e,u){var f=1.70158,a=0,s=e;if(n==0)return r;if((n/=u/2)==2)return r+e;if(a||(a=u*(.3*1.5)),s<Math.abs(e)){s=e;var f=a/4}else var f=a/(2*Math.PI)*Math.asin(e/s);return n<1?-.5*(s*Math.pow(2,10*(n-=1))*Math.sin((n*u-f)*(2*Math.PI)/a))+r:s*Math.pow(2,-10*(n-=1))*Math.sin((n*u-f)*(2*Math.PI)/a)*.5+e+r},easeInBack:function(i,n,r,e,u,a){return a==null&&(a=1.70158),e*(n/=u)*n*((a+1)*n-a)+r},easeOutBack:function(i,n,r,e,u,a){return a==null&&(a=1.70158),e*((n=n/u-1)*n*((a+1)*n+a)+1)+r},easeInOutBack:function(i,n,r,e,u,a){return a==null&&(a=1.70158),(n/=u/2)<1?e/2*(n*n*(((a*=1.525)+1)*n-a))+r:e/2*((n-=2)*n*(((a*=1.525)+1)*n+a)+2)+r},easeInBounce:function(i,n,r,e,u){return e-jQuery.easing.easeOutBounce(i,u-n,0,e,u)+r},easeOutBounce:function(i,n,r,e,u){return(n/=u)<1/2.75?e*(7.5625*n*n)+r:n<2/2.75?e*(7.5625*(n-=1.5/2.75)*n+.75)+r:n<2.5/2.75?e*(7.5625*(n-=2.25/2.75)*n+.9375)+r:e*(7.5625*(n-=2.625/2.75)*n+.984375)+r},easeInOutBounce:function(i,n,r,e,u){return n<u/2?jQuery.easing.easeInBounce(i,n*2,0,e,u)*.5+r:jQuery.easing.easeOutBounce(i,n*2-u,0,e,u)*.5+e*.5+r}});
//# sourceMappingURL=/s/files/1/2721/6956/t/4/assets/jquery-easing-1.3.js.map?v=17299126027387836975
