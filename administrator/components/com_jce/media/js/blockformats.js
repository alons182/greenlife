/* JCE Editor - 2.3.4 | 22 November 2013 | http://www.joomlacontenteditor.net | Copyright (C) 2006 - 2013 Ryan Demmer. All rights reserved | GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html */
(function($){$(document).ready(function(){$('div.blockformats').on('update',function(){var v=$('li input[type="checkbox"]:checked',this).map(function(){return this.value;}).get().join();$('input[type="hidden"]',this).val(v).change();});$('input[type="checkbox"]','div.blockformats').on('click',function(){$('div.blockformats').trigger('update');});$('div.blockformats ul').sortable({axis:'y',update:function(event,ui){$('div.blockformats').trigger('update');},placeholder:"blockformat-highlight",start:function(event,ui){$(ui.placeholder).height($(ui.item).height()).width($(ui.item).width());}});});})(jQuery);