(()=>{var e={n:t=>{var r=t&&t.__esModule?()=>t.default:()=>t;return e.d(r,{a:r}),r},d:(t,r)=>{for(var o in r)e.o(r,o)&&!e.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:r[o]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};(()=>{"use strict";e.r(t);const r=flarum.core.compat["admin/app"];var o=e.n(r),a=[["facebook","twitter","linkedin","reddit"],["whatsapp","telegram"],["vkontakte","odnoklassniki","my_mail"],["qq","qzone"],["native"]];o().initializers.add("fof/share-social",(function(){var e=o().extensionData.for("fof-share-social");e.registerSetting({label:o().translator.trans("fof-share-social.admin.settings.canonical-urls"),setting:"fof-share-social.canonical-urls",type:"boolean"}),e.registerSetting((function(){return m("hr",null)})),a.forEach((function(t){return t.forEach((function(t){return e.registerSetting({label:o().translator.trans("fof-share-social.lib.networks."+t),setting:"fof-share-social.networks."+t,type:"boolean"})}))}))}))})(),module.exports=t})();
//# sourceMappingURL=admin.js.map