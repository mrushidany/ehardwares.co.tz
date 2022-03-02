typeof JSON!="object"&&(JSON={}),function(){"use strict";function f(o){return o<10?"0"+o:o}function quote(o){return escapable.lastIndex=0,escapable.test(o)?'"'+o.replace(escapable,function(b){var l=meta[b];return typeof l=="string"?l:"\\u"+("0000"+b.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+o+'"'}function str(o,b){var l,h,c,y,r=gap,s,u=b[o];switch(u&&typeof u=="object"&&typeof u.toJSON=="function"&&(u=u.toJSON(o)),typeof rep=="function"&&(u=rep.call(b,o,u)),typeof u){case"string":return quote(u);case"number":return isFinite(u)?String(u):"null";case"boolean":case"null":return String(u);case"object":if(!u)return"null";if(gap+=indent,s=[],Object.prototype.toString.apply(u)==="[object Array]"){for(y=u.length,l=0;l<y;l+=1)s[l]=str(l,u)||"null";return c=s.length===0?"[]":gap?"[\n"+gap+s.join(",\n"+gap)+"\n"+r+"]":"["+s.join(",")+"]",gap=r,c}if(rep&&typeof rep=="object")for(y=rep.length,l=0;l<y;l+=1)typeof rep[l]=="string"&&(h=rep[l],c=str(h,u),c&&s.push(quote(h)+(gap?": ":":")+c));else for(h in u)Object.prototype.hasOwnProperty.call(u,h)&&(c=str(h,u),c&&s.push(quote(h)+(gap?": ":":")+c));return c=s.length===0?"{}":gap?"{\n"+gap+s.join(",\n"+gap)+"\n"+r+"}":"{"+s.join(",")+"}",gap=r,c}}typeof Date.prototype.toJSON!="function"&&(Date.prototype.toJSON=function(o){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null},String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(o){return this.valueOf()});var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;typeof JSON.stringify!="function"&&(JSON.stringify=function(o,b,l){var h;if(gap="",indent="",typeof l=="number")for(h=0;h<l;h+=1)indent+=" ";else typeof l=="string"&&(indent=l);if(rep=b,!b||typeof b=="function"||typeof b=="object"&&typeof b.length=="number")return str("",{"":o});throw new Error("JSON.stringify")}),typeof JSON.parse!="function"&&(JSON.parse=function(text,reviver){function walk(o,b){var l,h,c=o[b];if(c&&typeof c=="object")for(l in c)Object.prototype.hasOwnProperty.call(c,l)&&(h=walk(c,l),h!==void 0?c[l]=h:delete c[l]);return reviver.call(o,b,c)}var j;if(text=String(text),cx.lastIndex=0,cx.test(text)&&(text=text.replace(cx,function(o){return"\\u"+("0000"+o.charCodeAt(0).toString(16)).slice(-4)})),/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,"")))return j=eval("("+text+")"),typeof reviver=="function"?walk({"":j},""):j;throw new SyntaxError("JSON.parse")})}(),function(o,b){"use strict";var l=o.History=o.History||{},h=o.jQuery;if(typeof l.Adapter!="undefined")throw new Error("History.js Adapter has already been loaded...");l.Adapter={bind:function(c,y,r){h(c).bind(y,r)},trigger:function(c,y,r){h(c).trigger(y,r)},extractEventData:function(c,y,r){var s=y&&y.originalEvent&&y.originalEvent[c]||r&&r[c]||b;return s},onDomLoad:function(c){h(c)}},typeof l.init!="undefined"&&l.init()}(window),function(o,b){"use strict";var l=o.document,h=o.setTimeout||h,c=o.clearTimeout||c,y=o.setInterval||y,r=o.History=o.History||{};if(typeof r.initHtml4!="undefined")throw new Error("History.js HTML4 Support has already been loaded...");r.initHtml4=function(){if(typeof r.initHtml4.initialized!="undefined")return!1;r.initHtml4.initialized=!0,r.enabled=!0,r.savedHashes=[],r.isLastHash=function(s){var u=r.getHashByIndex(),d;return d=s===u,d},r.isHashEqual=function(s,u){return s=encodeURIComponent(s).replace(/%25/g,"%"),u=encodeURIComponent(u).replace(/%25/g,"%"),s===u},r.saveHash=function(s){return r.isLastHash(s)?!1:(r.savedHashes.push(s),!0)},r.getHashByIndex=function(s){var u=null;return typeof s=="undefined"?u=r.savedHashes[r.savedHashes.length-1]:s<0?u=r.savedHashes[r.savedHashes.length+s]:u=r.savedHashes[s],u},r.discardedHashes={},r.discardedStates={},r.discardState=function(s,u,d){var p=r.getHashByState(s),S;return S={discardedState:s,backState:d,forwardState:u},r.discardedStates[p]=S,!0},r.discardHash=function(s,u,d){var p={discardedHash:s,backState:d,forwardState:u};return r.discardedHashes[s]=p,!0},r.discardedState=function(s){var u=r.getHashByState(s),d;return d=r.discardedStates[u]||!1,d},r.discardedHash=function(s){var u=r.discardedHashes[s]||!1;return u},r.recycleState=function(s){var u=r.getHashByState(s);return r.discardedState(s)&&delete r.discardedStates[u],!0},r.emulated.hashChange&&(r.hashChangeInit=function(){r.checkerFunction=null;var s="",u,d,p,S,t=Boolean(r.getHash());return r.isInternetExplorer()?(u="historyjs-iframe",d=l.createElement("iframe"),d.setAttribute("id",u),d.setAttribute("src","#"),d.style.display="none",l.body.appendChild(d),d.contentWindow.document.open(),d.contentWindow.document.close(),p="",S=!1,r.checkerFunction=function(){if(S)return!1;S=!0;var v=r.getHash(),m=r.getHash(d.contentWindow.document);return v!==s?(s=v,m!==v&&(p=m=v,d.contentWindow.document.open(),d.contentWindow.document.close(),d.contentWindow.document.location.hash=r.escapeHash(v)),r.Adapter.trigger(o,"hashchange")):m!==p&&(p=m,t&&m===""?r.back():r.setHash(m,!1)),S=!1,!0}):r.checkerFunction=function(){var v=r.getHash()||"";return v!==s&&(s=v,r.Adapter.trigger(o,"hashchange")),!0},r.intervalList.push(y(r.checkerFunction,r.options.hashChangeInterval)),!0},r.Adapter.onDomLoad(r.hashChangeInit)),r.emulated.pushState&&(r.onHashChange=function(s){var u=s&&s.newURL||r.getLocationHref(),d=r.getHashByUrl(u),p=null,S=null,t=null,v;return r.isLastHash(d)?(r.busy(!1),!1):(r.doubleCheckComplete(),r.saveHash(d),d&&r.isTraditionalAnchor(d)?(r.Adapter.trigger(o,"anchorchange"),r.busy(!1),!1):(p=r.extractState(r.getFullUrl(d||r.getLocationHref()),!0),r.isLastSavedState(p)?(r.busy(!1),!1):(S=r.getHashByState(p),v=r.discardedState(p),v?(r.getHashByIndex(-2)===r.getHashByState(v.forwardState)?r.back(!1):r.forward(!1),!1):(r.pushState(p.data,p.title,encodeURI(p.url),!1),!0))))},r.Adapter.bind(o,"hashchange",r.onHashChange),r.pushState=function(s,u,d,p){if(d=encodeURI(d).replace(/%25/g,"%"),r.getHashByUrl(d))throw new Error("History.js does not support states with fragment-identifiers (hashes/anchors).");if(p!==!1&&r.busy())return r.pushQueue({scope:r,callback:r.pushState,args:arguments,queue:p}),!1;r.busy(!0);var S=r.createStateObject(s,u,d),t=r.getHashByState(S),v=r.getState(!1),m=r.getHashByState(v),H=r.getHash(),e=r.expectedStateId==S.id;return r.storeState(S),r.expectedStateId=S.id,r.recycleState(S),r.setTitle(S),t===m?(r.busy(!1),!1):(r.saveState(S),e||r.Adapter.trigger(o,"statechange"),!r.isHashEqual(t,H)&&!r.isHashEqual(t,r.getShortUrl(r.getLocationHref()))&&r.setHash(t,!1),r.busy(!1),!0)},r.replaceState=function(s,u,d,p){if(d=encodeURI(d).replace(/%25/g,"%"),r.getHashByUrl(d))throw new Error("History.js does not support states with fragment-identifiers (hashes/anchors).");if(p!==!1&&r.busy())return r.pushQueue({scope:r,callback:r.replaceState,args:arguments,queue:p}),!1;r.busy(!0);var S=r.createStateObject(s,u,d),t=r.getHashByState(S),v=r.getState(!1),m=r.getHashByState(v),H=r.getStateByIndex(-2);return r.discardState(v,S,H),t===m?(r.storeState(S),r.expectedStateId=S.id,r.recycleState(S),r.setTitle(S),r.saveState(S),r.Adapter.trigger(o,"statechange"),r.busy(!1)):r.pushState(S.data,S.title,S.url,!1),!0}),r.emulated.pushState&&r.getHash()&&!r.emulated.hashChange&&r.Adapter.onDomLoad(function(){r.Adapter.trigger(o,"hashchange")})},typeof r.init!="undefined"&&r.init()}(window),function(o,b){"use strict";var l=o.console||b,h=o.document,c=o.navigator,y=!1,r=o.setTimeout,s=o.clearTimeout,u=o.setInterval,d=o.clearInterval,p=o.JSON,S=o.alert,t=o.History=o.History||{},v=o.history;try{y=o.sessionStorage,y.setItem("TEST","1"),y.removeItem("TEST")}catch(m){y=!1}if(p.stringify=p.stringify||p.encode,p.parse=p.parse||p.decode,typeof t.init!="undefined")throw new Error("History.js Core has already been loaded...");t.init=function(m){return typeof t.Adapter=="undefined"?!1:(typeof t.initCore!="undefined"&&t.initCore(),typeof t.initHtml4!="undefined"&&t.initHtml4(),!0)},t.initCore=function(m){if(typeof t.initCore.initialized!="undefined")return!1;if(t.initCore.initialized=!0,t.options=t.options||{},t.options.hashChangeInterval=t.options.hashChangeInterval||100,t.options.safariPollInterval=t.options.safariPollInterval||500,t.options.doubleCheckInterval=t.options.doubleCheckInterval||500,t.options.disableSuid=t.options.disableSuid||!1,t.options.storeInterval=t.options.storeInterval||1e3,t.options.busyDelay=t.options.busyDelay||250,t.options.debug=t.options.debug||!1,t.options.initialTitle=t.options.initialTitle||h.title,t.options.html4Mode=t.options.html4Mode||!1,t.options.delayInit=t.options.delayInit||!1,t.intervalList=[],t.clearAllIntervals=function(){var e,a=t.intervalList;if(typeof a!="undefined"&&a!==null){for(e=0;e<a.length;e++)d(a[e]);t.intervalList=null}},t.debug=function(){(t.options.debug||!1)&&t.log.apply(t,arguments)},t.log=function(){var e=typeof l!="undefined"&&typeof l.log!="undefined"&&typeof l.log.apply!="undefined",a=h.getElementById("log"),n,i,g,I,T;for(e?(I=Array.prototype.slice.call(arguments),n=I.shift(),typeof l.debug!="undefined"?l.debug.apply(l,[n,I]):l.log.apply(l,[n,I])):n="\n"+arguments[0]+"\n",i=1,g=arguments.length;i<g;++i){if(T=arguments[i],typeof T=="object"&&typeof p!="undefined")try{T=p.stringify(T)}catch(x){}n+="\n"+T+"\n"}return a?(a.value+=n+"\n-----\n",a.scrollTop=a.scrollHeight-a.clientHeight):e||S(n),!0},t.getInternetExplorerMajorVersion=function(){var e=t.getInternetExplorerMajorVersion.cached=typeof t.getInternetExplorerMajorVersion.cached!="undefined"?t.getInternetExplorerMajorVersion.cached:function(){for(var a=3,n=h.createElement("div"),i=n.getElementsByTagName("i");(n.innerHTML="<!--[if gt IE "+ ++a+"]><i></i><![endif]-->")&&i[0];);return a>4?a:!1}();return e},t.isInternetExplorer=function(){var e=t.isInternetExplorer.cached=typeof t.isInternetExplorer.cached!="undefined"?t.isInternetExplorer.cached:Boolean(t.getInternetExplorerMajorVersion());return e},t.options.html4Mode?t.emulated={pushState:!0,hashChange:!0}:t.emulated={pushState:!Boolean(o.history&&o.history.pushState&&o.history.replaceState&&!/ Mobile\/([1-7][a-z]|(8([abcde]|f(1[0-8]))))/i.test(c.userAgent)&&!/AppleWebKit\/5([0-2]|3[0-2])/i.test(c.userAgent)),hashChange:Boolean(!("onhashchange"in o||"onhashchange"in h)||t.isInternetExplorer()&&t.getInternetExplorerMajorVersion()<8)},t.enabled=!t.emulated.pushState,t.bugs={setHash:Boolean(!t.emulated.pushState&&c.vendor==="Apple Computer, Inc."&&/AppleWebKit\/5([0-2]|3[0-3])/.test(c.userAgent)),safariPoll:Boolean(!t.emulated.pushState&&c.vendor==="Apple Computer, Inc."&&/AppleWebKit\/5([0-2]|3[0-3])/.test(c.userAgent)),ieDoubleCheck:Boolean(t.isInternetExplorer()&&t.getInternetExplorerMajorVersion()<8),hashEscape:Boolean(t.isInternetExplorer()&&t.getInternetExplorerMajorVersion()<7)},t.isEmptyObject=function(e){for(var a in e)if(e.hasOwnProperty(a))return!1;return!0},t.cloneObject=function(e){var a,n;return e?(a=p.stringify(e),n=p.parse(a)):n={},n},t.getRootUrl=function(){var e=h.location.protocol+"//"+(h.location.hostname||h.location.host);return h.location.port&&(e+=":"+h.location.port),e+="/",e},t.getBaseHref=function(){var e=h.getElementsByTagName("base"),a=null,n="";return e.length===1&&(a=e[0],n=a.href.replace(/[^\/]+$/,"")),n=n.replace(/\/+$/,""),n&&(n+="/"),n},t.getBaseUrl=function(){var e=t.getBaseHref()||t.getBasePageUrl()||t.getRootUrl();return e},t.getPageUrl=function(){var e=t.getState(!1,!1),a=(e||{}).url||t.getLocationHref(),n;return n=a.replace(/\/+$/,"").replace(/[^\/]+$/,function(i,g,I){return/\./.test(i)?i:i+"/"}),n},t.getBasePageUrl=function(){var e=t.getLocationHref().replace(/[#\?].*/,"").replace(/[^\/]+$/,function(a,n,i){return/[^\/]$/.test(a)?"":a}).replace(/\/+$/,"")+"/";return e},t.getFullUrl=function(e,a){var n=e,i=e.substring(0,1);return a=typeof a=="undefined"?!0:a,/[a-z]+\:\/\//.test(e)||(i==="/"?n=t.getRootUrl()+e.replace(/^\/+/,""):i==="#"?n=t.getPageUrl().replace(/#.*/,"")+e:i==="?"?n=t.getPageUrl().replace(/[\?#].*/,"")+e:a?n=t.getBaseUrl()+e.replace(/^(\.\/)+/,""):n=t.getBasePageUrl()+e.replace(/^(\.\/)+/,"")),n.replace(/\#$/,"")},t.getShortUrl=function(e){var a=e,n=t.getBaseUrl(),i=t.getRootUrl();return t.emulated.pushState&&(a=a.replace(n,"")),a=a.replace(i,"/"),t.isTraditionalAnchor(a)&&(a="./"+a),a=a.replace(/^(\.\/)+/g,"./").replace(/\#$/,""),a},t.getLocationHref=function(e){return e=e||h,e.URL===e.location.href?e.location.href:e.location.href===decodeURIComponent(e.URL)?e.URL:e.location.hash&&decodeURIComponent(e.location.href.replace(/^[^#]+/,""))===e.location.hash||e.URL.indexOf("#")==-1&&e.location.href.indexOf("#")!=-1?e.location.href:e.URL||e.location.href},t.store={},t.idToState=t.idToState||{},t.stateToId=t.stateToId||{},t.urlToId=t.urlToId||{},t.storedStates=t.storedStates||[],t.savedStates=t.savedStates||[],t.normalizeStore=function(){t.store.idToState=t.store.idToState||{},t.store.urlToId=t.store.urlToId||{},t.store.stateToId=t.store.stateToId||{}},t.getState=function(e,a){typeof e=="undefined"&&(e=!0),typeof a=="undefined"&&(a=!0);var n=t.getLastSavedState();return!n&&a&&(n=t.createStateObject()),e&&(n=t.cloneObject(n),n.url=n.cleanUrl||n.url),n},t.getIdByState=function(e){var a=t.extractId(e.url),n;if(!a)if(n=t.getStateString(e),typeof t.stateToId[n]!="undefined")a=t.stateToId[n];else if(typeof t.store.stateToId[n]!="undefined")a=t.store.stateToId[n];else{for(;a=new Date().getTime()+String(Math.random()).replace(/\D/g,""),!(typeof t.idToState[a]=="undefined"&&typeof t.store.idToState[a]=="undefined"););t.stateToId[n]=a,t.idToState[a]=e}return a},t.normalizeState=function(e){var a,n;return(!e||typeof e!="object")&&(e={}),typeof e.normalized!="undefined"?e:((!e.data||typeof e.data!="object")&&(e.data={}),a={},a.normalized=!0,a.title=e.title||"",a.url=t.getFullUrl(e.url?e.url:t.getLocationHref()),a.hash=t.getShortUrl(a.url),a.data=t.cloneObject(e.data),a.id=t.getIdByState(a),a.cleanUrl=a.url.replace(/\??\&_suid.*/,""),a.url=a.cleanUrl,n=!t.isEmptyObject(a.data),(a.title||n)&&t.options.disableSuid!==!0&&(a.hash=t.getShortUrl(a.url).replace(/\??\&_suid.*/,""),/\?/.test(a.hash)||(a.hash+="?"),a.hash+="&_suid="+a.id),a.hashedUrl=t.getFullUrl(a.hash),(t.emulated.pushState||t.bugs.safariPoll)&&t.hasUrlDuplicate(a)&&(a.url=a.hashedUrl),a)},t.createStateObject=function(e,a,n){var i={data:e,title:a,url:n};return i=t.normalizeState(i),i},t.getStateById=function(e){e=String(e);var a=t.idToState[e]||t.store.idToState[e]||b;return a},t.getStateString=function(e){var a,n,i;return a=t.normalizeState(e),n={data:a.data,title:e.title,url:e.url},i=p.stringify(n),i},t.getStateId=function(e){var a,n;return a=t.normalizeState(e),n=a.id,n},t.getHashByState=function(e){var a,n;return a=t.normalizeState(e),n=a.hash,n},t.extractId=function(e){var a,n,i,g;return e.indexOf("#")!=-1?g=e.split("#")[0]:g=e,n=/(.*)\&_suid=([0-9]+)$/.exec(g),i=n&&n[1]||e,a=n?String(n[2]||""):"",a||!1},t.isTraditionalAnchor=function(e){var a=!/[\/\?\.]/.test(e);return a},t.extractState=function(e,a){var n=null,i,g;return a=a||!1,i=t.extractId(e),i&&(n=t.getStateById(i)),n||(g=t.getFullUrl(e),i=t.getIdByUrl(g)||!1,i&&(n=t.getStateById(i)),!n&&a&&!t.isTraditionalAnchor(e)&&(n=t.createStateObject(null,null,g))),n},t.getIdByUrl=function(e){var a=t.urlToId[e]||t.store.urlToId[e]||b;return a},t.getLastSavedState=function(){return t.savedStates[t.savedStates.length-1]||b},t.getLastStoredState=function(){return t.storedStates[t.storedStates.length-1]||b},t.hasUrlDuplicate=function(e){var a=!1,n;return n=t.extractState(e.url),a=n&&n.id!==e.id,a},t.storeState=function(e){return t.urlToId[e.url]=e.id,t.storedStates.push(t.cloneObject(e)),e},t.isLastSavedState=function(e){var a=!1,n,i,g;return t.savedStates.length&&(n=e.id,i=t.getLastSavedState(),g=i.id,a=n===g),a},t.saveState=function(e){return t.isLastSavedState(e)?!1:(t.savedStates.push(t.cloneObject(e)),!0)},t.getStateByIndex=function(e){var a=null;return typeof e=="undefined"?a=t.savedStates[t.savedStates.length-1]:e<0?a=t.savedStates[t.savedStates.length+e]:a=t.savedStates[e],a},t.getCurrentIndex=function(){var e=null;return t.savedStates.length<1?e=0:e=t.savedStates.length-1,e},t.getHash=function(e){var a=t.getLocationHref(e),n;return n=t.getHashByUrl(a),n},t.unescapeHash=function(e){var a=t.normalizeHash(e);return a=decodeURIComponent(a),a},t.normalizeHash=function(e){var a=e.replace(/[^#]*#/,"").replace(/#.*/,"");return a},t.setHash=function(e,a){var n,i;return a!==!1&&t.busy()?(t.pushQueue({scope:t,callback:t.setHash,args:arguments,queue:a}),!1):(t.busy(!0),n=t.extractState(e,!0),n&&!t.emulated.pushState?t.pushState(n.data,n.title,n.url,!1):t.getHash()!==e&&(t.bugs.setHash?(i=t.getPageUrl(),t.pushState(null,null,i+"#"+e,!1)):h.location.hash=e),t)},t.escapeHash=function(e){var a=t.normalizeHash(e);return a=o.encodeURIComponent(a),t.bugs.hashEscape||(a=a.replace(/\%21/g,"!").replace(/\%26/g,"&").replace(/\%3D/g,"=").replace(/\%3F/g,"?")),a},t.getHashByUrl=function(e){var a=String(e).replace(/([^#]*)#?([^#]*)#?(.*)/,"$2");return a=t.unescapeHash(a),a},t.setTitle=function(e){var a=e.title,n;a||(n=t.getStateByIndex(0),n&&n.url===e.url&&(a=n.title||t.options.initialTitle));try{h.getElementsByTagName("title")[0].innerHTML=a.replace("<","&lt;").replace(">","&gt;").replace(" & "," &amp; ")}catch(i){}return h.title=a,t},t.queues=[],t.busy=function(e){if(typeof e!="undefined"?t.busy.flag=e:typeof t.busy.flag=="undefined"&&(t.busy.flag=!1),!t.busy.flag){s(t.busy.timeout);var a=function(){var n,i,g;if(!t.busy.flag)for(n=t.queues.length-1;n>=0;--n)i=t.queues[n],i.length!==0&&(g=i.shift(),t.fireQueueItem(g),t.busy.timeout=r(a,t.options.busyDelay))};t.busy.timeout=r(a,t.options.busyDelay)}return t.busy.flag},t.busy.flag=!1,t.fireQueueItem=function(e){return e.callback.apply(e.scope||t,e.args||[])},t.pushQueue=function(e){return t.queues[e.queue||0]=t.queues[e.queue||0]||[],t.queues[e.queue||0].push(e),t},t.queue=function(e,a){return typeof e=="function"&&(e={callback:e}),typeof a!="undefined"&&(e.queue=a),t.busy()?t.pushQueue(e):t.fireQueueItem(e),t},t.clearQueue=function(){return t.busy.flag=!1,t.queues=[],t},t.stateChanged=!1,t.doubleChecker=!1,t.doubleCheckComplete=function(){return t.stateChanged=!0,t.doubleCheckClear(),t},t.doubleCheckClear=function(){return t.doubleChecker&&(s(t.doubleChecker),t.doubleChecker=!1),t},t.doubleCheck=function(e){return t.stateChanged=!1,t.doubleCheckClear(),t.bugs.ieDoubleCheck&&(t.doubleChecker=r(function(){return t.doubleCheckClear(),t.stateChanged||e(),!0},t.options.doubleCheckInterval)),t},t.safariStatePoll=function(){var e=t.extractState(t.getLocationHref()),a;if(!t.isLastSavedState(e))return a=e,a||(a=t.createStateObject()),t.Adapter.trigger(o,"popstate"),t},t.back=function(e){return e!==!1&&t.busy()?(t.pushQueue({scope:t,callback:t.back,args:arguments,queue:e}),!1):(t.busy(!0),t.doubleCheck(function(){t.back(!1)}),v.go(-1),!0)},t.forward=function(e){return e!==!1&&t.busy()?(t.pushQueue({scope:t,callback:t.forward,args:arguments,queue:e}),!1):(t.busy(!0),t.doubleCheck(function(){t.forward(!1)}),v.go(1),!0)},t.go=function(e,a){var n;if(e>0)for(n=1;n<=e;++n)t.forward(a);else{if(!(e<0))throw new Error("History.go: History.go requires a positive or negative integer passed.");for(n=-1;n>=e;--n)t.back(a)}return t},t.emulated.pushState){var H=function(){};t.pushState=t.pushState||H,t.replaceState=t.replaceState||H}else t.onPopState=function(e,a){var n=!1,i=!1,g,I;return t.doubleCheckComplete(),g=t.getHash(),g?(I=t.extractState(g||t.getLocationHref(),!0),I?t.replaceState(I.data,I.title,I.url,!1):(t.Adapter.trigger(o,"anchorchange"),t.busy(!1)),t.expectedStateId=!1,!1):(n=t.Adapter.extractEventData("state",e,a)||!1,n?i=t.getStateById(n):t.expectedStateId?i=t.getStateById(t.expectedStateId):i=t.extractState(t.getLocationHref()),i||(i=t.createStateObject(null,null,t.getLocationHref())),t.expectedStateId=!1,t.isLastSavedState(i)?(t.busy(!1),!1):(t.storeState(i),t.saveState(i),t.setTitle(i),t.Adapter.trigger(o,"statechange"),t.busy(!1),!0))},t.Adapter.bind(o,"popstate",t.onPopState),t.pushState=function(e,a,n,i){if(t.getHashByUrl(n)&&t.emulated.pushState)throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");if(i!==!1&&t.busy())return t.pushQueue({scope:t,callback:t.pushState,args:arguments,queue:i}),!1;t.busy(!0);var g=t.createStateObject(e,a,n);return t.isLastSavedState(g)?t.busy(!1):(t.storeState(g),t.expectedStateId=g.id,v.pushState(g.id,g.title,g.url),t.Adapter.trigger(o,"popstate")),!0},t.replaceState=function(e,a,n,i){if(t.getHashByUrl(n)&&t.emulated.pushState)throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");if(i!==!1&&t.busy())return t.pushQueue({scope:t,callback:t.replaceState,args:arguments,queue:i}),!1;t.busy(!0);var g=t.createStateObject(e,a,n);return t.isLastSavedState(g)?t.busy(!1):(t.storeState(g),t.expectedStateId=g.id,v.replaceState(g.id,g.title,g.url),t.Adapter.trigger(o,"popstate")),!0};if(y){try{t.store=p.parse(y.getItem("History.store"))||{}}catch(e){t.store={}}t.normalizeStore()}else t.store={},t.normalizeStore();t.Adapter.bind(o,"unload",t.clearAllIntervals),t.saveState(t.storeState(t.extractState(t.getLocationHref(),!0))),y&&(t.onUnload=function(){var e,a,n;try{e=p.parse(y.getItem("History.store"))||{}}catch(i){e={}}e.idToState=e.idToState||{},e.urlToId=e.urlToId||{},e.stateToId=e.stateToId||{};for(a in t.idToState)!t.idToState.hasOwnProperty(a)||(e.idToState[a]=t.idToState[a]);for(a in t.urlToId)!t.urlToId.hasOwnProperty(a)||(e.urlToId[a]=t.urlToId[a]);for(a in t.stateToId)!t.stateToId.hasOwnProperty(a)||(e.stateToId[a]=t.stateToId[a]);t.store=e,t.normalizeStore(),n=p.stringify(e);try{y.setItem("History.store",n)}catch(i){if(i.code!==DOMException.QUOTA_EXCEEDED_ERR)throw i;y.length&&(y.removeItem("History.store"),y.setItem("History.store",n))}},t.intervalList.push(u(t.onUnload,t.options.storeInterval)),t.Adapter.bind(o,"beforeunload",t.onUnload),t.Adapter.bind(o,"unload",t.onUnload)),t.emulated.pushState||(t.bugs.safariPoll&&t.intervalList.push(u(t.safariStatePoll,t.options.safariPollInterval)),(c.vendor==="Apple Computer, Inc."||(c.appCodeName||"")==="Mozilla")&&(t.Adapter.bind(o,"hashchange",function(){t.Adapter.trigger(o,"popstate")}),t.getHash()&&t.Adapter.onDomLoad(function(){t.Adapter.trigger(o,"hashchange")})))},(!t.options||!t.options.delayInit)&&t.init()}(window);
//# sourceMappingURL=/s/files/1/2721/6956/t/4/assets/jquery.history.js.map?v=9788135271330519338
