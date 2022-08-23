module.exports=function(t){var a={};function e(o){if(a[o])return a[o].exports;var s=a[o]={i:o,l:!1,exports:{}};return t[o].call(s.exports,s,s.exports,e),s.l=!0,s.exports}return e.m=t,e.c=a,e.d=function(t,a,o){e.o(t,a)||Object.defineProperty(t,a,{enumerable:!0,get:o})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,a){if(1&a&&(t=e(t)),8&a)return t;if(4&a&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(e.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&a&&"string"!=typeof t)for(var s in t)e.d(o,s,function(a){return t[a]}.bind(null,s));return o},e.n=function(t){var a=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(a,"a",a),a},e.o=function(t,a){return Object.prototype.hasOwnProperty.call(t,a)},e.p="",e(e.s=13)}([function(t,a){t.exports=flarum.core.compat["admin/app"]},function(t,a){t.exports=flarum.core.compat["common/components/Button"]},function(t,a,e){"use strict";function o(t,a){return(o=Object.setPrototypeOf||function(t,a){return t.__proto__=a,t})(t,a)}function s(t,a){t.prototype=Object.create(a.prototype),t.prototype.constructor=t,o(t,a)}e.d(a,"a",(function(){return s}))},,,,function(t,a){t.exports=flarum.core.compat["common/utils/ItemList"]},,,,,function(t,a){t.exports=flarum.core.compat["components/ExtensionPage"]},,function(t,a,e){"use strict";e.r(a),e.d(a,"components",(function(){return o}));var o={};e.r(o),e.d(o,"SettingsPage",(function(){return v}));var s=e(0),i=e.n(s),n=e(2),r=e(11),c=e.n(r),l=e(1),u=e.n(l),d=e(6),p=e.n(d),v=function(t){function a(){return t.apply(this,arguments)||this}Object(n.a)(a,t);var e=a.prototype;return e.oninit=function(a){t.prototype.oninit.call(this,a)},e.content=function(){return m("div",{className:"container"},m("div",{className:"row"},m("div",{className:"column"},this.iconManagerItems().toArray()),m("div",{className:"column"},this.labelManagerItems().toArray())))},e.iconManagerItems=function(){var t=new p.a;return t.add("heading",m("div",null,m("h2",{class:"h2titleext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.icon-manager.title")),m("p",{class:"helpText"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.icon-manager.help_text",{a:m("a",{href:"https://fontawesome.com/icons?m=free",tabindex:"-1"})}))),100),t.add("tierOne",m("div",{class:"formOne"},m("div",{class:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:1,from:0,to:9})),m("input",{type:"text",name:"tierOne",class:"FormControl autopost",placeholder:"fas fa-baby",bidi:this.setting("justoverclock-auto-post-count-badge.levelOne")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),95),t.add("tierTwo",m("div",{className:"formtwo"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:2,from:10,to:49})),m("input",{type:"text",name:"tierTwo",class:"FormControl autopost",placeholder:"fas fa-child",bidi:this.setting("justoverclock-auto-post-count-badge.levelTwo")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),90),t.add("tierThree",m("div",{className:"formTree"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:3,from:50,to:99})),m("input",{type:"text",name:"tierTree",className:"FormControl autopost",placeholder:"fas fa-bullhorn",bidi:this.setting("justoverclock-auto-post-count-badge.levelTree")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),85),t.add("tierFour",m("div",{className:"formFour"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:4,from:100,to:299})),m("input",{type:"text",name:"tierFour",className:"FormControl autopost",placeholder:"fas fa-chalkboard-teacher",bidi:this.setting("justoverclock-auto-post-count-badge.levelFour")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),80),t.add("tierFive",m("div",{className:"formFive"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:5,from:300,to:599})),m("input",{type:"text",name:"tierFive",className:"FormControl autopost",placeholder:"fab fa-optin-monster",bidi:this.setting("justoverclock-auto-post-count-badge.levelFive")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),75),t.add("tierSix",m("div",{className:"formSix"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:6,from:600,to:999})),m("input",{type:"text",name:"tierSix",className:"FormControl autopost",placeholder:"fas fa-graduation-cap",bidi:this.setting("justoverclock-auto-post-count-badge.levelSix")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),70),t.add("tierSeven",m("div",{className:"formSeven"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:7,from:1e3,to:1999})),m("input",{type:"text",name:"tierSeven",className:"FormControl autopost",placeholder:"fas fa-medal",bidi:this.setting("justoverclock-auto-post-count-badge.levelSeven")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),65),t.add("tierEight",m("div",{className:"formEight"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:8,from:2e3,to:3999})),m("input",{type:"text",name:"tierEight",className:"FormControl autopost",placeholder:"fas fa-stethoscope",bidi:this.setting("justoverclock-auto-post-count-badge.levelEight")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),60),t.add("tierNine",m("div",{className:"formNine"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:9,from:4e3,to:7999})),m("input",{type:"text",name:"tierNine",className:"FormControl autopost",placeholder:"fas fa-user-shield",bidi:this.setting("justoverclock-auto-post-count-badge.levelEight")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),55),t},e.labelManagerItems=function(){var t=new p.a;return t.add("heading",m("div",null,m("h2",{class:"h2titleext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.label-manager.title")),m("p",{class:"helpText"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.label-manager.help"))),100),t.add("tierOne",m("div",{className:"formOne"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:1,from:0,to:9})),m("input",{type:"text",name:"badgeOne",className:"FormControl autopost",placeholder:"The Baby",bidi:this.setting("justoverclock-auto-post-count-badge.badgeOne")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),95),t.add("tierTwo",m("div",{className:"formtwo"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:2,from:10,to:49})),m("input",{type:"text",name:"badgeTwo",className:"FormControl autopost",placeholder:"The Newbie",bidi:this.setting("justoverclock-auto-post-count-badge.badgeTwo")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),90),t.add("tierThree",m("div",{className:"formTree"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:3,from:50,to:99})),m("input",{type:"text",name:"badgeTree",className:"FormControl autopost",placeholder:"The Talker",bidi:this.setting("justoverclock-auto-post-count-badge.badgeTree")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),85),t.add("tierFour",m("div",{className:"formFour"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:4,from:100,to:299})),m("input",{type:"text",name:"badgeFour",className:"FormControl autopost",placeholder:"The teacher",bidi:this.setting("justoverclock-auto-post-count-badge.badgeFour")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),80),t.add("tierFive",m("div",{className:"formFive"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:5,from:300,to:599})),m("input",{type:"text",name:"badgeFive",className:"FormControl autopost",placeholder:"The Monster!",bidi:this.setting("justoverclock-auto-post-count-badge.badgeFive")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),75),t.add("tierSix",m("div",{className:"formSix"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:6,from:600,to:999})),m("input",{type:"text",name:"badgeSix",className:"FormControl autopost",placeholder:"The Guru!",bidi:this.setting("justoverclock-auto-post-count-badge.badgeSix")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),70),t.add("tierSeven",m("div",{className:"formSeven"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:7,from:1e3,to:1999})),m("input",{type:"text",name:"badgeSeven",className:"FormControl autopost",placeholder:"The Flarumist!",bidi:this.setting("justoverclock-auto-post-count-badge.badgeSeven")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),65),t.add("tierEight",m("div",{className:"formEight"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:8,from:2e3,to:3999})),m("input",{type:"text",name:"badgeEight",className:"FormControl autopost",placeholder:"Expert",bidi:this.setting("justoverclock-auto-post-count-badge.badgeEight")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),60),t.add("tierNine",m("div",{className:"formNine"},m("div",{className:"helptext"},i.a.translator.trans("justoverclock-auto-post-count-badge.admin.settings.tier",{tier:9,from:4e3,to:7999})),m("input",{type:"text",name:"badgeNine",className:"FormControl autopost",placeholder:"Untouchable",bidi:this.setting("justoverclock-auto-post-count-badge.badgeNine")}),m(u.a,{onclick:this.saveSettings.bind(this),className:"Button Button--primary autopost"},m("i",{className:"fas fa-save autopost"}))),55),t},a}(c.a);i.a.initializers.add("justoverclock/auto-post-count-badge",(function(){i.a.extensionData.for("justoverclock-auto-post-count-badge").registerPage(v)}))}]);
//# sourceMappingURL=admin.js.map