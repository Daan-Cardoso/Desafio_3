s:d,isLoading:r,isReply:p,pagerLabel:u,onPagerClick:k,countSentence:y}):m.topPager=b("React").createElement(b("UFIPager.react"),{key:"topPager"+a,contextArgs:d,isLoading:r,isReply:p,pagerLabel:s,onPagerClick:k,countSentence:y})}if(f+e<c){var z=Math.min(e+d.pagesize,c-f);i=function(){return l(q?h.TOP:h.BOTTOM,new(b("UFIRange"))(f,z))};q?m.topPager=b("React").createElement(b("UFIPager.react"),{key:"topPager"+a,contextArgs:d,isLoading:n,isReply:p,pagerLabel:s,onPagerClick:i}):m.bottomPager=b("React").createElement(b("UFIPager.react"),{key:"bottomPager",ref:p?null:"topLevelBottomPager",contextArgs:d,isLoading:n,isReply:p,pagerLabel:u,onPagerClick:i})}return m}};e.exports=a}),null);
__d("UFICommentFilterFallbackWarning.react",["cx","fbt","React","UFIPagerGenerator","UFIPaging","WebCommentViewOption","distinctArrayBy"],(function(a,b,c,d,e,f,g,h){"use strict";__p&&__p();function i(a,c,d){var e=c.availableComments;c=c.repliesMap;d?d=c[a]||[]:d=e||[];d=b("distinctArrayBy")(d,function(a){return a.id});return d.length}a=function(a){__p&&__p();babelHelpers.inheritsLoose(c,a);function c(){return a.apply(this,arguments)||this}c.shouldRender=function(a,c,d,e){__p&&__p();if(!a)return!1;var f=a.availableComments,g=a.commentCounts,h=a.deletedCounts,j=a.hasPagedToplevel,k=a.orderingMode,l=a.ranges,m=a.repliesExpandedMap,n=a.repliesMap;if(!f||!g||!h||!k||!l||!m||!n)return!1;f=Math.max((g[c]||0)-(h[c]||0),0);n=l[c];if(!n||!f||k!==b("WebCommentViewOption").RANKED_THREADED||e&&!m[c]||!e&&!j)return!1;g=i(c,a,e);h=n.isLoadingPrev();l=n.isLoadingNext();m=n.getOffset();j=n.getLength();a=b("UFIPagerGenerator").isBottomPager(e,k,c);n=Math.min(j,f);if(d===b("UFIPaging").ALL)return!h&&!l&&m===0&&j>=f&&g<n;else if(!a&&d===b("UFIPaging").TOP||a&&d===b("UFIPaging").BOTTOM)return!h&&m===0&&g<n;else if(!a&&d===b("UFIPaging").BOTTOM||a&&d===b("UFIPaging").TOP)return!l&&m+j>=f&&g<n;return!1};var d=c.prototype;d.$1=function(){__p&&__p();var a=this.props,b=a.asReplyWarning;a=a.ufiProps;a=a||{};var c=a.feedback,d=a.orderingMode;a=c&&c.orderingmodes||[];c=a.find(function(a){return a&&a.value===d});a=c&&c.name;if(b)if(a)return h._("A op\u00e7\u00e3o \"{ordering mode name}\" est\u00e1 selecionada; portanto, algumas respostas podem n\u00e3o ser exibidas devido ao filtro.",[h._param("ordering mode name",a)]);else return h._("Algumas respostas podem n\u00e3o ser exibidas devido ao filtro do modo de ordena\u00e7\u00e3o selecionado.");else if(a)return h._("A op\u00e7\u00e3o \"{ordering mode name}\" est\u00e1 selecionada, portanto, alguns coment\u00e1rios podem n\u00e3o ser exibidos devido ao filtro.",[h._param("ordering mode name",a)]);else return h._("Alguns coment\u00e1rios podem n\u00e3o ser exibidos devido ao filtro do modo de ordena\u00e7\u00e3o selecionado.")};d.render=function(){var a=this.props,c=a.ufiProps,d=a.targetID,e=a.pagingDirection;a=a.asReplyWarning;return!this.constructor.shouldRender(c,d,e,a)?null:b("React").createElement("div",{className:"_2ah8 _4oep UFIRow"},b("React").createElement("div",{className:"_2ah9"},this.$1()))};return c}(b("React").Component);e.exports=a}),null);
__d("LivingRoomPresenceBadge",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({HOST:"HOST",MEMBER:"MEMBER"})}),null);
__d("XTownHallController",["XController"],(function(a,b,c,d,e,f){e.exports=b("XController").create("/townhall/",{ref:{type:"Enum",enumType:1},notif_id:{type:"Int"},setting_nux:{type:"Bool",defaultValue:!1},new_reps:{type:"Int"},tab:{type:"Enum",enumType:1}})}),null);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               rbx.platform.typedef.*__caddr_t = char
rbx.platform.typedef.*__qaddr_t = long
rbx.platform.typedef.__blkcnt64_t = long
rbx.platform.typedef.__blkcnt_t = long
rbx.platform.typedef.__blksize_t = long
rbx.platform.typedef.__clock_t = long
rbx.platform.typedef.__clockid_t = int
rbx.platform.typedef.__daddr_t = int
rbx.platform.typedef.__dev_t = ulong
rbx.platform.typedef.__fd_mask = long
rbx.platform.typedef.__fsblkcnt64_t = ulong
rbx.platform.typedef.__fsblkcnt_t = ulong
rbx.platform.typedef.__fsfilcnt64_t = ulong
rbx.platform.typedef.__fsfilcnt_t = ulong
rbx.platform.typedef.__fsword_t = long
rbx.platform.typedef.__gid_t = uint
rbx.platform.typedef.__id_t = uint
rbx.platform.typedef.__ino64_t = ulong
rbx.platform.typedef.__ino_t = ulong
rbx.platform.typedef.__int16_t = short
rbx.platform.typedef.__int32_t = int
rbx.platform.typedef.__int64_t = long
rbx.platform.typedef.__int8_t = char
rbx.platform.typedef.__intptr_t = long
rbx.platform.typedef.__key_t = int
rbx.platform.typedef.__loff_t = long
rbx.platform.typedef.__mode_t = uint
rbx.platform.typedef.__nlink_t = ulong
rbx.platform.typedef.__off64_t = long
rbx.platform.typedef.__off_t = long
rbx.platform.typedef.__pid_t = int
rbx.platform.typedef.__priority_which_t = int
rbx.platform.typedef.__quad_t = long
rbx.platform.typedef.__rlim64_t = ulong
rbx.platform.typedef.__rlim_t = ulong
rbx.platform.typedef.__rlimit_resource_t = int
rbx.platform.typedef.__rusage_who_t = int
rbx.platform.typedef.__sig_atomic_t = int
rbx.platform.typedef.__socklen_t = uint
rbx.platform.