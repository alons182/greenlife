/* JCE Editor - 2.3.4 | 22 November 2013 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2013 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
var WFMediaPlayer=WFExtensions.add('MediaPlayer',{params:{extensions:'flv,f4v',dimensions:{},path:''},type:'flash',init:function(o){tinymce.extend(this,o);return this;},setup:function(){},getTitle:function(){return this.title||this.name;},getType:function(){return this.type;},isSupported:function(){return false;},getParam:function(param){return this.params[param]||'';},setParams:function(o){tinymce.extend(this.params,o);},getPath:function(){return this.getParam('path');},onSelectFile:function(file){},onInsert:function(){},onChangeType:function(){}});