module.exports=function(t){var n={};function r(a){if(n[a])return n[a].exports;var e=n[a]={i:a,l:!1,exports:{}};return t[a].call(e.exports,e,e.exports,r),e.l=!0,e.exports}return r.m=t,r.c=n,r.d=function(t,n,a){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:a})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,n){if(1&n&&(t=r(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(r.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var e in t)r.d(a,e,function(n){return t[n]}.bind(null,e));return a},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="",r(r.s=30)}([function(t,n){t.exports=flarum.core.compat.app},function(t,n){t.exports=flarum.core.compat.Model},function(t,n){t.exports=flarum.core.compat.Component},function(t,n){t.exports=flarum.core.compat["helpers/username"]},function(t,n){t.exports=flarum.core.compat["components/Button"]},function(t,n){t.exports=flarum.core.compat.extend},function(t,n){t.exports=flarum.core.compat["utils/ItemList"]},function(t,n){t.exports=flarum.core.compat["models/User"]},function(t,n){t.exports=flarum.core.compat["components/UserPage"]},function(t,n){t.exports=flarum.core.compat["components/Link"]},function(t,n){t.exports=flarum.core.compat["utils/Stream"]},function(t,n){t.exports=flarum.core.compat["helpers/humanTime"]},function(t,n){t.exports=flarum.core.compat["components/NotificationGrid"]},function(t,n){t.exports=flarum.core.compat["utils/PostControls"]},function(t,n){t.exports=flarum.core.compat["utils/UserControls"]},function(t,n){t.exports=flarum.core.compat["components/Modal"]},function(t,n){t.exports=flarum.core.compat["components/LinkButton"]},function(t,n){t.exports=flarum.core.compat["components/LoadingIndicator"]},function(t,n){t.exports=flarum.core.compat["components/Dropdown"]},function(t,n){t.exports=flarum.core.compat["helpers/avatar"]},function(t,n){t.exports=flarum.core.compat["utils/classList"]},function(t,n){t.exports=flarum.core.compat["components/PostPreview"]},function(t,n){t.exports=flarum.core.compat["components/Separator"]},function(t,n){t.exports=flarum.core.compat["helpers/listItems"]},function(t,n){t.exports=flarum.core.compat["models/Post"]},function(t,n){t.exports=flarum.core.compat["components/CommentPost"]},function(t,n){t.exports=flarum.core.compat["helpers/icon"]},function(t,n){t.exports=flarum.core.compat["components/Notification"]},function(t,n){t.exports=flarum.core.compat["utils/computed"]},function(t,n){t.exports=flarum.core},function(t,n,r){"use strict";r.r(n);var a=r(0),e=r.n(a),s=r(12),o=r.n(s),i=(r(29),r(5)),u=r(7),c=r.n(u),l=r(1),p=r.n(l),d=r(13),f=r.n(d),h=r(14),g=r.n(h),v=r(4),w=r.n(v);function b(t,n){t.prototype=Object.create(n.prototype),t.prototype.constructor=t,t.__proto__=n}var _=r(15),y=r.n(_),k=r(3),x=r.n(k),W=r(10),N=r.n(W),C=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.publicComment=N()(""),this.privateComment=N()(""),this.strikes=N()(0)},r.className=function(){return"WarningsModal Modal--large"},r.title=function(){return app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.heading",{username:x()(this.attrs.user)})},r.content=function(){return m("div",{className:"Modal-body"},m("div",{className:"Form Form--centered"},m("div",{className:"Form-group"},m("div",null,m("label",null,app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.strikes_heading"),m("input",{type:"number",className:"FormControl",bidi:this.strikes,min:"0",max:"5"})))),m("div",{className:"Form-group"},m("div",null,m("label",null,app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.public_comment_heading",{username:x()(this.attrs.user)}),m("textarea",{className:"FormControl",bidi:this.publicComment,required:!0,rows:"6"})))),m("div",{className:"Form-group"},m("div",null,m("label",null,app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.private_comment_heading",{username:x()(this.attrs.user)}),m("textarea",{className:"FormControl",bidi:this.privateComment,rows:"6"})))),m("div",{className:"Form-group"},m(w.a,{className:"Button Button--primary Button--block",type:"submit",loading:this.loading},app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.submit_button")))))},r.onsubmit=function(t){t.preventDefault(),app.alerts.dismiss(this.successAlert),this.loading=!0,this.strikes()||this.strikes(0);var n={userId:this.attrs.user.id(),strikes:this.strikes(),public_comment:this.publicComment(),private_comment:this.privateComment()};this.attrs.post&&(n.post=this.attrs.post),app.store.createRecord("warnings").save(n).then(this.hide.bind(this)).then(this.successAlert=app.alerts.show({type:"success"},app.translator.trans("askvortsov-moderator-warnings.forum.warning_modal.confirmation_message"))).then(this.attrs.callback).catch((function(){}))},n}(y.a),P=r(8),A=r.n(P),L=r(16),O=r.n(L);function I(){return(I=Object.assign||function(t){for(var n=1;n<arguments.length;n++){var r=arguments[n];for(var a in r)Object.prototype.hasOwnProperty.call(r,a)&&(t[a]=r[a])}return t}).apply(this,arguments)}var M=r(2),U=r.n(M),B=r(17),j=r.n(B),D=r(18),S=r.n(D),F=r(9),H=r.n(F),T=r(19),V=r.n(T),R=r(11),z=r.n(R),E=r(20),q=r.n(E),G=r(21),J=r.n(G),K=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.view=function(){return m("div",{className:"WarningPost"},m("ul",{class:"Dropdown-menu PostPreview-preview fade in"},m("li",null,J.a.component({post:this.attrs.post}))))},r.oncreate=function(n){t.prototype.oncreate.call(this,n),this.$(".PostPreview-preview").show().css("position","relative")},n}(U.a),Q=r(22),X=r.n(Q),Y=r(6),Z=r.n(Y),tt={controls:function(t,n){var r=this,a=new Z.a;return["user","moderation","destructive"].forEach((function(e){var s=r[e+"Controls"](t,n).toArray();s.length&&(s.forEach((function(t){return a.add(t.itemName,t)})),a.add(e+"Separator",X.a.component()))})),a},userControls:function(t,n){return new Z.a},moderationControls:function(t,n){return new Z.a},destructiveControls:function(t,n){var r=new Z.a;return!t.isHidden()&&app.session.user.canManageWarnings()&&r.add("hide",m(w.a,{icon:"far fa-trash-alt",onclick:this.hideAction.bind(t)},app.translator.trans("askvortsov-moderator-warnings.forum.warning_controls.delete_button"))),t.isHidden()&&app.session.user.canManageWarnings()&&r.add("restore",m(w.a,{icon:"fas fa-reply",onclick:this.restoreAction.bind(t)},app.translator.trans("askvortsov-moderator-warnings.forum.warning_controls.restore_button"))),t.isHidden()&&app.session.user.canDeleteWarnings()&&r.add("delete",m(w.a,{icon:"fas fa-times",onclick:this.deleteAction.bind(t)},app.translator.trans("askvortsov-moderator-warnings.forum.warning_controls.delete_forever_button"))),r},hideAction:function(){return this.pushAttributes({hiddenAt:new Date,hiddenUser:app.session.user}),this.save({isHidden:!0}).then((function(){return m.redraw()}))},restoreAction:function(){return this.pushAttributes({hiddenAt:null,hiddenUser:null}),this.save({isHidden:!1}).then((function(){return m.redraw()}))},deleteAction:function(t){return t&&(t.loading=!0),this.delete().then((function(){})).catch((function(){})).then((function(){t&&(t.loading=!1),location.reload()}))}},nt=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.view=function(){var t=this.attrs.warning,n=t.addedByUser(),r=tt.controls(t,this).toArray();return m("div",this.elementAttrs(),r.length?S.a.component({icon:"fas fa-ellipsis-v",className:"WarningListItem-controls",buttonClassName:"Button Button--icon Button--flat Slidable-underneath Slidable-underneath--right"},r):"",m("div",{className:"WarningListItem-main"},m("h3",{className:"WarningListItem-title"},m(H.a,{href:n?app.route.user(n):"#",className:"WarningListItem-author"},V()(n)," ",x()(n))),m("span",{class:"WarningListItem-strikes"},t.isHidden()?app.translator.trans("askvortsov-moderator-warnings.forum.warning_list_item.list_item_heading_hidden",{time:z()(t.createdAt()),strikes:t.strikes()||0}):app.translator.trans("askvortsov-moderator-warnings.forum.warning_list_item.list_item_heading",{time:z()(t.createdAt()),strikes:t.strikes()||0})),m("hr",null),m("ul",{className:"WarningListItem-info"},t.post()?m("li",{className:"item-excerpt"},m("h3",{className:"WarningListItem-subtitle"},app.translator.trans("askvortsov-moderator-warnings.forum.warning_list_item.linked_post")),K.component({post:t.post()})):"",m("li",{className:"item-excerpt"},m("h3",{className:"WarningListItem-subtitle"},app.translator.trans("askvortsov-moderator-warnings.forum.warning_list_item.public_comment")),m("p",{class:"WarningListItem-comment"},m.trust(t.public_comment()))),app.session.user.canManageWarnings()&&t.private_comment()?m("li",{className:"item-excerpt"},m("h3",{className:"WarningListItem-subtitle"},app.translator.trans("askvortsov-moderator-warnings.forum.warning_list_item.private_comment")),m("p",{class:"WarningListItem-comment"},m.trust(t.private_comment()))):"")))},r.elementAttrs=function(){var t=this.attrs.warning,n={};return n.className=(n.className||"")+" "+q()({WarningListItem:!0,"WarningListItem--hidden":t.isHidden()}),n},n}(U.a),rt=r(23),at=r.n(rt),et=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.loading=!0,this.warnings=[],this.user=this.attrs.params.user,this.refresh()},r.view=function(){var t;return this.loading&&(t=j.a.component({size:"large"})),m("div",{className:"WarningList"},m("h1",{className:"WarningList-warnings"},this.strikeCount()?e.a.translator.trans("askvortsov-moderator-warnings.forum.warning_list.warnings",{strikes:this.strikeCount()||0}):e.a.translator.trans("askvortsov-moderator-warnings.forum.warning_list.warnings_no_strikes")),m("div",{class:"Warnings-toolbar"},m("ul",{className:"Warnings-toolbar-action"},at()(this.actionItems().toArray()))),m("ul",{className:"WarningList-Warnings"},this.warnings.map((function(t){return m("li",{key:t.id(),"data-id":t.id()},nt.component({warning:t}))})),!this.loading&&0===this.warnings.length&&m("label",null,e.a.translator.trans("askvortsov-moderator-warnings.forum.warning_list.no_warnings"))),m("div",{className:"WarningList-loadMore"},t))},r.actionItems=function(){var t=new Z.a;return e.a.session.user.canManageWarnings()&&t.add("create_warning",m(w.a,{className:"Button Button--primary",onclick:this.handleOnClickCreate.bind(this)},e.a.translator.trans("askvortsov-moderator-warnings.forum.warning_list.add_button"))),t},r.strikeCount=function(){return this.warnings.filter((function(t){return!t.isHidden()})).map((function(t){return t.strikes()})).reduce((function(t,n){return t+n}),0)},r.parseResults=function(t){return[].push.apply(this.warnings,t),this.loading=!1,m.redraw(),t},r.refresh=function(){var t=this;return e.a.store.find("warnings",this.user.id()).catch((function(){})).then((function(n){t.warnings=[],t.parseResults(n)}))},r.handleOnClickCreate=function(t){t.preventDefault(),e.a.modal.show(C,I({callback:this.refresh.bind(this)},this.attrs.params))},n}(U.a),st=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.loadUser(m.route.param("username"))},r.content=function(){if(app.session.user&&(app.session.user.canViewWarnings()||this.user.id()===app.session.user.id()&&this.user.visibleWarningCount()>0))return m("div",{className:"WarningsUserPage"},et.component({params:{user:this.user,sort:"newest"}}))},n}(A.a),ot=function(){app.routes["user.warnings"]={path:"/u/:username/warnings",component:st},Object(i.extend)(A.a.prototype,"navItems",(function(t){app.session.user&&(app.session.user.canViewWarnings()||this.user.id()===app.session.user.id()&&this.user.visibleWarningCount()>0)&&t.add("warnings",O.a.component({href:app.route("user.warnings",{username:this.user.username()}),icon:"fas fa-exclamation-circle"},[app.translator.trans("askvortsov-moderator-warnings.forum.user.warnings"),this.user.visibleWarningCount()>0?m("span",{className:"Button-badge"},this.user.visibleWarningCount()):""]),10)}))},it=r(24),ut=r.n(it),ct=r(25),mt=r.n(ct),lt=r(26),pt=r.n(lt),dt=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.warning=this.attrs.warning},r.view=function(){return m(H.a,{className:"WarningPreview",href:app.route("user.warnings",{username:this.warning.warnedUser().username()})},m(nt,{warning:this.warning}))},n}(U.a),ft=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.warning=this.attrs.warning},r.view=function(){return m("div",{className:"Post-warning"},m("span",{className:"Post-warning-summary"},pt()("fas fa-exclamation-circle"),this.warning.strikes()?app.translator.trans("askvortsov-moderator-warnings.forum.post.warning",{strikes:this.warning.strikes()||0,mod_username:x()(this.warning.addedByUser())}):app.translator.trans("askvortsov-moderator-warnings.forum.post.warning_no_strikes",{mod_username:x()(this.warning.addedByUser())})))},r.oncreate=function(n){var r=this;t.prototype.oncreate.call(this,n);var a,e=this.warning,s=function(){r.$(".Post-warning-preview").removeClass("in").one("transitionend",(function(){$(this).hide()}))},o=$('<ul class="Dropdown-menu Post-warning-preview fade"/>');this.$().append(o),this.$().children().hover((function(){clearTimeout(a),a=setTimeout((function(){!o.hasClass("in")&&o.is(":visible")||(m.render(o[0],m("li",{"data-id":e.id()},dt.component({warning:e}))),o.show(),setTimeout((function(){return o.off("transitionend").addClass("in")})))}),200)}),(function(){clearTimeout(a),a=setTimeout(s,250)})),$(".Post-warning").find(".Post-warning-summary a").hover((function(){$(".Post-warning").find('[data-number="'+$(this).data("number")+'"]').addClass("active")}),(function(){$(".Post-warning").find("[data-number]").removeClass("active")}))},n}(U.a),ht=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.oninit=function(n){t.prototype.oninit.call(this,n),this.post=this.attrs.post},r.view=function(){return m("div",{className:"Post-warning-list"},this.attrs.post.warnings().map((function(t){return ft.component({warning:t})})))},n}(U.a);var gt=r(27),vt=function(t){function n(){return t.apply(this,arguments)||this}b(n,t);var r=n.prototype;return r.icon=function(){return"fas fa-exclamation-circle"},r.href=function(){return app.route("user.warnings",{username:app.session.user.username()})},r.content=function(){var t=this.attrs.notification.subject();return t.strikes()?app.translator.trans("askvortsov-moderator-warnings.forum.notifications.warning_text",{mod_username:x()(this.attrs.notification.fromUser()),strikes:t.strikes()||0}):app.translator.trans("askvortsov-moderator-warnings.forum.notifications.warning_no_strikes_text",{mod_username:x()(this.attrs.notification.fromUser())})},n}(r.n(gt).a),wt=r(28),bt=r.n(wt),_t=function(t){function n(){return t.apply(this,arguments)||this}return b(n,t),n}(p.a);I(_t.prototype,{id:p.a.attribute("id"),public_comment:p.a.attribute("public_comment"),private_comment:p.a.attribute("private_comment"),strikes:p.a.attribute("strikes"),createdAt:p.a.attribute("createdAt",p.a.transformDate),isHidden:bt()("hiddenAt",(function(t){return!!t})),hiddenAt:p.a.attribute("hiddenAt",p.a.transformDate),warnedUser:p.a.hasOne("warnedUser"),hiddenByUser:p.a.hasOne("hiddenByUser"),addedByUser:p.a.hasOne("addedByUser"),post:p.a.hasOne("post")}),e.a.initializers.add("askvortsov/flarum-moderator-warnings",(function(t){t.store.models.warnings=_t,c.a.prototype.canViewWarnings=p.a.attribute("canViewWarnings"),c.a.prototype.canManageWarnings=p.a.attribute("canManageWarnings"),c.a.prototype.canDeleteWarnings=p.a.attribute("canDeleteWarnings"),c.a.prototype.visibleWarningCount=p.a.attribute("visibleWarningCount"),Object(i.extend)(f.a,"moderationControls",(function(t,n){e.a.session.user&&e.a.session.user.canManageWarnings()&&t.add("warning",m(w.a,{icon:"fas fa-exclamation-circle",onclick:function(){return e.a.modal.show(C,{callback:function(){location.reload()},user:n.user(),post:n})}},e.a.translator.trans("askvortsov-moderator-warnings.forum.post_controls.warning_button")))})),Object(i.extend)(g.a,"moderationControls",(function(t,n){e.a.session.user&&e.a.session.user.canManageWarnings()&&t.add("warning",m(w.a,{icon:"fas fa-exclamation-circle",onclick:function(){return e.a.modal.show(C,{callback:function(){location.reload()},user:n})}},e.a.translator.trans("askvortsov-moderator-warnings.forum.post_controls.warning_button")))})),ot(),ut.a.prototype.warnings=p.a.hasMany("warnings"),Object(i.extend)(mt.a.prototype,"footerItems",(function(t){var n=this.attrs.post;n.warnings()&&t.add("warnings",ht.component({post:n}))})),t.notificationComponents.warning=vt,Object(i.extend)(o.a.prototype,"notificationTypes",(function(n){n.add("warning",{name:"warning",icon:"fas fa-exclamation-circle",label:t.translator.trans("askvortsov-moderator-warnings.forum.settings.warning_notification_label")})}))}))}]);
//# sourceMappingURL=forum.js.map