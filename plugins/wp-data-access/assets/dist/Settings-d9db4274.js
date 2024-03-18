import{l as m,r as C,j as t,aq as v,as as le,at as ne,au as Gt,av as Re,aw as ar,N as Bt,ax as lr,ay as cr,L as ur,W as rt,H as Qe,I as pr,a0 as Ne,C as dr,an as gr,O as hr,a5 as Pt,az as Mt,aA as mr,aB as fr}from"./main.js";import{A as ge,a as he,b as me,S as xr,R as jr,T as Ye,B as br,c as _r}from"./settings-d6f535d3.js";import{e as fe,m as at,S as zt,R as vr,j as yr}from"./index.esm-d52ea482.js";import{u as be,a as Z,A as Ze,T as et}from"./main-499a499e.js";import{A as Rt}from"./AdminTheme-95628d10.js";import{T as tt,a as Tr,b as Sr,c as Cr,d as Ar,e as wr,f as kr}from"./Actions-eda228ad.js";import{C as Te}from"./ConfirmDialog-a562852d.js";import{B as j}from"./Box-0ce68545.js";import{B as z}from"./Button-53dec484.js";import{F as xe}from"./FormHelperText-ab957a1c.js";import{F as ae,I as st,S as it}from"./Select-07b752e9.js";import{R as Ft}from"./RadioGroup-330d4c57.js";import{R as Ge}from"./Radio-f4e05e00.js";import{T as je}from"./TextField-c8735bb7.js";import{F as ot}from"./FormControl-e1c831f9.js";import{M as B}from"./MenuItem-15f494c0.js";import{F as Se}from"./FormControlLabel-8e3c3f60.js";import{S as Ce,A as Dt}from"./Switch-321ceb1c.js";import{T as ye}from"./Explorer-f1888cdd.js";import{T as Lt,I as nt}from"./iconBase-acf0401f.js";import{C as Nt,a as Er}from"./CardContent-c5e4b8be.js";import"./identifier-91e83c3b.js";import"./Paper-1943bcb2.js";import"./Collapse-746eff24.js";import"./Input-29494a31.js";import"./useFormControl-74340145.js";import"./utils-a4c617b5.js";import"./DialogContent-93dc71be.js";import"./createSvgIcon-92c7fe83.js";import"./Close-07cb3d3a.js";import"./index.esm-e776b934.js";import"./useMobilePicker-9401f362.js";import"./InputAdornment-824db349.js";import"./AlertTitle-0277b656.js";import"./Checkbox-d45bf253.js";import"./DateTimePicker-9aae1031.js";import"./date-time-utils-c7fd1af0.js";import"./dateViewRenderers-7976fbb1.js";import"./TimePicker-1f56383f.js";import"./DatePicker-377e1bc5.js";import"./index.esm-f4cad0c6.js";import"./TreeItem-14a05677.js";import"./CardActions-748df63c.js";const Or=({dbs:o,tbl:l})=>{m.debug(o,l);const[a,p]=C.useState(!1),[d,g]=C.useState(void 0);return t.jsxs(t.Fragment,{children:[t.jsxs(ge,{disableGutters:!0,children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),children:"Reset"}),t.jsx(me,{children:t.jsxs(j,{sx:{display:"grid",gridGap:"20px"},children:[t.jsx(z,{variant:"contained",color:"primary",onClick:()=>{g(tt.TABLE),p(!0)},children:"Delete Table Builder settings"}),t.jsx(z,{variant:"contained",color:"primary",onClick:()=>{g(tt.FORM),p(!0)},children:"Delete Form Builder settings"}),t.jsx(z,{variant:"contained",color:"primary",onClick:()=>{g(tt.THEME),p(!0)},children:"Delete Theme settings"}),t.jsxs(xe,{sx:{display:"inline-grid",gridTemplateColumns:"20px auto",gridGap:"5px",alignItems:"center","& svg":{fontSize:"20px"}},children:[t.jsx(at,{}),"A reset cannot be undone!"]})]})})]}),t.jsx(Te,{title:`Delete ${d} settings?`,message:"Are you sure? This action cannot be undone!",open:a,setOpen:p,onConfirm:()=>{d!==void 0&&Tr(xr.GLOBAL,d,o,l,null,u=>{if(u!=null&&u.code&&(u!=null&&u.message))switch(u.code){case"ok":v(u.message,{variant:"success"});break;case"error":v(u.message,{variant:"error"});break;default:v(u.message,{variant:"info"})}else m.error(u),v("Invalid response - check console for more information",{variant:"error"})})}})]})},Ir=({dbs:o,tbl:l,setIsUpdated:a})=>{m.debug(o,l);const p=be(),d=Z(u=>le(u));m.debug(d);const g=u=>{const f={...d,table_settings:{...d.table_settings,hyperlink_definition:u}};p(ne({settings:f})),a(!0)};return t.jsxs(ge,{disableGutters:!0,children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),children:"Table Settings"}),t.jsx(me,{children:t.jsxs(j,{children:[t.jsx(ae,{children:"Process hyperlink columns as"}),t.jsxs(Ft,{sx:{marginTop:"10px",marginBottom:"10px"},children:[t.jsxs(ae,{className:"align-label-radio",children:[t.jsx(Ge,{checked:d.table_settings.hyperlink_definition==="json",onChange:u=>{g("json"),u.stopPropagation()}}),"Preformatted JSON"]}),t.jsxs(ae,{children:[t.jsx(Ge,{checked:d.table_settings.hyperlink_definition==="text",onChange:u=>{g("text"),u.stopPropagation()}}),"Plain text"]})]}),t.jsx(xe,{children:"Preformatted JSON supports individual label and target settings. Plain text converts column content to a hyperlink link."})]})})]})},Pr=({dbs:o,tbl:l,setIsUpdated:a})=>{var N;m.debug(o,l);const p=be(),d=Z(b=>Gt(b));m.debug(d);const g=Z(b=>le(b));m.debug(g);const[u,f]=C.useState(""),O=(b,y)=>{const _={...g,list_labels:{...g.list_labels,[b]:y}};p(ne({settings:_})),a(!0)},k=(b,y)=>{const _={...g,form_labels:{...g.form_labels,[b]:y}};p(ne({settings:_})),a(!0)},h=(b,y)=>{const _={...g,column_media:{...g.column_media,[b]:y}};p(ne({settings:_})),a(!0)};return t.jsxs(ge,{disableGutters:!0,children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),children:"Column Settings"}),t.jsxs(me,{children:[t.jsx(j,{sx:{display:"grid",gridGap:"10px",marginBottom:"20px"},children:t.jsxs(j,{children:[...(N=d==null?void 0:d.columns)==null?void 0:N.map((b,y)=>{const _=b.column_name;return t.jsxs(ge,{expanded:u===_,onChange:()=>{f(u===_?"":_)},sx:{"&.MuiPaper-root.MuiPaper-elevation.Mui-expanded":{margin:0}},children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),children:b.column_name}),t.jsxs(me,{sx:{display:"grid",gridGap:"10px"},children:[t.jsx(je,{label:"Table label",value:g.list_labels[_],variant:"outlined",onChange:I=>{O(_,I.target.value)}}),t.jsx(je,{label:"Form label",value:g.form_labels[_],variant:"outlined",onChange:I=>{k(_,I.target.value)}}),t.jsxs(ot,{children:[t.jsx(st,{id:"media_type_label"+y,variant:"outlined",children:"Media type"}),t.jsxs(it,{labelId:"media_type_label"+y,id:"media_type"+y,label:"Media type",value:g.column_media[_]??"",variant:"outlined",onChange:I=>{h(_,I.target.value),I.stopPropagation()},children:[t.jsx(B,{value:"",children:" "},""),t.jsx(B,{value:"Attachment",children:"Attachment"},"Attachment"),t.jsx(B,{value:"Audio",children:"Audio"},"Audio"),t.jsx(B,{value:"Hyperlink",children:"Hyperlink"},"Hyperlink"),t.jsx(B,{value:"Image",children:"Image"},"Image"),t.jsx(B,{value:"ImageURL",children:"ImageURL"},"ImageURL"),t.jsx(B,{value:"Video",children:"Video"},"Video")]})]})]})]})})]})}),t.jsx(xe,{children:"Default column labels and column media types"})]})]})};var Be={exports:{}};Be.exports;(function(o,l){var a=200,p="__lodash_hash_undefined__",d=9007199254740991,g="[object Arguments]",u="[object Array]",f="[object Boolean]",O="[object Date]",k="[object Error]",h="[object Function]",N="[object GeneratorFunction]",b="[object Map]",y="[object Number]",_="[object Object]",I="[object Promise]",Q="[object RegExp]",F="[object Set]",$="[object String]",K="[object Symbol]",W="[object WeakMap]",V="[object ArrayBuffer]",D="[object DataView]",q="[object Float32Array]",J="[object Float64Array]",X="[object Int8Array]",R="[object Int16Array]",s="[object Int32Array]",w="[object Uint8Array]",S="[object Uint8ClampedArray]",E="[object Uint16Array]",ee="[object Uint32Array]",M=/[\\^$.*+?()[\]{}|]/g,re=/\w*$/,Ae=/^\[object .+?Constructor\]$/,we=/^(?:0|[1-9]\d*)$/,x={};x[g]=x[u]=x[V]=x[D]=x[f]=x[O]=x[q]=x[J]=x[X]=x[R]=x[s]=x[b]=x[y]=x[_]=x[Q]=x[F]=x[$]=x[K]=x[w]=x[S]=x[E]=x[ee]=!0,x[k]=x[h]=x[W]=!1;var c=typeof Re=="object"&&Re&&Re.Object===Object&&Re,A=typeof self=="object"&&self&&self.Object===Object&&self,T=c||A||Function("return this")(),U=l&&!l.nodeType&&l,lt=U&&!0&&o&&!o.nodeType&&o,Ht=lt&&lt.exports===U;function Wt(e,n){return e.set(n[0],n[1]),e}function qt(e,n){return e.add(n),e}function Ut(e,n){for(var r=-1,i=e?e.length:0;++r<i&&n(e[r],r,e)!==!1;);return e}function $t(e,n){for(var r=-1,i=n.length,P=e.length;++r<i;)e[P+r]=n[r];return e}function ct(e,n,r,i){var P=-1,L=e?e.length:0;for(i&&L&&(r=e[++P]);++P<L;)r=n(r,e[P],P,e);return r}function Kt(e,n){for(var r=-1,i=Array(e);++r<e;)i[r]=n(r);return i}function Vt(e,n){return e==null?void 0:e[n]}function ut(e){var n=!1;if(e!=null&&typeof e.toString!="function")try{n=!!(e+"")}catch{}return n}function pt(e){var n=-1,r=Array(e.size);return e.forEach(function(i,P){r[++n]=[P,i]}),r}function ze(e,n){return function(r){return e(n(r))}}function dt(e){var n=-1,r=Array(e.size);return e.forEach(function(i){r[++n]=i}),r}var Jt=Array.prototype,Xt=Function.prototype,ke=Object.prototype,Fe=T["__core-js_shared__"],gt=function(){var e=/[^.]+$/.exec(Fe&&Fe.keys&&Fe.keys.IE_PROTO||"");return e?"Symbol(src)_1."+e:""}(),ht=Xt.toString,te=ke.hasOwnProperty,Ee=ke.toString,Qt=RegExp("^"+ht.call(te).replace(M,"\\$&").replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g,"$1.*?")+"$"),mt=Ht?T.Buffer:void 0,ft=T.Symbol,xt=T.Uint8Array,Yt=ze(Object.getPrototypeOf,Object),Zt=Object.create,en=ke.propertyIsEnumerable,tn=Jt.splice,jt=Object.getOwnPropertySymbols,nn=mt?mt.isBuffer:void 0,rn=ze(Object.keys,Object),He=pe(T,"DataView"),_e=pe(T,"Map"),We=pe(T,"Promise"),qe=pe(T,"Set"),Ue=pe(T,"WeakMap"),ve=pe(Object,"create"),sn=oe(He),on=oe(_e),an=oe(We),ln=oe(qe),cn=oe(Ue),bt=ft?ft.prototype:void 0,_t=bt?bt.valueOf:void 0;function se(e){var n=-1,r=e?e.length:0;for(this.clear();++n<r;){var i=e[n];this.set(i[0],i[1])}}function un(){this.__data__=ve?ve(null):{}}function pn(e){return this.has(e)&&delete this.__data__[e]}function dn(e){var n=this.__data__;if(ve){var r=n[e];return r===p?void 0:r}return te.call(n,e)?n[e]:void 0}function gn(e){var n=this.__data__;return ve?n[e]!==void 0:te.call(n,e)}function hn(e,n){var r=this.__data__;return r[e]=ve&&n===void 0?p:n,this}se.prototype.clear=un,se.prototype.delete=pn,se.prototype.get=dn,se.prototype.has=gn,se.prototype.set=hn;function Y(e){var n=-1,r=e?e.length:0;for(this.clear();++n<r;){var i=e[n];this.set(i[0],i[1])}}function mn(){this.__data__=[]}function fn(e){var n=this.__data__,r=Oe(n,e);if(r<0)return!1;var i=n.length-1;return r==i?n.pop():tn.call(n,r,1),!0}function xn(e){var n=this.__data__,r=Oe(n,e);return r<0?void 0:n[r][1]}function jn(e){return Oe(this.__data__,e)>-1}function bn(e,n){var r=this.__data__,i=Oe(r,e);return i<0?r.push([e,n]):r[i][1]=n,this}Y.prototype.clear=mn,Y.prototype.delete=fn,Y.prototype.get=xn,Y.prototype.has=jn,Y.prototype.set=bn;function ce(e){var n=-1,r=e?e.length:0;for(this.clear();++n<r;){var i=e[n];this.set(i[0],i[1])}}function _n(){this.__data__={hash:new se,map:new(_e||Y),string:new se}}function vn(e){return Ie(this,e).delete(e)}function yn(e){return Ie(this,e).get(e)}function Tn(e){return Ie(this,e).has(e)}function Sn(e,n){return Ie(this,e).set(e,n),this}ce.prototype.clear=_n,ce.prototype.delete=vn,ce.prototype.get=yn,ce.prototype.has=Tn,ce.prototype.set=Sn;function ue(e){this.__data__=new Y(e)}function Cn(){this.__data__=new Y}function An(e){return this.__data__.delete(e)}function wn(e){return this.__data__.get(e)}function kn(e){return this.__data__.has(e)}function En(e,n){var r=this.__data__;if(r instanceof Y){var i=r.__data__;if(!_e||i.length<a-1)return i.push([e,n]),this;r=this.__data__=new ce(i)}return r.set(e,n),this}ue.prototype.clear=Cn,ue.prototype.delete=An,ue.prototype.get=wn,ue.prototype.has=kn,ue.prototype.set=En;function On(e,n){var r=Ve(e)||er(e)?Kt(e.length,String):[],i=r.length,P=!!i;for(var L in e)(n||te.call(e,L))&&!(P&&(L=="length"||Xn(L,i)))&&r.push(L);return r}function vt(e,n,r){var i=e[n];(!(te.call(e,n)&&Ct(i,r))||r===void 0&&!(n in e))&&(e[n]=r)}function Oe(e,n){for(var r=e.length;r--;)if(Ct(e[r][0],n))return r;return-1}function In(e,n){return e&&yt(n,Je(n),e)}function $e(e,n,r,i,P,L,H){var G;if(i&&(G=L?i(e,P,L,H):i(e)),G!==void 0)return G;if(!Pe(e))return e;var kt=Ve(e);if(kt){if(G=Kn(e),!n)return qn(e,G)}else{var de=ie(e),Et=de==h||de==N;if(nr(e))return Nn(e,n);if(de==_||de==g||Et&&!L){if(ut(e))return L?e:{};if(G=Vn(Et?{}:e),!n)return Un(e,In(G,e))}else{if(!x[de])return L?e:{};G=Jn(e,de,$e,n)}}H||(H=new ue);var Ot=H.get(e);if(Ot)return Ot;if(H.set(e,G),!kt)var It=r?$n(e):Je(e);return Ut(It||e,function(Xe,Me){It&&(Me=Xe,Xe=e[Me]),vt(G,Me,$e(Xe,n,r,i,Me,e,H))}),G}function Pn(e){return Pe(e)?Zt(e):{}}function Mn(e,n,r){var i=n(e);return Ve(e)?i:$t(i,r(e))}function Rn(e){return Ee.call(e)}function Dn(e){if(!Pe(e)||Yn(e))return!1;var n=wt(e)||ut(e)?Qt:Ae;return n.test(oe(e))}function Ln(e){if(!St(e))return rn(e);var n=[];for(var r in Object(e))te.call(e,r)&&r!="constructor"&&n.push(r);return n}function Nn(e,n){if(n)return e.slice();var r=new e.constructor(e.length);return e.copy(r),r}function Ke(e){var n=new e.constructor(e.byteLength);return new xt(n).set(new xt(e)),n}function Gn(e,n){var r=n?Ke(e.buffer):e.buffer;return new e.constructor(r,e.byteOffset,e.byteLength)}function Bn(e,n,r){var i=n?r(pt(e),!0):pt(e);return ct(i,Wt,new e.constructor)}function zn(e){var n=new e.constructor(e.source,re.exec(e));return n.lastIndex=e.lastIndex,n}function Fn(e,n,r){var i=n?r(dt(e),!0):dt(e);return ct(i,qt,new e.constructor)}function Hn(e){return _t?Object(_t.call(e)):{}}function Wn(e,n){var r=n?Ke(e.buffer):e.buffer;return new e.constructor(r,e.byteOffset,e.length)}function qn(e,n){var r=-1,i=e.length;for(n||(n=Array(i));++r<i;)n[r]=e[r];return n}function yt(e,n,r,i){r||(r={});for(var P=-1,L=n.length;++P<L;){var H=n[P],G=i?i(r[H],e[H],H,r,e):void 0;vt(r,H,G===void 0?e[H]:G)}return r}function Un(e,n){return yt(e,Tt(e),n)}function $n(e){return Mn(e,Je,Tt)}function Ie(e,n){var r=e.__data__;return Qn(n)?r[typeof n=="string"?"string":"hash"]:r.map}function pe(e,n){var r=Vt(e,n);return Dn(r)?r:void 0}var Tt=jt?ze(jt,Object):ir,ie=Rn;(He&&ie(new He(new ArrayBuffer(1)))!=D||_e&&ie(new _e)!=b||We&&ie(We.resolve())!=I||qe&&ie(new qe)!=F||Ue&&ie(new Ue)!=W)&&(ie=function(e){var n=Ee.call(e),r=n==_?e.constructor:void 0,i=r?oe(r):void 0;if(i)switch(i){case sn:return D;case on:return b;case an:return I;case ln:return F;case cn:return W}return n});function Kn(e){var n=e.length,r=e.constructor(n);return n&&typeof e[0]=="string"&&te.call(e,"index")&&(r.index=e.index,r.input=e.input),r}function Vn(e){return typeof e.constructor=="function"&&!St(e)?Pn(Yt(e)):{}}function Jn(e,n,r,i){var P=e.constructor;switch(n){case V:return Ke(e);case f:case O:return new P(+e);case D:return Gn(e,i);case q:case J:case X:case R:case s:case w:case S:case E:case ee:return Wn(e,i);case b:return Bn(e,i,r);case y:case $:return new P(e);case Q:return zn(e);case F:return Fn(e,i,r);case K:return Hn(e)}}function Xn(e,n){return n=n??d,!!n&&(typeof e=="number"||we.test(e))&&e>-1&&e%1==0&&e<n}function Qn(e){var n=typeof e;return n=="string"||n=="number"||n=="symbol"||n=="boolean"?e!=="__proto__":e===null}function Yn(e){return!!gt&&gt in e}function St(e){var n=e&&e.constructor,r=typeof n=="function"&&n.prototype||ke;return e===r}function oe(e){if(e!=null){try{return ht.call(e)}catch{}try{return e+""}catch{}}return""}function Zn(e){return $e(e,!0,!0)}function Ct(e,n){return e===n||e!==e&&n!==n}function er(e){return tr(e)&&te.call(e,"callee")&&(!en.call(e,"callee")||Ee.call(e)==g)}var Ve=Array.isArray;function At(e){return e!=null&&rr(e.length)&&!wt(e)}function tr(e){return sr(e)&&At(e)}var nr=nn||or;function wt(e){var n=Pe(e)?Ee.call(e):"";return n==h||n==N}function rr(e){return typeof e=="number"&&e>-1&&e%1==0&&e<=d}function Pe(e){var n=typeof e;return!!e&&(n=="object"||n=="function")}function sr(e){return!!e&&typeof e=="object"}function Je(e){return At(e)?On(e):Ln(e)}function ir(){return[]}function or(){return!1}o.exports=Zn})(Be,Be.exports);var Mr=Be.exports;const De=ar(Mr),Le=({dbs:o,tbl:l,action:a,setIsUpdated:p,expanded:d,setExpanded:g})=>{var F,$,K,W,V,D,q,J,X,R,s,w,S,E,ee,M,re,Ae,we,x;m.debug(o,l,a);const u=be(),f=Z(c=>Gt(c));m.debug(f);const O=[];if((($=(F=f==null?void 0:f.settings)==null?void 0:F.wp)==null?void 0:$.roles)!==void 0)for(const c in f.settings.wp.roles)O.push({key:c,value:f.settings.wp.roles[c]});m.debug(O);const k=[];if(((W=(K=f==null?void 0:f.settings)==null?void 0:K.wp)==null?void 0:W.users)!==void 0)for(const c in f.settings.wp.users)k.push({key:c,value:f.settings.wp.users[c]});m.debug(k);const h=Z(c=>le(c));m.debug(h);let N=[];((V=h.rest_api[a])==null?void 0:V.authorized_roles)!==void 0&&(N=h.rest_api[a].authorized_roles),m.debug(N);let b=[];((D=h.rest_api[a])==null?void 0:D.authorized_users)!==void 0&&(b=h.rest_api[a].authorized_users),m.debug(b);const y=(c,A)=>{const T=De(h);if(A)T.rest_api[a].methods.push(c);else{const U=T.rest_api[a].methods.indexOf(c);U!==-1&&T.rest_api[a].methods.splice(U,1)}u(ne({settings:T})),p(!0)},_=c=>{const A=De(h);A.rest_api[a].authorization=c,u(ne({settings:A})),p(!0)},I=c=>{const A=De(h);A.rest_api[a].authorized_roles=c.map(T=>T.key),u(ne({settings:A})),p(!0)},Q=c=>{const A=De(h);A.rest_api[a].authorized_users=c.map(T=>T.key),u(ne({settings:A})),p(!0)};return t.jsxs(ge,{disableGutters:!0,expanded:d===a,onChange:()=>{g(d===a?"":a)},children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),sx:{textTransform:"capitalize"},children:a}),t.jsx(me,{children:t.jsxs(j,{children:[t.jsx(ae,{children:"Supported HTTP methods"}),t.jsxs(j,{sx:{marginTop:"20px",marginBottom:"20px"},children:[t.jsx(Se,{control:t.jsx(Ce,{checked:(X=(J=(q=h.rest_api)==null?void 0:q[a])==null?void 0:J.methods)==null?void 0:X.includes("GET"),onClick:c=>{var A,T,U;y("GET",!((U=(T=(A=h.rest_api)==null?void 0:A[a])==null?void 0:T.methods)!=null&&U.includes("GET"))),c.stopPropagation()}}),label:"GET",labelPlacement:"end"}),t.jsx(Se,{control:t.jsx(Ce,{checked:(w=(s=(R=h.rest_api)==null?void 0:R[a])==null?void 0:s.methods)==null?void 0:w.includes("POST"),onClick:c=>{var A,T,U;y("POST",!((U=(T=(A=h.rest_api)==null?void 0:A[a])==null?void 0:T.methods)!=null&&U.includes("POST"))),c.stopPropagation()}}),label:"POST",labelPlacement:"end"})]}),t.jsxs(j,{sx:{marginTop:"20px",marginBottom:"20px"},children:[t.jsx(ae,{children:"Authorization"}),t.jsx(j,{sx:{marginTop:"10px",marginBottom:"20px"},children:t.jsxs(Ft,{children:[t.jsxs(ae,{className:"align-label-radio",sx:{cursor:"pointer"},children:[t.jsx(Ge,{checked:((E=(S=h.rest_api)==null?void 0:S[a])==null?void 0:E.authorization)==="authorized",onChange:c=>{_("authorized"),c.stopPropagation()}}),"Authorized access only"]}),t.jsxs(j,{sx:{display:"grid",gridGap:"10px",margin:"20px"},children:[t.jsx(Dt,{multiple:!0,options:O,getOptionLabel:c=>c.value,value:O.filter(c=>N.includes(c.key)),onChange:(c,A)=>{I(A)},renderInput:c=>t.jsx(je,{...c,label:"Roles"})}),t.jsx(Dt,{multiple:!0,options:k,getOptionLabel:c=>c.value,value:k.filter(c=>b.includes(c.key)),onChange:(c,A)=>{Q(A)},renderInput:c=>t.jsx(je,{...c,label:"Users"})})]}),t.jsxs(ae,{className:"align-label-radio",sx:{cursor:"pointer"},children:[t.jsx(Ge,{checked:((M=(ee=h.rest_api)==null?void 0:ee[a])==null?void 0:M.authorization)==="anonymous",onChange:c=>{_("anonymous"),c.stopPropagation()}}),"Anonymous access"]}),((Ae=(re=h.rest_api)==null?void 0:re[a])==null?void 0:Ae.authorization)==="anonymous"&&(a==="insert"||a==="update"||a==="delete")&&t.jsxs(xe,{sx:{display:"inline-grid",gridTemplateColumns:"20px auto",gridGap:"10px",margin:"20px 0 0 0",padding:0,alignItems:"center",fontWeight:"900","& svg":{fontSize:"20px"}},children:[t.jsx(at,{}),"Use this setting only if you know what you are doing"]}),((x=(we=h.rest_api)==null?void 0:we[a])==null?void 0:x.authorization)==="anonymous"&&a==="select"&&t.jsx(xe,{sx:{margin:"20px 0 0 0",padding:0,alignItems:"center",fontWeight:"900","& svg":{fontSize:"20px"}},children:"This setting allows non-authorized users to query this table"})]})})]})]})})]})},Rr=({dbs:o,tbl:l,typ:a,metaData:p,setIsUpdated:d})=>{m.debug(o,l,a,p);const g=be(),u=Z(h=>le(h));m.debug(u);const f=Z(h=>Bt(h));m.debug(f);const[O,k]=C.useState("");return t.jsxs(ge,{disableGutters:!0,children:[t.jsx(he,{expandIcon:t.jsx(fe,{}),children:"REST API"}),t.jsx(me,{children:t.jsxs(j,{children:[t.jsx(Se,{control:t.jsx(Ce,{checked:u.rest_api!==null,onClick:h=>{u.rest_api!==null?g(lr({})):g(cr({})),d(!0),h.stopPropagation()}}),label:"Enable REST API",labelPlacement:"end"}),u.rest_api!==null&&t.jsxs(j,{sx:{marginTop:"20px"},children:[t.jsx(Le,{dbs:o,tbl:l,action:"select",setIsUpdated:d,expanded:O,setExpanded:k}),a===ye.TABLE&&t.jsxs(t.Fragment,{children:[t.jsx(Le,{dbs:o,tbl:l,action:"insert",setIsUpdated:d,expanded:O,setExpanded:k}),t.jsx(Le,{dbs:o,tbl:l,action:"update",setIsUpdated:d,expanded:O,setExpanded:k}),t.jsx(Le,{dbs:o,tbl:l,action:"delete",setIsUpdated:d,expanded:O,setExpanded:k})]})]}),f[o]==="system"||f[o]==="wp"&&p.settings.wp.tables.includes(l)&&t.jsxs(xe,{sx:{display:"inline-grid",gridTemplateColumns:"20px auto",gridGap:"5px",marginTop:"20px",alignItems:"center","& svg":{fontSize:"20px"}},children:[t.jsx(at,{}),"We discourage enabling REST API services on WordPress and system tables"]})]})})]})},Dr=({dbs:o,tbl:l,typ:a,metaData:p})=>{m.debug(o,l,a,p);const d=be(),[g,u]=C.useState("sql"),[f,O]=C.useState(!0),[k,h]=C.useState(""),[N,b]=C.useState(o),[y,_]=C.useState(""),[I,Q]=C.useState(!0),[F,$]=C.useState(!1),[K,W]=C.useState(!1),[V,D]=C.useState(!1),[q,J]=C.useState(!1),X=C.useMemo(()=>{const s=[],w=ur(rt.getState());for(const S in w)s.push(S);return s},[]);m.debug(X);const R=Z(s=>Bt(s));return m.debug(R),t.jsxs(t.Fragment,{children:[t.jsxs(j,{sx:{margin:0,padding:0,"& .pp-action":{display:"grid",gridTemplateColumns:"150px 1fr",alignItems:"center",margin:0,padding:"30px",borderBottom:"1px solid #ddd"},"& .pp-action button":{width:"120px"}},children:[t.jsxs(j,{className:"pp-action",children:[t.jsx(j,{children:t.jsxs("form",{action:p.settings.wp.home+"?action=wpda_export",method:"post",target:"_blank",children:[t.jsx("input",{type:"hidden",name:"type",value:"table"}),t.jsx("input",{type:"hidden",name:"wpdaschema_name",value:o}),t.jsx("input",{type:"hidden",name:"table_names",value:l}),t.jsx("input",{type:"hidden",name:"format_type",value:g}),t.jsx("input",{type:"hidden",name:"include_table_settings",value:g==="sql"&&f?"on":"off"}),t.jsx("input",{type:"hidden",name:"_wpnonce",value:p.settings.wp.aonce.split("-")[0]}),t.jsx(z,{variant:"contained",type:"submit",children:"Export"})]})}),t.jsxs(j,{sx:{display:"grid",gridTemplateColumns:"auto auto",justifyContent:"space-between",alignItems:"center"},children:[t.jsxs(ot,{children:[t.jsx(st,{variant:"outlined",children:"Export to"}),t.jsxs(it,{label:"Export to",value:g,onChange:s=>{u(s.target.value)},children:[t.jsx(B,{value:"sql",children:"SQL"},"sql"),t.jsx(B,{value:"csv",children:"CSV"},"csv"),t.jsx(B,{value:"json",children:"JSON"},"json"),t.jsx(B,{value:"excel",children:"Excel"},"excel"),t.jsx(B,{value:"xml",children:"XML"},"xml")]})]}),g==="sql"&&t.jsx(Se,{control:t.jsx(Ce,{checked:f,onClick:s=>{O(!f),s.stopPropagation()}}),label:"With table settings",labelPlacement:"end"})]})]}),R[o]!=="system"&&(R[o]!=="wp"||!p.settings.wp.tables.includes(l))&&t.jsxs(j,{className:"pp-action",children:[t.jsx(j,{children:t.jsx(z,{variant:"contained",onClick:()=>{l!==k&&k.trim()!==""?$(!0):v("Nothing to rename",{variant:"error"})},children:"Rename"})}),t.jsx(j,{children:t.jsx(je,{label:a===ye.TABLE?"New table name":"New view name",value:k,onChange:s=>{h(s.target.value)},fullWidth:!0})})]}),a===ye.TABLE&&t.jsxs(j,{className:"pp-action",children:[t.jsxs(j,{children:[t.jsx(z,{variant:"contained",onClick:()=>{y.trim()!==""?(J(!0),Sr(o,N,l,y,I,s=>{if(m.debug(s),s!=null&&s.code&&(s!=null&&s.message))switch(s.code){case"ok":d(Qe({dbs:o})),v(s.message,{variant:"success"});break;case"error":v(s.message,{variant:"error"});break;default:v(s.message,{variant:"info"})}else m.error(s),v("Invalid response - check console for more information",{variant:"error"})})):v("Nothing to rename",{variant:"error"})},children:"Copy"}),t.jsx(Se,{control:t.jsx(Ce,{checked:I,onClick:s=>{Q(!I),s.stopPropagation()}}),label:"Copy data",labelPlacement:"end",sx:{height:"56px"}}),t.jsx(j,{sx:{display:q?"block":"none","& > div":{marginRight:"30px"},"& span.MuiCircularProgress-root, svg":{height:"20px !important",width:"20px !important"}},children:t.jsx(zt,{title:"Copying..."})})]}),t.jsxs(j,{sx:{display:"grid",gridGap:"10px"},children:[t.jsxs(ot,{fullWidth:!0,children:[t.jsx(st,{variant:"outlined",children:"To database"}),t.jsxs(it,{label:"To database",value:N,onChange:s=>{b(s.target.value)},children:[...X.map(s=>t.jsx(B,{value:s,children:s},s))]})]}),t.jsx(je,{label:"To table name",value:y,onChange:s=>{_(s.target.value)},fullWidth:!0})]})]}),a===ye.TABLE&&R[o]!=="system"&&(R[o]!=="wp"||!p.settings.wp.tables.includes(l))&&t.jsxs(j,{className:"pp-action",children:[t.jsx(j,{children:t.jsx(z,{variant:"contained",onClick:()=>{W(!0)},children:"Truncate"})}),t.jsxs(j,{sx:{display:"grid",gridGap:"5px"},children:[t.jsx("span",{children:"Deletes all data permanently."}),t.jsx("strong",{children:"This action cannot be undone!"})]})]}),R[o]!=="system"&&(R[o]!=="wp"||!p.settings.wp.tables.includes(l))&&t.jsxs(j,{className:"pp-action",children:[t.jsx(j,{children:t.jsx(z,{variant:"contained",onClick:()=>{D(!0)},children:"Drop"})}),t.jsxs(j,{sx:{display:"grid",gridGap:"5px"},children:[t.jsx("span",{children:"Deletes table and all data permanently."}),t.jsx("strong",{children:"This action cannot be undone!"})]})]})]}),t.jsx(Te,{title:"Rename table row?",message:"This can affect existing apps using this table!",open:F,setOpen:$,onConfirm:()=>{Cr(o,l,k,s=>{if(m.debug(s),s!=null&&s.code&&(s!=null&&s.message))switch(s.code){case"ok":a===ye.TABLE?d(Qe({dbs:o})):d(pr({dbs:o})),d(Ne({})),v(s.message,{variant:"success"});break;case"error":v(s.message,{variant:"error"});break;default:v(s.message,{variant:"info"})}else m.error(s),v("Invalid response - check console for more information",{variant:"error"})})}}),t.jsx(Te,{title:"Truncate table?",message:"This action cannot be undone!",open:K,setOpen:W,onConfirm:()=>{Ar(o,l,s=>{if(m.debug(s),s!=null&&s.code&&(s!=null&&s.message))switch(s.code){case"ok":v(s.message,{variant:"success"});break;case"error":v(s.message,{variant:"error"});break;default:v(s.message,{variant:"info"})}else m.error(s),v("Invalid response - check console for more information",{variant:"error"})})}}),t.jsx(Te,{title:"Drop table?",message:"This action cannot be undone!",open:V,setOpen:D,onConfirm:()=>{wr(o,l,s=>{if(m.debug(s),s!=null&&s.code&&(s!=null&&s.message))switch(s.code){case"ok":d(Qe({dbs:o})),d(Ne({})),v(s.message,{variant:"success"});break;case"error":v(s.message,{variant:"error"});break;default:v(s.message,{variant:"info"})}else m.error(s),v("Invalid response - check console for more information",{variant:"error"})})}})]})},Cs=({dbs:o,tbl:l,typ:a})=>{var R,s;m.debug(o,l,a);const p=be(),[d,g]=C.useState(le(rt.getState()));m.debug(d);const[u,f]=C.useState(""),[O,k]=C.useState(!1),[h,N]=C.useState({}),[b,y]=C.useState(!1),[_,I]=C.useState(!1),[Q,F]=C.useState("actions");C.useEffect(()=>{O||$()},[o,l]);const $=()=>{vr(dr.appUrlMeta,{dbs:o,tbl:l,waa:!0},function(w){var E,ee;const S=w==null?void 0:w.data;if(m.debug("response data",o,l,S),(E=S==null?void 0:S.access)!=null&&E.select&&Array.isArray(S.access.select)&&S.access.select.includes("POST")){const M={...S.settings};M.list_labels={...S.table_labels},M.form_labels={...S.form_labels},M.column_media={...S.wp_media},delete M.hyperlinks,delete M.ui,delete M.wp;const re={...S};N(re),p(mr({settings:M,metaData:re})),k(!0)}else{let M="Unauthorized";(ee=w==null?void 0:w.data)!=null&&ee.message&&(M=w.data.message),M+=" - check console for more information",m.error(M),f(M)}})},K=Z(w=>le(w));m.debug(K);const W=((R=Rt)==null?void 0:R.palette.mode)===gr.LIGHT?(s=Rt)==null?void 0:s.palette.primary.main:"",V=w=>{p(fr({anchor:w}))},D=()=>{p(Pt({})),p(Ne({}))},q=()=>{b?I(!0):D()},J=()=>{const w={...K};let S=!1;kr(o,l,w,E=>{if(E!=null&&E.code&&(E!=null&&E.message))switch(E.code){case"ok":v(E.message,{variant:"success"});break;case"error":v(E.message,{variant:"error"}),S=!0;break;default:v(E.message,{variant:"info"})}else m.error(E),v("Invalid response - check console for more information",{variant:"error"}),S=!0}),S||g(le(rt.getState())),y(!1)},X=()=>{b?(J(),setTimeout(()=>{D()},1e3)):D()};return u!==""?(p(hr({error:u})),p(Pt({})),p(Ne({})),null):O?t.jsxs(t.Fragment,{children:[t.jsxs(jr,{closeDrawer:q,children:[t.jsx(Ze,{position:"static",sx:{borderRadius:0},children:t.jsxs(et,{className:"pp-setting-toolbar",sx:{borderRadius:0},children:[t.jsx(Lt,{variant:"h5",noWrap:!0,component:"div",className:"unselectable",sx:{flexGrow:1,display:{xs:"none",sm:"block"},paddingLeft:"6px"},children:"Manage Table"}),t.jsx(Ye,{title:"Dock to left",position:"bottom",children:t.jsx(nt,{onClick:()=>{V(Mt.LEFT)},size:"large",color:"inherit",sx:{fontSize:"1em"},children:t.jsx(br,{})})}),t.jsx(Ye,{title:"Dock to right",position:"bottom",children:t.jsx(nt,{onClick:()=>{V(Mt.RIGHT)},size:"large",color:"inherit",sx:{fontSize:"1em"},children:t.jsx(_r,{})})}),t.jsx(Ye,{title:"Close",position:"bottom",children:t.jsx(nt,{onClick:q,size:"large",color:"inherit",sx:{fontSize:"1.4em"},children:t.jsx(yr,{})})})]})}),t.jsx(Ze,{position:"static",className:"pp-setting-buttons-appbar",sx:{borderRadius:0,padding:"0 0 15px 25px !important"},children:t.jsx(et,{className:"pp-setting-buttons",children:t.jsx(j,{children:t.jsxs(Lt,{variant:"subtitle1",noWrap:!0,component:"div",className:"unselectable",sx:{width:"100%"},children:[o," - ",l]})})})}),t.jsx(Ze,{position:"static",className:"pp-setting-buttons-appbar",sx:{borderRadius:0},children:t.jsxs(et,{className:"pp-setting-buttons",sx:{"&.MuiToolbar-root.pp-setting-buttons":{gridTemplateColumns:"1fr 1fr"}},children:[t.jsx(z,{variant:"text",onClick:()=>{F("actions")},children:"Actions"}),t.jsx(z,{variant:"text",onClick:()=>{F("settings")},children:"Settings"})]})}),t.jsxs(Nt,{className:"pp-settings-container",children:[Q==="actions"&&t.jsx(Dr,{dbs:o,tbl:l,typ:a,metaData:h}),Q==="settings"&&t.jsxs(t.Fragment,{children:[t.jsx(Ir,{dbs:o,tbl:l,setIsUpdated:y}),t.jsx(Pr,{dbs:o,tbl:l,setIsUpdated:y}),t.jsx(Rr,{dbs:o,tbl:l,typ:a,metaData:h,setIsUpdated:y}),t.jsx(Or,{dbs:o,tbl:l})]})]}),t.jsx(Nt,{className:"pp-setting-footer",sx:{borderRadius:0,backgroundColor:W},children:t.jsxs(Er,{className:"pp-setting-footer-buttons",sx:{borderRadius:0},children:[t.jsx(z,{variant:"outlined",className:"footer_action_button_apply",onClick:J,children:"Apply"}),t.jsx(z,{variant:"outlined",className:"footer_action_button",onClick:X,children:"OK"}),t.jsx(z,{variant:"outlined",className:"footer_action_button",onClick:q,children:"Cancel"})]})})]}),t.jsx(Te,{title:"Close Manage Table?",message:"All uncommitted changes will be lost!",open:_,setOpen:I,onConfirm:()=>{D()}})]}):t.jsx(zt,{title:"Loading meta data..."})};export{Cs as default};
