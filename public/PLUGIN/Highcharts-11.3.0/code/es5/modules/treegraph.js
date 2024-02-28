/**
 * Highcharts JS v11.3.0 (2024-01-10)
 * Treegraph chart series type
 *
 *  (c) 2010-2024 Pawel Lysy Grzegorz Blachlinski
 *
 * License: www.highcharts.com/license
 */!function(t){"object"==typeof module&&module.exports?(t.default=t,module.exports=t):"function"==typeof define&&define.amd?define("highcharts/modules/treegraph",["highcharts","highcharts/modules/treemap"],function(e){return t(e),t.Highcharts=e,t}):t("undefined"!=typeof Highcharts?Highcharts:void 0)}(function(t){"use strict";var e=t?t._modules:{};function i(t,e,i,o){t.hasOwnProperty(e)||(t[e]=o.apply(null,i),"function"==typeof CustomEvent&&window.dispatchEvent(new CustomEvent("HighchartsModuleLoaded",{detail:{path:e,module:t[e]}})))}i(e,"Series/PathUtilities.js",[],function(){function t(t,e){for(var i=[],o=0;o<t.length;o++){var r=t[o][1],n=t[o][2];if("number"==typeof r&&"number"==typeof n){if(0===o)i.push(["M",r,n]);else if(o===t.length-1)i.push(["L",r,n]);else if(e){var s=t[o-1],a=t[o+1];if(s&&a){var l=s[1],p=s[2],h=a[1],d=a[2];if("number"==typeof l&&"number"==typeof h&&"number"==typeof p&&"number"==typeof d&&l!==h&&p!==d){var c=l<h?1:-1,u=p<d?1:-1;i.push(["L",r-c*Math.min(Math.abs(r-l),e),n-u*Math.min(Math.abs(n-p),e)],["C",r,n,r,n,r+c*Math.min(Math.abs(r-h),e),n+u*Math.min(Math.abs(n-d),e)])}}}else i.push(["L",r,n])}}return i}return{applyRadius:t,getLinkPath:{default:function(e){var i=e.x1,o=e.y1,r=e.x2,n=e.y2,s=e.width,a=void 0===s?0:s,l=e.inverted,p=void 0!==l&&l,h=e.radius,d=e.parentVisible,c=[["M",i,o],["L",i,o],["C",i,o,i,n,i,n],["L",i,n],["C",i,o,i,n,i,n],["L",i,n]];return d?t([["M",i,o],["L",i+a*(p?-.5:.5),o],["L",i+a*(p?-.5:.5),n],["L",r,n]],h):c},straight:function(t){var e=t.x1,i=t.y1,o=t.x2,r=t.y2,n=t.width,s=t.inverted;return t.parentVisible?[["M",e,i],["L",e+(void 0===n?0:n)*(void 0!==s&&s?-1:1),r],["L",o,r]]:[["M",e,i],["L",e,r],["L",e,r]]},curved:function(t){var e=t.x1,i=t.y1,o=t.x2,r=t.y2,n=t.offset,s=void 0===n?0:n,a=t.width,l=void 0===a?0:a,p=t.inverted,h=void 0!==p&&p;return t.parentVisible?[["M",e,i],["C",e+s,i,e-s+l*(h?-1:1),r,e+l*(h?-1:1),r],["L",o,r]]:[["M",e,i],["C",e,i,e,r,e,r],["L",o,r]]}}}}),i(e,"Series/Treegraph/TreegraphNode.js",[e["Core/Series/SeriesRegistry.js"]],function(t){var e,i=this&&this.__extends||(e=function(t,i){return(e=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i])})(t,i)},function(t,i){if("function"!=typeof i&&null!==i)throw TypeError("Class extends value "+String(i)+" is not a constructor or null");function o(){this.constructor=t}e(t,i),t.prototype=null===i?Object.create(i):(o.prototype=i.prototype,new o)});return function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.mod=0,e.shift=0,e.change=0,e.children=[],e.preX=0,e.hidden=!1,e.wasVisited=!1,e.collapsed=!1,e}return i(e,t),e.prototype.nextLeft=function(){return this.getLeftMostChild()||this.thread},e.prototype.nextRight=function(){return this.getRightMostChild()||this.thread},e.prototype.getAncestor=function(t,e){return t.ancestor.children[0]===this.children[0]?t.ancestor:e},e.prototype.getLeftMostSibling=function(){var t=this.getParent();if(t)for(var e=0,i=t.children;e<i.length;e++){var o=i[e];if(o&&o.point.visible)return o}},e.prototype.hasChildren=function(){for(var t=this.children,e=0;e<t.length;e++)if(t[e].point.visible)return!0;return!1},e.prototype.getLeftSibling=function(){var t=this.getParent();if(t){for(var e=t.children,i=this.relativeXPosition-1;i>=0;i--)if(e[i]&&e[i].point.visible)return e[i]}},e.prototype.getLeftMostChild=function(){for(var t=this.children,e=0;e<t.length;e++)if(t[e].point.visible)return t[e]},e.prototype.getRightMostChild=function(){for(var t=this.children,e=t.length-1;e>=0;e--)if(t[e].point.visible)return t[e]},e.prototype.getParent=function(){return this.parentNode},e.prototype.getFirstChild=function(){for(var t=this.children,e=0;e<t.length;e++)if(t[e].point.visible)return t[e]},e}(t.seriesTypes.treemap.prototype.NodeClass)}),i(e,"Series/Treegraph/TreegraphPoint.js",[e["Core/Series/Point.js"],e["Core/Series/SeriesRegistry.js"],e["Core/Utilities.js"]],function(t,e,i){var o,r=this&&this.__extends||(o=function(t,e){return(o=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i])})(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw TypeError("Class extends value "+String(e)+" is not a constructor or null");function i(){this.constructor=t}o(t,e),t.prototype=null===e?Object.create(e):(i.prototype=e.prototype,new i)}),n=e.seriesTypes.treemap.prototype.pointClass,s=i.addEvent,a=i.fireEvent,l=i.merge,p=function(e){function i(){var i=null!==e&&e.apply(this,arguments)||this;return i.isLink=!1,i.setState=t.prototype.setState,i}return r(i,e),i.prototype.draw=function(){e.prototype.draw.apply(this,arguments);var t=this.graphic;t&&t.animate({visibility:this.visible?"inherit":"hidden"}),this.renderCollapseButton()},i.prototype.renderCollapseButton=function(){var t=this.series,e=this.graphic&&this.graphic.parentGroup,i=t.mapOptionsToLevel[this.node.level||0]||{},o=l(t.options.collapseButton,i.collapseButton,this.options.collapseButton),r=o.width,n=o.height,s=o.shape,a=o.style,p=this.series.chart,h=this.visible&&(this.collapsed||!o.onlyOnHover||"hover"===this.state)?1:0;if(this.shapeArgs){if(this.collapseButtonOptions=o,this.collapseButton){if(this.node.children.length&&o.enabled){var d=this.getCollapseBtnPosition(o),c=d.x,u=d.y;this.collapseButton.attr({text:this.collapsed?"+":"-",rotation:p.inverted?90:0,rotationOriginX:r/2,rotationOriginY:n/2,visibility:this.visible?"inherit":"hidden"}).animate({x:c,y:u,opacity:h})}else this.collapseButton.destroy(),delete this.collapseButton}else{if(!this.node.children.length||!o.enabled)return;var f=this.getCollapseBtnPosition(o),c=f.x,u=f.y,v=o.fillColor||this.color||"#cccccc";this.collapseButton=p.renderer.label(this.collapsed?"+":"-",c,u,s).attr({height:n-4,width:r-4,padding:2,fill:v,rotation:p.inverted?90:0,rotationOriginX:r/2,rotationOriginY:n/2,stroke:o.lineColor||"#ffffff","stroke-width":o.lineWidth,"text-align":"center",align:"center",zIndex:1,opacity:h,visibility:this.visible?"inherit":"hidden"}).addClass("highcharts-tracker").addClass("highcharts-collapse-button").removeClass("highcharts-no-tooltip").css(l({color:"string"==typeof v?p.renderer.getContrast(v):"#333333"},a)).add(e),this.collapseButton.element.point=this}}},i.prototype.toggleCollapse=function(t){var e=this.series;this.update({collapsed:null!=t?t:!this.collapsed},!1,void 0,!1),a(e,"toggleCollapse"),e.redraw()},i.prototype.destroy=function(){this.collapseButton&&(this.collapseButton.destroy(),delete this.collapseButton,this.collapseButton=void 0),this.linkToParent&&(this.linkToParent.destroy(),delete this.linkToParent),e.prototype.destroy.apply(this,arguments)},i.prototype.getCollapseBtnPosition=function(t){var e=this.series.chart.inverted,i=t.width,o=t.height,r=this.shapeArgs||{},n=r.x,s=r.y,a=r.width,l=r.height;return{x:(void 0===n?0:n)+t.x+(e?-(.3*o):(void 0===a?0:a)+-.3*i),y:(void 0===s?0:s)+(void 0===l?0:l)/2-o/2+t.y}},i}(n);return s(p,"mouseOut",function(){var t=this.collapseButton,e=this.collapseButtonOptions;t&&(null==e?void 0:e.onlyOnHover)&&!this.collapsed&&t.animate({opacity:0})}),s(p,"mouseOver",function(){var t,e;this.collapseButton&&this.visible&&this.collapseButton.animate({opacity:1},null===(e=null===(t=this.series.options.states)||void 0===t?void 0:t.hover)||void 0===e?void 0:e.animation)}),s(p,"click",function(){this.toggleCollapse()}),p}),i(e,"Series/Treegraph/TreegraphLink.js",[e["Core/Series/Point.js"],e["Core/Utilities.js"],e["Core/Series/SeriesRegistry.js"]],function(t,e,i){var o,r=this&&this.__extends||(o=function(t,e){return(o=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i])})(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw TypeError("Class extends value "+String(e)+" is not a constructor or null");function i(){this.constructor=t}o(t,e),t.prototype=null===e?Object.create(e):(i.prototype=e.prototype,new i)}),n=e.pick,s=e.extend;return function(e){function i(t,i,o,r){var n=e.call(this,t,i,o)||this;return n.isLink=!0,n.node={},n.formatPrefix="link",n.dataLabelOnNull=!0,n.formatPrefix="link",n.dataLabelOnNull=!0,r&&(n.fromNode=r.node.parentNode.point,n.visible=r.visible,n.toNode=r,n.id=n.toNode.id+"-"+n.fromNode.id),n}return r(i,e),i.prototype.update=function(e,i,o,r){var a={id:this.id,formatPrefix:this.formatPrefix};t.prototype.update.call(this,e,!this.isLink&&i,o,r),this.visible=this.toNode.visible,s(this,a),n(i,!0)&&this.series.chart.redraw(o)},i}(i.seriesTypes.column.prototype.pointClass)}),i(e,"Series/Treegraph/TreegraphLayout.js",[e["Series/Treegraph/TreegraphNode.js"]],function(t){return function(){function e(){}return e.createDummyNode=function(e,i,o,r){var n=new t;return n.id=e.id+"-"+o,n.ancestor=e,n.children.push(i),n.parent=e.id,n.parentNode=e,n.point=i.point,n.level=i.level-o,n.relativeXPosition=i.relativeXPosition,n.visible=i.visible,e.children[i.relativeXPosition]=n,i.oldParentNode=e,i.relativeXPosition=0,i.parentNode=n,i.parent=n.id,n},e.prototype.calculatePositions=function(t){var e=t.nodeList;this.resetValues(e);var i=t.tree;i&&(this.calculateRelativeX(i,0),this.beforeLayout(e),this.firstWalk(i),this.secondWalk(i,-i.preX),this.afterLayout(e))},e.prototype.beforeLayout=function(t){for(var i=0;i<t.length;i++)for(var o=t[i],r=0,n=0,s=o.children;n<s.length;n++){var a=s[n];if(a&&a.level-o.level>1)for(var l=a.level-o.level-1;l>0;)a=e.createDummyNode(o,a,l,r),l--;++r}},e.prototype.resetValues=function(t){for(var e=0;e<t.length;e++){var i=t[e];i.mod=0,i.ancestor=i,i.shift=0,i.thread=void 0,i.change=0,i.preX=0}},e.prototype.calculateRelativeX=function(t,e){for(var i=t.children,o=0,r=i.length;o<r;++o)this.calculateRelativeX(i[o],o);t.relativeXPosition=e},e.prototype.firstWalk=function(t){var e;if(t.hasChildren()){for(var i=t.getLeftMostChild(),o=0,r=t.children;o<r.length;o++){var n=r[o];this.firstWalk(n),i=this.apportion(n,i)}this.executeShifts(t);var s=t.getLeftMostChild(),a=t.getRightMostChild(),l=(s.preX+a.preX)/2;(e=t.getLeftSibling())?(t.preX=e.preX+1,t.mod=t.preX-l):t.preX=l}else(e=t.getLeftSibling())?(t.preX=e.preX+1,t.mod=t.preX):t.preX=0},e.prototype.secondWalk=function(t,e){t.yPosition=t.preX+e,t.xPosition=t.level;for(var i=0,o=t.children;i<o.length;i++){var r=o[i];this.secondWalk(r,e+t.mod)}},e.prototype.executeShifts=function(t){for(var e=0,i=0,o=t.children.length-1;o>=0;o--){var r=t.children[o];r.preX+=e,r.mod+=e,i+=r.change,e+=r.shift+i}},e.prototype.apportion=function(t,e){var i=t.getLeftSibling();if(i){for(var o=t,r=t,n=i,s=o.getLeftMostSibling(),a=o.mod,l=r.mod,p=n.mod,h=s.mod;n&&n.nextRight()&&o&&o.nextLeft();){n=n.nextRight(),s=s.nextLeft(),o=o.nextLeft(),(r=r.nextRight()).ancestor=t;var d=n.preX+p-(o.preX+a)+1;d>0&&(this.moveSubtree(t.getAncestor(n,e),t,d),a+=d,l+=d),p+=n.mod,a+=o.mod,h+=s.mod,l+=r.mod}n&&n.nextRight()&&!r.nextRight()&&(r.thread=n.nextRight(),r.mod+=p-l),o&&o.nextLeft()&&!s.nextLeft()&&(s.thread=o.nextLeft(),s.mod+=a-h),e=t}return e},e.prototype.moveSubtree=function(t,e,i){var o=e.relativeXPosition-t.relativeXPosition;e.change-=i/o,e.shift+=i,e.preX+=i,e.mod+=i,t.change+=i/o},e.prototype.afterLayout=function(t){for(var e=0;e<t.length;e++){var i=t[e];i.oldParentNode&&(i.relativeXPosition=i.parentNode.relativeXPosition,i.parent=i.oldParentNode.parent,i.parentNode=i.oldParentNode,delete i.oldParentNode.children[i.relativeXPosition],i.oldParentNode.children[i.relativeXPosition]=i,i.oldParentNode=void 0)}},e}()}),i(e,"Series/Treegraph/TreegraphSeriesDefaults.js",[],function(){return{reversed:!1,marker:{radius:10,lineWidth:0,symbol:"circle",fillOpacity:1,states:{}},link:{color:"#666666",lineWidth:1,radius:10,cursor:"default",type:"curved"},collapseButton:{onlyOnHover:!0,enabled:!0,lineWidth:1,x:0,y:0,height:18,width:18,shape:"circle",style:{cursor:"pointer",fontWeight:"bold",fontSize:"1em"}},fillSpace:!1,tooltip:{linkFormat:"{point.fromNode.id} → {point.toNode.id}",pointFormat:"{point.id}"},dataLabels:{defer:!0,linkTextPath:{attributes:{startOffset:"50%"}},enabled:!0,linkFormatter:function(){return""},style:{textOverflow:"none"}}}}),i(e,"Series/Treegraph/TreegraphSeries.js",[e["Series/PathUtilities.js"],e["Core/Series/SeriesRegistry.js"],e["Core/Renderer/SVG/SVGRenderer.js"],e["Series/Treegraph/TreegraphNode.js"],e["Series/Treegraph/TreegraphPoint.js"],e["Series/TreeUtilities.js"],e["Core/Utilities.js"],e["Series/Treegraph/TreegraphLink.js"],e["Series/Treegraph/TreegraphLayout.js"],e["Series/Treegraph/TreegraphSeriesDefaults.js"]],function(t,e,i,o,r,n,s,a,l,p){var h,d=this&&this.__extends||(h=function(t,e){return(h=Object.setPrototypeOf||({__proto__:[]})instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var i in e)Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i])})(t,e)},function(t,e){if("function"!=typeof e&&null!==e)throw TypeError("Class extends value "+String(e)+" is not a constructor or null");function i(){this.constructor=t}h(t,e),t.prototype=null===e?Object.create(e):(i.prototype=e.prototype,new i)}),c=t.getLinkPath,u=e.series.prototype,f=e.seriesTypes,v=f.treemap,y=f.column,g=i.prototype.symbols,m=n.getLevelOptions,b=s.extend,k=s.merge,L=s.pick,P=s.relativeLength,x=s.splat,T=function(t){function e(){var e=null!==t&&t.apply(this,arguments)||this;return e.nodeList=[],e.links=[],e}return d(e,t),e.prototype.init=function(){t.prototype.init.apply(this,arguments),this.layoutAlgorythm=new l},e.prototype.getLayoutModifiers=function(){var t=this,e=this.chart,i=this,o=e.plotSizeX,r=e.plotSizeY,n=1/0,s=-1/0,a=1/0,l=-1/0,p=0,h=0,d=0,c=0;this.points.forEach(function(e){if(!t.options.fillSpace||e.visible){var u=e.node,f=i.mapOptionsToLevel[e.node.level]||{},v=k(t.options.marker,f.marker,e.options.marker),y=P(v.radius||0,Math.min(o,r)),g=v.symbol,m="circle"!==g&&v.height?P(v.height,r):2*y,b="circle"!==g&&v.width?P(v.width,o):2*y;u.nodeSizeX=b,u.nodeSizeY=m,u.xPosition<=n&&(n=u.xPosition,h=Math.max(b+(v.lineWidth||0),h)),u.xPosition>=s&&(s=u.xPosition,p=Math.max(b+(v.lineWidth||0),p)),u.yPosition<=a&&(a=u.yPosition,c=Math.max(m+(v.lineWidth||0),c)),u.yPosition>=l&&(l=u.yPosition,d=Math.max(m+(v.lineWidth||0),d))}});var u=l===a?1:(r-(c+d)/2)/(l-a),f=l===a?r/2:-u*a+c/2,v=s===n?1:(o-(p+p)/2)/(s-n),y=s===n?o/2:-v*n+h/2;return{ax:v,bx:y,ay:u,by:f}},e.prototype.getLinks=function(){var t=this,e=this,i=[];return this.data.forEach(function(o,r){var n=e.mapOptionsToLevel[o.node.level||0]||{};if(o.node.parent){var s=k(n,o.options);if(!o.linkToParent||o.linkToParent.destroyed){var a=new e.LinkClass(e,s,void 0,o);o.linkToParent=a}else o.collapsed=L(o.collapsed,(t.mapOptionsToLevel[o.node.level]||{}).collapsed),o.linkToParent.visible=o.linkToParent.toNode.visible;o.linkToParent.index=i.push(o.linkToParent)-1}else o.linkToParent&&(e.links.splice(o.linkToParent.index),o.linkToParent.destroy(),delete o.linkToParent)}),i},e.prototype.buildTree=function(e,i,o,r,n){var s=this.points[i];return o=s&&s.level||o,t.prototype.buildTree.call(this,e,i,o,r,n)},e.prototype.markerAttribs=function(){return{}},e.prototype.setCollapsedStatus=function(t,e){var i=this,o=t.point;o&&(o.collapsed=L(o.collapsed,(this.mapOptionsToLevel[t.level]||{}).collapsed),o.visible=e,e=!1!==e&&!o.collapsed),t.children.forEach(function(t){i.setCollapsedStatus(t,e)})},e.prototype.drawTracker=function(){y.prototype.drawTracker.apply(this,arguments),y.prototype.drawTracker.call(this,this.links)},e.prototype.translate=function(){var t,e=this,i=this.options,o=n.updateRootId(this);u.translate.call(this);var r=this.tree=this.getTree();t=this.nodeMap[o],""===o||t&&t.children.length||(this.setRootNode("",!1),o=this.rootNode,t=this.nodeMap[o]),this.mapOptionsToLevel=m({from:t.level+1,levels:i.levels,to:r.height,defaults:{levelIsConstant:this.options.levelIsConstant,colorByPoint:i.colorByPoint}}),this.setCollapsedStatus(r,!0),this.links=this.getLinks(),this.setTreeValues(r),this.layoutAlgorythm.calculatePositions(this),this.layoutModifier=this.getLayoutModifiers(),this.points.forEach(function(t){e.translateNode(t)}),this.points.forEach(function(t){t.linkToParent&&e.translateLink(t.linkToParent)}),i.colorByPoint||this.setColorRecursive(this.tree)},e.prototype.translateLink=function(t){var e=t.fromNode,i=t.toNode,o=this.options.link.lineWidth,r=Math.round(o)%2/2,n=L(this.options.link.curveFactor,.5),s=L(t.options.link&&t.options.link.type,this.options.link.type);if(e.shapeArgs&&i.shapeArgs){var a=e.shapeArgs.width||0,l=this.chart.inverted,p=Math.floor((e.shapeArgs.y||0)+(e.shapeArgs.height||0)/2)+r,h=Math.floor((i.shapeArgs.y||0)+(i.shapeArgs.height||0)/2)+r,d=Math.floor((e.shapeArgs.x||0)+a)+r,u=Math.floor(i.shapeArgs.x||0)+r;l&&(d-=a,u+=i.shapeArgs.width||0);var f=i.node.xPosition-e.node.xPosition;t.shapeType="path";var v=(Math.abs(u-d)+a)/f-a,y=v*n*(l?-1:1),g=Math.floor((u+d)/2)+r;t.plotX=g,t.plotY=h,t.shapeArgs={d:c[s]({x1:d,y1:p,x2:u,y2:h,width:v,offset:y,inverted:l,parentVisible:i.visible,radius:this.options.link.radius})},t.dlBox={x:(d+u)/2,y:(p+h)/2,height:o,width:0},t.tooltipPos=l?[(this.chart.plotSizeY||0)-t.dlBox.y,(this.chart.plotSizeX||0)-t.dlBox.x]:[t.dlBox.x,t.dlBox.y]}},e.prototype.drawNodeLabels=function(t){for(var e,i,o=this.mapOptionsToLevel,r=0;r<t.length;r++){var n=t[r];i=o[n.node.level],e={style:{}},i&&i.dataLabels&&(e=k(e,i.dataLabels),this.hasDataLabels=function(){return!0}),n.shapeArgs&&!x(this.options.dataLabels)[0].style.width&&(e.style.width=n.shapeArgs.width,n.dataLabel&&n.dataLabel.css({width:n.shapeArgs.width+"px"})),n.dlOptions=k(e,n.options.dataLabels)}u.drawDataLabels.call(this,t)},e.prototype.alignDataLabel=function(e,i){var o=e.visible;e.visible=!0,t.prototype.alignDataLabel.apply(this,arguments),i.animate({opacity:!1===o?0:1},void 0,function(){o||i.hide()}),e.visible=o},e.prototype.drawDataLabels=function(){this.options.dataLabels&&(this.options.dataLabels=x(this.options.dataLabels),this.drawNodeLabels(this.points),u.drawDataLabels.call(this,this.links))},e.prototype.destroy=function(){if(this.links){for(var t=0,e=this.links;t<e.length;t++)e[t].destroy();this.links.length=0}return u.destroy.apply(this,arguments)},e.prototype.pointAttribs=function(t,e){var i=t&&this.mapOptionsToLevel[t.node.level||0]||{},o=t&&t.options,r=i.states&&i.states[e]||{};t&&(t.options.marker=k(this.options.marker,i.marker,t.options.marker));var n=L(r&&r.link&&r.link.color,o&&o.link&&o.link.color,i&&i.link&&i.link.color,this.options.link&&this.options.link.color),s=L(r&&r.link&&r.link.lineWidth,o&&o.link&&o.link.lineWidth,i&&i.link&&i.link.lineWidth,this.options.link&&this.options.link.lineWidth),a=u.pointAttribs.call(this,t,e);return t&&(t.isLink&&(a.stroke=n,a["stroke-width"]=s,delete a.fill),t.visible||(a.opacity=0)),a},e.prototype.drawPoints=function(){v.prototype.drawPoints.apply(this,arguments),y.prototype.drawPoints.call(this,this.links)},e.prototype.translateNode=function(t){var e=this.chart,i=t.node,o=e.plotSizeY,r=e.plotSizeX,n=this.layoutModifier,s=n.ax,a=n.bx,l=n.ay,p=n.by,h=s*i.xPosition+a,d=l*i.yPosition+p,c=this.mapOptionsToLevel[i.level]||{},u=k(this.options.marker,c.marker,t.options.marker).symbol,f=i.nodeSizeY,v=i.nodeSizeX,y=this.options.reversed,m=i.x=e.inverted?r-v/2-h:h-v/2,P=i.y=y?d-f/2:o-d-f/2,x=L(t.options.borderRadius,c.borderRadius,this.options.borderRadius),T=g[u||"circle"];if(void 0===T?(t.hasImage=!0,t.shapeType="image",t.imageUrl=u.match(/^url\((.*?)\)$/)[1]):t.shapeType="path",!t.visible&&t.linkToParent){var S=t.linkToParent.fromNode;if(S){var w=S.shapeArgs||{},C=w.x,O=void 0===C?0:C,X=w.y,M=void 0===X?0:X,_=w.width,j=w.height;t.shapeArgs||(t.shapeArgs={}),t.hasImage||b(t.shapeArgs,{d:T(O,M,void 0===_?0:_,void 0===j?0:j,x?{r:x}:void 0)}),b(t.shapeArgs,{x:O,y:M}),t.plotX=S.plotX,t.plotY=S.plotY}}else t.plotX=m,t.plotY=P,t.shapeArgs={x:m,y:P,width:v,height:f,cursor:t.node.isLeaf?"default":"pointer"},t.hasImage||(t.shapeArgs.d=T(m,P,v,f,x?{r:x}:void 0));t.tooltipPos=e.inverted?[o-P-f/2,r-m-v/2]:[m+v/2,P]},e.defaultOptions=k(v.defaultOptions,p),e}(v);return b(T.prototype,{pointClass:r,NodeClass:o,LinkClass:a}),e.registerSeriesType("treegraph",T),T}),i(e,"masters/modules/treegraph.src.js",[],function(){})});