(window["aioseopjsonp"]=window["aioseopjsonp"]||[]).push([["chunk-4cb47ef6"],{"81fa":function(t,n,e){},"94d4":function(t,n,e){"use strict";e.r(n);var s=function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("a",{staticClass:"aioseo-link-count",attrs:{href:t.getLink}},[e("div",{staticClass:"aioseo-link-count-top"},[e(t.getType.icon,{tag:"component"}),e("util-animated-number",{attrs:{number:parseInt(t.count)}})],1),e("div",{staticClass:"aioseo-link-count-bottom"},[e("span",[t._v(t._s(t.getType.name))]),"orphaned"===t.type?e("core-tooltip",{scopedSlots:t._u([{key:"tooltip",fn:function(){return[e("span",[t._v(" "+t._s(t.strings.orphanedPostsDescription)+" ")])]},proxy:!0}],null,!1,2247558736)},[e("div",{staticClass:"disabled-button gray"},[e("svg-circle-question-mark")],1)]):t._e()],1)])},i=[],o=(e("a9e3"),e("7db0"),{props:{type:{type:String,required:!0},count:{type:Number,required:!0}},data:function(){return{strings:{orphanedPostsDescription:this.$t.__("Orphaned posts are posts that have no inbound internal links yet and may be more difficult to find by search engines.",this.$t.tdPro)},icons:[{type:"posts",name:this.$t.__("Posts Crawled",this.$t.tdPro),icon:"svg-search"},{type:"external",name:this.$t.__("External Links",this.$t.tdPro),icon:"svg-link-external"},{type:"internal",name:this.$t.__("Internal Links",this.$t.tdPro),icon:"svg-link-internal-inbound"},{type:"affiliate",name:this.$t.__("Affiliate Links",this.$t.tdPro),icon:"svg-link-affiliate"},{type:"orphaned",name:this.$t.__("Orphaned Posts",this.$t.tdPro),icon:"svg-link-orphaned"}]}},computed:{getType:function(){var t=this;return this.icons.find((function(n){return n.type===t.type}))},getLink:function(){switch(this.type){case"posts":case"affiliate":case"internal":return"#/links-report?fullReport=1";case"external":return"#/domains-report";case"orphaned":return"#/links-report?orphaned-posts=1";default:return""}}}}),r=o,a=(e("c371"),e("2877")),p=Object(a["a"])(r,s,i,!1,null,null,null);n["default"]=p.exports},c371:function(t,n,e){"use strict";e("81fa")}}]);