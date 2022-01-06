/*
 Highstock JS v9.3.1 (2021-11-05)

 Indicator series type for Highcharts Stock

 (c) 2010-2021 Daniel Studencki

 License: www.highcharts.com/license
*/
'use strict';(function(a){"object"===typeof module&&module.exports?(a["default"]=a,module.exports=a):"function"===typeof define&&define.amd?define("highcharts/indicators/keltner-channels",["highcharts","highcharts/modules/stock"],function(g){a(g);a.Highcharts=g;return a}):a("undefined"!==typeof Highcharts?Highcharts:void 0)})(function(a){function g(a,d,e,g){a.hasOwnProperty(d)||(a[d]=g.apply(null,e))}a=a?a._modules:{};g(a,"Stock/Indicators/MultipleLinesComposition.js",[a["Core/Series/SeriesRegistry.js"],
a["Core/Utilities.js"]],function(a,d){var e=a.seriesTypes.sma,g=d.defined,m=d.error,t=d.merge,f;(function(a){function d(){var b=this,a=b.linesApiNames,c=b.points,h=b.options,d=b.graph,l={options:{gapSize:h.gapSize}},k=[],u=b.getTranslatedLinesNames(b.pointValKey),r=c.length,f;u.forEach(function(b,a){for(k[a]=[];r--;)f=c[r],k[a].push({x:f.x,plotX:f.plotX,plotY:f[b],isNull:!g(f[b])});r=c.length});a.forEach(function(a,c){k[c]?(b.points=k[c],h[a]?b.options=t(h[a].styles,l):m('Error: "There is no '+a+
' in DOCS options declared. Check if linesApiNames are consistent with your DOCS line names." at mixin/multiple-line.js:34'),b.graph=b["graph"+a],e.prototype.drawGraph.call(b),b["graph"+a]=b.graph):m('Error: "'+a+" doesn't have equivalent in pointArrayMap. To many elements in linesApiNames relative to pointArrayMap.\"")});b.points=c;b.options=h;b.graph=d;e.prototype.drawGraph.call(b)}function l(b){var a=[];(this.pointArrayMap||[]).forEach(function(c){c!==b&&a.push("plot"+c.charAt(0).toUpperCase()+
c.slice(1))});return a}function c(b){var a=[];(this.pointArrayMap||[]).forEach(function(c){a.push(b[c])});return a}function h(){var a=this,c=a.pointArrayMap,h=[],d;h=a.getTranslatedLinesNames();e.prototype.translate.apply(a,arguments);a.points.forEach(function(b){c.forEach(function(c,l){d=b[c];a.dataModify&&(d=a.dataModify.modifyValue(d));null!==d&&(b[h[l]]=a.yAxis.toPixels(d,!0))})})}var u=[],r=["bottomLine"],f=["top","bottom"];a.compose=function(a){if(-1===u.indexOf(a)){u.push(a);var b=a.prototype;
b.linesApiNames=b.linesApiNames||r.slice();b.pointArrayMap=b.pointArrayMap||f.slice();b.pointValKey=b.pointValKey||"top";b.drawGraph=d;b.toYData=c;b.translate=h;b.getTranslatedLinesNames=l}return a}})(f||(f={}));return f});g(a,"Stock/Indicators/KeltnerChannels/KeltnerChannelsIndicator.js",[a["Stock/Indicators/MultipleLinesComposition.js"],a["Core/Series/SeriesRegistry.js"],a["Core/Utilities.js"]],function(a,d,e){var g=this&&this.__extends||function(){var a=function(d,c){a=Object.setPrototypeOf||{__proto__:[]}instanceof
Array&&function(a,c){a.__proto__=c}||function(a,c){for(var d in c)c.hasOwnProperty(d)&&(a[d]=c[d])};return a(d,c)};return function(d,c){function h(){this.constructor=d}a(d,c);d.prototype=null===c?Object.create(c):(h.prototype=c.prototype,new h)}}(),m=d.seriesTypes.sma,t=e.correctFloat,f=e.extend,n=e.merge;e=function(a){function e(){var c=null!==a&&a.apply(this,arguments)||this;c.data=void 0;c.options=void 0;c.points=void 0;return c}g(e,a);e.prototype.init=function(){d.seriesTypes.sma.prototype.init.apply(this,
arguments);this.options=n({topLine:{styles:{lineColor:this.color}},bottomLine:{styles:{lineColor:this.color}}},this.options)};e.prototype.getValues=function(a,e){var c=e.period,f=e.periodATR,g=e.multiplierATR,b=a.yData;b=b?b.length:0;var h=[];e=d.seriesTypes.ema.prototype.getValues(a,{period:c,index:e.index});var m=d.seriesTypes.atr.prototype.getValues(a,{period:f}),l=[],n=[],p;if(!(b<c)){for(p=c;p<=b;p++){var k=e.values[p-c];var q=m.values[p-f];var v=k[0];a=t(k[1]+g*q[1]);q=t(k[1]-g*q[1]);k=k[1];
h.push([v,a,k,q]);l.push(v);n.push([a,k,q])}return{values:h,xData:l,yData:n}}};e.defaultOptions=n(m.defaultOptions,{params:{index:0,period:20,periodATR:10,multiplierATR:2},bottomLine:{styles:{lineWidth:1,lineColor:void 0}},topLine:{styles:{lineWidth:1,lineColor:void 0}},tooltip:{pointFormat:'<span style="color:{point.color}">\u25cf</span><b> {series.name}</b><br/>Upper Channel: {point.top}<br/>EMA({series.options.params.period}): {point.middle}<br/>Lower Channel: {point.bottom}<br/>'},marker:{enabled:!1},
dataGrouping:{approximation:"averages"},lineWidth:1});return e}(m);f(e.prototype,{nameBase:"Keltner Channels",nameComponents:["period","periodATR","multiplierATR"],linesApiNames:["topLine","bottomLine"],pointArrayMap:["top","middle","bottom"],pointValKey:"middle"});a.compose(e);d.registerSeriesType("keltnerchannels",e);"";return e});g(a,"masters/indicators/keltner-channels.src.js",[],function(){})});
//# sourceMappingURL=keltner-channels.js.map