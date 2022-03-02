/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */(function(o){"use strict";function i(s){return new RegExp("(^|\\s+)"+s+"(\\s+|$)")}var e,n,t;"classList"in document.documentElement?(e=function(s,a){return s.classList.contains(a)},n=function(s,a){s.classList.add(a)},t=function(s,a){s.classList.remove(a)}):(e=function(s,a){return i(a).test(s.className)},n=function(s,a){e(s,a)||(s.className=s.className+" "+a)},t=function(s,a){s.className=s.className.replace(i(a)," ")});function c(s,a){var f=e(s,a)?t:n;f(s,a)}var l={hasClass:e,addClass:n,removeClass:t,toggleClass:c,has:e,add:n,remove:t,toggle:c};typeof define=="function"&&define.amd?define(l):o.classie=l})(window);
//# sourceMappingURL=/s/files/1/2721/6956/t/4/assets/classie.js.map?v=15303010894070199091
